<?php
session_start();
include "./config/koneksi.php";
date_default_timezone_set("Asia/Jakarta");


                if(isset($_POST['username']) && isset($_POST['password'])){
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    
                         $select = mysql_query("SELECT * from user WHERE username='$username' and `password`='$password' and id_level!='3' limit 1");
                        $sql = mysql_fetch_array($select);
                        
                        // tutup sukses
            
                    if(empty($sql)){
                        
                        echo "<div class=\"alert alert-danger\">
                            <strong>Maaf!</strong> Username && password anda salah. tolong ulangi!
                        </div>";
                       // jika sukses

                            }else{
                            $_SESSION['username'] = $sql['username'];
                            $_SESSION['user_level'] = $sql['user_level'];
                            $_SESSION['password'] = $sql['password'];
                            $_SESSION['id'] = $sql['id'];
                            $_SESSION['level']=$sql['id_level'];

                            $_SESSION['StatusLogin'] = '1';
                            
                            echo " <script>window.location.href='media.php?module=home'</script> ";
                        }
                    }
                        
?>

<style type="text/css">
<!--
.style3 {
	font-size: 22px;
	font-weight: bold;
}
-->
</style>
<body class="bg-gradient-warning">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-5">



				<form class="login100-form validate-form" method="post" action="">
				<center><img src="assets/img/vsplash.png" width="160"  align="absmiddle">
				</center><br/>
				<div align="center" class="style3">Rancang Bangun Store Vape</div>
				<span class="login100-form-title">
				<hr/>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username reuired">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
					<button type="submit" class="mt-2 btn btn-block btn-warning mt-1 mb-1">Login</button>
					</div>

				</form>
			</div>
		</div>
	</div>

