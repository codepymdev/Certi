<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PagesController::class, "index"])->name("home");
Route::post("/get-certificate", [PagesController::class, "getCertificate"])->name("get.certificate");

Route::get("/certificate-verify/{id}", [PagesController::class, "verify"]);

