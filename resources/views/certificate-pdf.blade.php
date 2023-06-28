<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Cookie&family=Dancing+Script:wght@700&family=Titan+One&display=swap" rel="stylesheet">
</head>
<body>

    <div class="wrapper">

        <div class="border">

            <div class="watermark" style="position: absolute;">
                <img src="{{ asset("img/watermark.jpg") }}" alt="">
            </div>
            <table style="padding-top: 20px;">
                <tr>
                    <td  style="text-align: right;width:50%;">
                        <img src="{{ asset("img/logo.png") }}" alt="LOGO" width="60" height="70"/>
                    </td>
                    <td colspan="2">
                        <p style="font-size:18px;padding-left:5px;font-family: 'ABeeZee', sans-serif;font-weight:bolder;color:rgba(5, 5, 71, 0.87);">FIRST KINGDOM KIDS
                        <br>
                        ACADEMY
                        </p>
                    </td>

                </tr>
            </table>

            <div style="padding-top:5px">
            <div style="width:200px;background:rgba(5, 5, 71, 0.212);;height:2px;margin: 5px auto; "></div>
            </div>

            <table>
                <tr>
                    <td>
                        <center><h1 style="color:rgba(5, 5, 71, 0.87);font-family: 'Dancing Script';font-size:60px;font-weight:bolder;line-height:0px;padding-top:20px;">Certificate of Completion</h1></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <p style="margin-top:5px;line-height:0px;font-size:25px;">This Certificate is to certify that</p>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <h1 style="padding-top:10px;line-height:0px;font-family: 'ABeeZee', sans-serif;font-weight:bolder;font-size:50px;"> @php echo $fullname @endphp </h1>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <p style="margin-top:5px;line-height:0px;font-size:25px;">has fullfilled the requirement of </p>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <div style="width: 800px; margin:-20px auto;">
                            <h1 style="font-family: 'ABeeZee', sans-serif;font-weight:bolder;font-size:35px;"> Senior Secondary School Certificate Examination </h1>
                            </div>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <p style="margin-top:5px;font-size:25px;">
                                Given at
                                <br/>
                                @php echo date('l M dS, Y', strtotime($date)) @endphp
                            </p>
                        </center>
                    </td>
                </tr>
            </table>

            <table style="margin-top: -30px">
                <tr>
                    <td style="text-align: center;width:50%;">
                        <img src="{{ asset("img/seal.png") }}" alt="seal" width="180"/>
                    </td>
                    <td style="text-align: center;width:50%;">

                        <img src="{{ asset("img/sign.png") }}" alt="" width="70" style="position: absolute;bottom:90px; left:540px;">
                        <div style="border-top: 3px solid black;padding-bottom:1px;margin-top:100px;">
                            <h5 style="font-family: 'ABeeZee', sans-serif;line-height:0px;">Managing Director</h5>
                        </div>
                    </td>
                    <td style="text-align: center;width:50%;">
                        <div style="">
                            <img style="line-height:0px;" src="{{ asset($qrcodefilename) }}" alt="qr" width="100"/>
                            <h3 style="line-height:0px;margin:11px;"><strong style="font-size:14px;font-family: 'ABeeZee', sans-serif;font-weight:bolder;">GRAD</strong> <span style="font-size:14px;font-family: 'Titan One', sans-serif;font-weight:lighter;">SECURED</span></h3>
                            <p style="font-size:14px;font-family: 'ABeeZee';width:200px;margin:auto;">Please use the QR code to verify the ceritificate </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>


    <style>

        @page{
          margin: 0cm 0cm 0cm 0cm;
          font-family: 'Cookie', cursive;
        }
        .wrapper{
              margin: 0.1cm 0cm 0.1cm 0.1cm;
              padding: 0.5cm !important;
        }
        .school_name{
            font-size: 15px;
            font-weight: 700;
            font-family: 'Cookie', cursive;
        }
        .watermark{
            position: fixed;
            left:     0px;
            top: 0px;
            opacity: 0.2;
            z-index:  -1000;
        }
        table{
            width: 100%;
            padding:0px;
            margin: 0px;
        }
        tr, td, th {
            padding:0px;
            margin: 0px;
        }
        .border {
            border: 5px solid rgba(5, 5, 71, 0.87);
            padding: 0.2cm !important;
        }

    </style>


</body>
</html>
