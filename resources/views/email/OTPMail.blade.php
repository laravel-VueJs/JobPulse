<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        .logo{
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
        .bg{
            background-color: #1AA99D;
            padding: 1px 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .title{
            font-size: 30px;
            font-weight: 700;
            color: #000;
        }
        .paragraph{
            color: #666E7A;
        }
        .bodyBg{
            background-color: #f3f4f6;
            padding: auto;
            margin:auto;
            width: 90%;
        }
        .box{
            background: #fff;
            border-radius: 5px;
            margin: auto;
            padding: 50px;
        }
        .company{
            margin-top: 20px;
            padding-left: 50px;
        }
        @media (min-width: 320px) and (max-width: 480px) {
            .bodyBg{
                width: 100%;
                background: #fff;
            }
            .box{
                padding: 20px;
            }
            .company{
                margin-top: 10px;
                padding-left: 20px;
            }
        }
    </style>
</head>
<body class="bodyBg">
<div class="">
    <div class="box">
        <div class="">
            <div>
                <img class="logo" src="https://i.ibb.co/2F5C4ph/Next-Dev-IT.png" alt="">
            </div>
            <h1 class="title">2FA code</h1>
            <p class="paragraph">Here is your login verification code:</p>
            <div class="bg">
                <p style="color: #fff; font-weight: bold; font-size: 35px; line-height: 2px;">
                    {{ $otp }}
                </p>
            </div>
        </div>
        <div style="margin-top: 15px;">
            <p class="paragraph">Please make sure you never share this code with anyone.</p>
            <p class="paragraph"><strong>Note:</strong> The code will expire in 5 minutes.</p>
        </div>
    </div>

    <div class="company">
        <img style="width: 50px;" src="https://i.ibb.co/2F5C4ph/Next-Dev-IT.png" alt="">
        <p style="margin-top: 5px;">© 2020–<?php echo date("Y")?> NextDevIT International Ltd.</p>
    </div>
</div>
</body>
</html>
