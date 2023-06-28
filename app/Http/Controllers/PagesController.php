<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PagesController extends Controller
{
    public function index(){
        return view("index");
    }

    public function getCertificate(Request $request){
       if(!$request->studentid){
        toastr()->error('Please provide your Student ID or contact your School Admin for your Student ID');
        return redirect()->back();
       }

       $reg_no = strtoupper(strtolower($request->studentid));
       //check if id exists
       $count = DB::table('users')->where("reg_no", $reg_no)->count();
       if($count == 0){
        toastr()->error('Student ID not found or contact your School Admin for your Student ID');
        return redirect()->back();
       }
       //check if student have grad
       $user =  DB::table('users')->where("reg_no", $reg_no)->first();
       //grad class
       $class = DB::table("class")->where("name", 'Grad')->first();
       $classstudent = DB::table("classstudent")->where(["userId" => $user->id, "classId" => $class->id])->count();
       if($classstudent == 0){
        toastr()->error('Sorry, your Certificate is not ready at the moment');
        return redirect()->back();
       }

       //generate certificate here

       $url = config("app.url") . '/certificate-verify' . '/' . $user->id;
       $qrcodefilename = "certificate/qrcode/qrcode_" . $user->id . ".png";
       QrCode::format("png")->size(100)->generate($url, $qrcodefilename);

       $pdf = App::make('dompdf.wrapper');
       $pdf->setPaper("A4", "landscape")->loadView(
        'certificate-pdf', [
        "fullname" => $user->first_name . ' ' . $user->last_name . ' '. $user->middle_name,
        "date" => $user->modified,
        "qrcodefilename" => $qrcodefilename,
        ]);

       return $pdf->stream();

    }

    public function verify($id){
        $user = User::where("id", $id)->first();
        return view("verified", compact("user"));
    }
}
