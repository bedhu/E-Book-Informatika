<!DOCTYPE html>
<html>
<head>
<?php
  error_reporting(0);
  include"config/koneksi.php";
  include"atas.php";
  session_start();



      $username=$_SESSION['username'] ;
      $p=mysql_fetch_assoc(mysql_query("SELECT * from user where username='$username'"));

   $nama = $_SESSION['username'];
  if(!isset($_SESSION['username'])){
  
    header('location:login.php');
   
  }
  ?>

<body class="app sidebar-mini rtl" >
    <div id="global-loader" ></div>
    <div class="page">
        <div class="page-main">
            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar ">
                <div class="sidebar-img">

                  <!--   <a class="navbar-brand" href="#"><img alt="..." class="navbar-brand-img main-logo" src="assets/img/brand/logo-dark.png"> <img alt="..." class="navbar-brand-img logo" src="assets/img/brand/logo.png"></a> -->
                    <a class="navbar-brand" href="#"> <img alt="vape store" class="navbar-brand-img main-logo" src="assets/img/vsplash.png"> Vape Store</a>
                    <ul class="side-menu">


                        <?php
                        if ($_SESSION[level]=="1") {
                           ?>
                           <li>
                            <a class="side-menu__item" href="media.php?module=home"><i class="side-menu__icon fa fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=kategori"><i class="side-menu__icon fa fe fe-package"></i><span class="side-menu__label">Kategori</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=member"><i class="side-menu__icon fa fe fe-user"></i><span class="side-menu__label">User Pembeli</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=barang"><i class="side-menu__icon fa fe fe-book"></i><span class="side-menu__label">Barang</span></a>
                        </li>

                           <li>
                            <a class="side-menu__item" href="media.php?module=stok"><i class="side-menu__icon fa fe fe-book"></i><span class="side-menu__label">Laporan Stok</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=transaksi"><i class="side-menu__icon ti-arrows-horizontal"></i><span class="side-menu__label">Transaksi</span></a>
                        </li>

                         </li>
                           
                            <li>
                            <a class="side-menu__item" href="media.php?module=laporan"><i class="side-menu__icon fe fe-airplay"></i><span >Laporan Transaksi</span></a>
                        </li>
                       <!--   <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fe fe-package"></i><span class="side-menu__label">Laporan</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                 <li> -->
                          <!--   <a class="side-menu__item" href="media.php?module=laporan"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Laporan Transaksi</span></a>
                        </li>
                         <li>
                            <a class="side-menu__item" href="media.php?module=Stock"><i class="side-menu__icon fas fa-book-open"></i><span class="side-menu__label">Laporan Stock</span></a>
                        </li> -->
                         <li>
                            <a class="side-menu__item" href="media.php?module=tutorial"><i class="side-menu__icon ti-arrows-horizontal"></i><span class="side-menu__label">Tutorial</span></a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fe fe-package"></i><span class="side-menu__label">Master Data</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                 <li>
                            <a class="side-menu__item" href="media.php?module=mstuser"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master User</span></a>
                        </li>
                         <li>
                            <a class="side-menu__item" href="media.php?module=slider"><i class="side-menu__icon fas fa-book-open"></i><span class="side-menu__label">Slider Image</span></a>
                        </li>
                         <li>
                            <a class="side-menu__item" href="media.php?module=notif"><i class="side-menu__icon fas fa-bell"></i><span class="side-menu__label">Notifikasi</span></a>
                        </li>
                           <!--       <li>
                            <a class="side-menu__item" href="media.php?module=pengarang"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master Pengarang</span></a>
                        </li>
                         <li>
                            <a class="side-menu__item" href="media.php?module=penerbit"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master Penerbit</span></a>
                        </li> -->
                            </ul>
                        </li>
 <li>
                            <a class="side-menu__item" href="logout.php"><i class="side-menu__icon fa fe fe-power"></i><span class="side-menu__label">Logout</span></a>
                        </li>

                           <?php
                        }elseif ($_SESSION[level]=="2") {
                            ?>

                            <li>
                            <a class="side-menu__item" href="media.php?module=home"><i class="side-menu__icon fa fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=kategori"><i class="side-menu__icon fa fe fe-package"></i><span class="side-menu__label">Kategori</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=member"><i class="side-menu__icon fa fe fe-user"></i><span class="side-menu__label">User Pembeli</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=barang"><i class="side-menu__icon fa fe fe-book"></i><span class="side-menu__label">Barang</span></a>
                        </li>
                            <li>
                            <a class="side-menu__item" href="media.php?module=transaksi"><i class="side-menu__icon ti-arrows-horizontal"></i><span class="side-menu__label">Transaksi</span></a>
                        </li>

                          <!--   <li>
                            <a class="side-menu__item" href="media.php?module=laporan"><i class="side-menu__icon fe fe-airplay"></i><span >Laporan</span></a>
                        </li>
 -->
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fe fe-package"></i><span class="side-menu__label">Master Data</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                 <li>
                            <a class="side-menu__item" href="media.php?module=mstuser"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master User</span></a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="media.php?module=slider"><i class="side-menu__icon fas fa-book-open"></i><span class="side-menu__label">Slider Image</span></a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="media.php?module=notif"><i class="side-menu__icon fas fa-bell></i><span class="side-menu__label">Notifikasi</span></a>
                        </li>
                          <!--        <li>
                            <a class="side-menu__item" href="media.php?module=pengarang"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master Pengarang</span></a>
                        </li>
                         <li>
                            <a class="side-menu__item" href="media.php?module=penerbit"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Master Penerbit</span></a>
                        </li> -->
                            </ul>
                        </li>
 <li>
                            <a class="side-menu__item" href="logout.php"><i class="side-menu__icon fa fe fe-power"></i><span class="side-menu__label">Logout</span></a>
                        </li>

                            <?php
                        }



                        ?>


                           
                         
                      
                    </ul>
                </div>
            </aside>
            <!-- Sidebar menu-->

            <!-- app-content-->
            <div class="app-content ">
                <div class="side-app">
                    <div class="main-content">
                        <div class="p-2 d-block d-sm-none navbar-sm-search">
                            <!-- Form -->
                            <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div><input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Top navbar -->
                        <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                            <div class="container-fluid">
                                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

                                <!-- Horizontal Navbar -->
                                <ul class="navbar-nav align-items-center d-none d-xl-block">
                              
                                    <li class="nav-item dropdown">
                                        <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="assets/img/faces/female/32.jpg"></span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <?php

                                                $user=mysql_fetch_assoc(mysql_query("SELECT nama from user where username='$_SESSION[username]'"));
                                                ?>
                                                <span class="mb-0 "><?php echo $user[nama];?></span>
                                            </div>
                                        </div></a>
                                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                            <div class=" dropdown-header noti-title">
                                                <h6 class="text-overflow m-0">Welcome!</h6>
                                            </div>
                                            <!-- <a class="dropdown-item" href="#"><i class="ni ni-single-02"></i> <span>My profile</span></a> -->
                                           <a class="dropdown-item" href="logout.php"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Top navbar-->

                        <!-- Page content -->
                        <div class="container-fluid pt-8">
                            <!-- <div class="page-header mt-0 shadow p-3">
                                <ol class="breadcrumb mb-sm-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
                                </ol>
                                <div class="btn-group mb-0">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fas fa-plus mr-2"></i>Add new Page</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye mr-2"></i>View the page Details</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit Page</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                                    </div>
                                </div>
                            </div> -->
                            <?php include "content.php" ?>

                        </div>
                    </div>
                </div>
            </div>
           

    <?php

include "bawah.php";
    ?>