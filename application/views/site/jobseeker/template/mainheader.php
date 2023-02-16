<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobs360PK</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
  <!--   <link href="css/creative.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>vendor/css/creative.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/form-elements.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/intlTelInput.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/demo.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/highlightjs-github-theme.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/bootstrap-slider.css">

<link href="<?php echo base_url() ?>vendor/css/toastr.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="vendor/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>vendor/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>vendor/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>vendor/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>vendor/ico/apple-touch-icon-57-precomposed.png">
</head>

    <nav id="" class="navbar navbar-default mainheader">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>img/home/logofooter.png" class="img-responsive" alt="" style="margin-top: -12px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Jobseekers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Employers</a>
                    </li>
                     <?php if ($this->session->userdata('logged_user') != 1) { ?>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url().'site/signup' ?>">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url().'site/login'; ?>">Log In</a>
                    </li>
                    <?php } else { ?>
                        <li>
                            <a class="page-scroll" href="<?php echo base_url().'site/logout'; ?>"> Log Out</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    </html>