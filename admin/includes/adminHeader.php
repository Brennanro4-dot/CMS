<?php ob_start();?>
<?php session_start();?>
<?php include '../includes/db.php'?>
<?php include 'functions.php'?>
<?php

if(!isset($_SESSION['role']) )
    {
    
        header('Location: ../index.php');
            

    }
else
    {
        if($_SESSION['role'] !== 'admin')
            {
                header('Location: ../index.php');
            }
    }





?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ro's Admin CMS</title>

    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Style CSS -->
     <link rel="stylesheet" href="css/styles.css">
    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

     <!-- jQuery -->
     <script type="text/javascript" src="js/jquery.js"></script>

   
</head>