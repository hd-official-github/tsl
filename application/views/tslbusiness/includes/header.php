<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSpaline For Business</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <style>
        body {
            background-color: #f1f1f1;
        }

        .section {

            background-color: #fff;
        }

        .mandatory::after {
            content: '*';
            color: #f33;
            padding-left: 3px;
            position: relative;
            top: -3px;
        }

        a:hover {
            font-weight: bold;
        }
    </style>
    <div class="section">
        <div class="container align-items-center" style="height: 64px;">

            <div class="row justify-content-between " style="height: 100%;">
                <div class="col-9 col-md-9 bg-red align-items-center d-flex justify-content-start">
                    <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" style="width: 102px;">
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center justify-content-end"><a href="#" style="color: #000;font-size:12px;font-weight:bold;">Login as Merchant</a></div>
            </div>
        </div>
    </div>