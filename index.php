<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type ="submit" name="login">
								Login
							</button>
						</div>
					</div>


				</form>
				<?php
				if( isset($_POST['login']) ){
                    include "koneksi.php";
                    $username   = $_POST['username'];
                    $pass       = $_POST['pass'];

                    $cek_user   = mysqli_query( $koneksi,"SELECT * FROM login WHERE username='$username'");
                    $row        = mysqli_num_rows($cek_user);

                    if( $row === 1 ){
                        //jalankan prosedur seleksi password
                        $fetch_pass = mysqli_fetch_assoc($cek_user);
                        $cek_pass   = $fetch_pass['password'];
                        if( $cek_pass <> $pass ){
                            echo"<script>alert('Password Salah');</script>";
                        }else{
                            $_SESSION['log'] = true;
                            echo"<script>alert('Login Berhasil');document.location.href='index1.php'</script>";
                        }
                        $_SESSION['username']= $_POST['username'];

                    }else{
                        echo"<script>alert('Username salah atau belum terdaftar');</script>";

                    }
				}
				?>

			</div>
		</div>
	</div>
	



</body>
</html>