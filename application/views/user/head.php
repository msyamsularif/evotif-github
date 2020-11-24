<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-VOTIF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="bs-css" href="<?php echo base_url(); ?>asset/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/Images/Informatika.png"/>
    <link href='<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>asset/vendor/datatables/datatables.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>asset/vendor/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href="<?php echo base_url(); ?>asset/css/charisma-app.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.css" rel='stylesheet'>
    
    <style>
        .text-width{
            text-align: justify;
            width: 100%;
            border:solid 1px black;
            padding: 10px
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
            background-color: #F7E8C9;
            border-radius: 4px
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .containerr {
            padding: 16px 16px;
        }

        hr{
            border:solid 1px black;
        }
        h1, h2, h3, h4, h5, h6, p{
            color: black;
        }
        .navbar-inner{
            background-color: #FF2635;
        }
        .tengah{
            width: 100%;  
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 1; 
            background-image:url('<?php echo base_url(); ?>asset/Images/background.jpg'); 
        }
        .tengah::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0.65);
            background-size: cover;
        }
        @media (min-width: 1025px){
            .tengah {
                background-size: 100%;
            }
        }

        @media (max-width: 1024px){
            .tengah {
                background-image:url('<?php echo base_url(); ?>asset/Images/background-mobile.jpg');
                background-size: cover;
                position: fixed;
            }
        }
        .text{
            font-family: Ubuntu;
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            line-height: 1.2;
            text-align: center;
            text-transform: uppercase;
            padding-bottom: 41px;
            display: block;
        }
        .circle{
            width: 40px;
            height: 40px;
            background: #d2322d;
            border-radius: 100%;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            color: white;
        }
        .imgSize{
            margin: 0 10px 40px 0px;
        }
    </style>
    <script type="text/javascript">
        window.history.forward();
        function noBack() { window.history.forward(); }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
