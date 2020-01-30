<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Pemesanan</title>
    <link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets/lib/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/zabuto_calendar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/gritter/css/jquery.gritter.css'); ?>" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/lib/chart-master/Chart.js'); ?>"></script>
</head>

<body>
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>NORTH<span>WOOD</span></b></a>
            <!--logo end-->
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?= site_url('pemesan/pemesan/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </header>

        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="<?= base_url('assets/img/ui-sam.jpg'); ?>" class="img-circle" width="80"></a></p>
                    <h5 class="centered"><?=$nama;?></h5>
                    <li class="mt">
                        <a class="active" href="<?= site_url('pemesan/pemesan'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="mt">
                        <a href="<?= site_url('pemesan/pemesan/daftar_menu'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Daftar Menu</span>
                        </a>
                    </li>
                    <li class="mt">
                        <a href="<?= site_url('pemesan/pemesan/list_pesanan'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>

        <section id="main-content">
            <section class="wrapper">