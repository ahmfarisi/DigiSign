<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Signature - Login</title>
    <link rel="icon" href="<?php echo site_url('resources/img/favicon.ico')?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <center>
            <img src="<?php echo site_url('resources/img/logo.png')?>" class="img-responsive" />
        </center>

        <h3 class="page-header text-center">Verifikasi Tanda Tangan Digital<br/>Ahmad Farisi</h3>

        <p align="center"> <label class="control-label">Tanda Tangan Digital Dibuat Pada :</label></p>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" value="<?=convert_timestamp($token['created_on'])?>" readonly>
            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        </div>

        <p align="center"> <label class="control-label">Tanda Tangan Dibutuhkan Oleh :</label></p>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" value="<?=$token['request_by']?>" readonly>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <p align="center"> <label class="control-label">Kebutuhan Tanda Tangan :</label></p>
        <div class="form-group has-feedback">
            <textarea class="form-control" readonly><?=$token['needs']?></textarea>
            <span class="glyphicon glyphicon-book form-control-feedback"></span>
        </div>

        <p align="center"> <label class="control-label">Token :</label></p>
        <div class="form-group has-feedback">
            <textarea class="form-control" readonly><?=$token['token']?></textarea>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>


        <!--        <a href="#">I forgot my password</a><br>-->
        <!--        <a href="register.html" class="text-center">Register a new membership</a>-->

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>

</body>
</html>
