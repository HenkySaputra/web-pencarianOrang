<?php
session_start();
include 'config.php';
if (!isset($_SESSION['id_admin'])) {
 
    header('location:login');
    exit();
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SI Pencarian Orang Hilang Kutai Barat</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="./"> SI Pencarian</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Master</h3><!-- /.menu-title -->
                    
                    <li>
                        <a href="user"> <i class="menu-icon ti-user"></i>User </a>
                        <a href="admin"> <i class="menu-icon ti-lock"></i>Admin </a>
                    </li>
                    </li>

                    <h3 class="menu-title">Manajemen</h3><!-- /.menu-title -->
                    <li>
                    <a href="orang-hilang"> <i class="menu-icon fa fa-street-view"></i>Orang Hilang </a>
                    </li>
                    <li>
                    <a href="logout"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-12">
                    <div class="header-left">
                        <h4 align="center" style="color:green;">
                            Sistem Informasi Pencarian Orang Hilang Kutai Barat || Selamat Datang <?php echo $_SESSION['nama'];?>
                        </h4>
                        <div class="form-inline">
                           </div>

                    
                     </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        
                    </div>

                  
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
