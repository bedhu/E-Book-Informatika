 <?php
 error_reporting(0);
  session_start();
include "atas.php";
 include "./config/koneksi.php";
 
$password=md5($_POST[password]);
 if(!empty($_POST['username'])){
 	mysql_query("INSERT INTO `user`(`username`, `email`, `password`,`level`) 
 	VALUES ('$_POST[username]','$_POST[email]','$password','2')");

 	echo "<script>window.alert('Pendaftaran berhasil,silahkan login')
window.location='index.php'</script>";
 }


?>


<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                               <h3> DAFTAR </h3>
                            </hr>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                 <!-- <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama">
                                </div>
                                 <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="au-input au-input--full" type="text" name="alamat" placeholder="Alamat">
                                </div>
                                 <div class="form-group">
                                    <label>No. Phone</label>
                                    <input class="au-input au-input--full" type="text" name="phone" placeholder="No Phone">
                                </div> -->
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar Sekarang</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Sudah punya akun?
                                    <a href="index.php">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
