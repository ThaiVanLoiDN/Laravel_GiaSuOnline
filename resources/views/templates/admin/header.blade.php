<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrator</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="description" content="">
        <meta name="author" content="templatemo">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
         <!-- Datatable -->
        <link rel="stylesheet" href="{{$urlAdmin}}/css/jquery.dataTables.min.css">

        <link href="{{$urlAdmin}}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{$urlAdmin}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{$urlAdmin}}/css/templatemo-style.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="{{$urlAdmin}}/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/ico" href="{{$urlAdmin}}/images/favicon_admin.png" />
        
        <!-- JS -->
        <script src="{{$urlAdmin}}/js/jquery-1.11.2.min.js"></script>
        <script src="{{$urlAdmin}}/js/bootstrap.min.js"></script>
        <!-- Datatable -->
        <script src="{{$urlAdmin}}/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="{{$urlAdmin}}/js/jquery.validate.js"></script>
        <script type="text/javascript" src="{{$urlAdmin}}/ckeditor/ckeditor.js" ></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="templatemo-flex-row">