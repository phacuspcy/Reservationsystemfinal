<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="header">
    <div>
        <img src="assets/images/banner.jpg" width="100%" height="180"/>  
    </div>
    {{-- <div class="limiter"> --}}
		<div class="container-login100">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" {{ url('index') }}>
							 Login
						</button>
					</div>
				</form>
			</div>
            
		</div>
        <footer class="footer"> © 2021 FACULTY OF APPLIED ARTS KMUTNB </footer>
        
	{{-- </div> --}}
</body>
</html>