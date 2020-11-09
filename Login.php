<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tugas UTS WEB Design</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/Universitas-Buddhi-Dharma-Tangerang.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h4 class="my-0 mr-md-auto font-weight-normal">TIM ASALOHE</h4>
	</div>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" name="Form" method="POST">
					<span class="login100-form-title p-b-33">
						<b>Form Login</b>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan NIM Yang Benar">
						<input class="input100" name="username" placeholder="NIM Anda">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="login" onclick="return check(this.form)">
							LOGIN
						</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
	
	<footer class="my-3 border-top">
		<div class="text-center">
			<p>Copyright 2020 © Tugas Web Design <b>TIM ASALOHE</b></p> 
		</div>
	</footer>
    
    <script language="javascript">
        function check(form)
        {
            if(form.username.value == "20181000064" && form.pass.value == "admin")
            {
				alert("Login Berhasil!")
				window.location.href = "indexmichael.php";
            }
            else if(form.username.value == "20181000057" && form.pass.value == "admin")
            {
				alert("Login Berhasil!")
				window.location.href = "indexalbert.php";
			}
			else if(form.username.value == "20181000018" && form.pass.value == "admin")
            {
				alert("Login Berhasil!")
				window.location.href = "indexliong.php";
			}
			else if(form.username.value == "20181000006" && form.pass.value == "admin")
            {
				alert("Login Berhasil!")
				window.location.href = "indexchandra.php";
			}
			else{
                alert("Error NIM Atau Password Salah!")
			}
			return false;
        }
	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>