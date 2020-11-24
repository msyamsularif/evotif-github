<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-VOTIF | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/Images/Informatika.png"/>
    <link id="bs-css" href="<?php echo base_url(); ?>asset/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>asset/vendor/datatables/datatables.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>asset/vendor/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href="<?php echo base_url(); ?>asset/css/charisma-app.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.css" rel='stylesheet'>
    <style>
        .navbar-inner{
            background-color: #FF2635;
        }
        .glyphicon{
            color: #FBD85A;
        }
        button{
            background-color: #F2541B;
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
        .imgSize{
            margin: 0 10px 40px 0px;
        }
    </style>
</head>
