<?php
error_reporting(0);
session_start();
  include"config/config.php";
  include"config/koneksi.php";
 $nama = $_SESSION['username'];
  if(!isset($_SESSION['username'])){
  
   
    error_reporting(0);
  }
  ?>

  <?php
if ($_GET[module]=='home'){

  include "modul/berhasil.php";
  
}

elseif ($_GET[module]=='mstuser'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/mstuser.php";
}
}

elseif ($_GET[module]=='stok'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/stok.php";
}
}
elseif ($_GET[module]=='kategori'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/kategori.php";
}
}

elseif ($_GET[module]=='pengarang'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/pengarang.php";
}
}
elseif ($_GET[module]=='penerbit'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/penerbit.php";
}
}

elseif ($_GET[module]=='member'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/member.php";
}
}
elseif ($_GET[module]=='barang'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/barang.php";
}
}

elseif ($_GET[module]=='transaksi'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/transaksi.php";
}
}

elseif ($_GET[module]=='laporan'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/laporan.php";
}
}

elseif ($_GET[module]=='cetaklaporan'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/cetaklaporan.php";
}
}
elseif ($_GET[module]=='slider'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/slider.php";
}
}

elseif ($_GET[module]=='notif'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/notif.php";
}
}

elseif ($_GET[module]=='tutorial'){
     if ($_SESSION['level']=='1'||$_SESSION['level']=='2'){
    include "modul/tutorial.php";
}
}
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}

