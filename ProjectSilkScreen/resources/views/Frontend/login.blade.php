<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									
								</header>

							<!-- Banner -->
								

							<!-- Section -->
								<section>
									<header class="align-center">
										<h2>login</h2>	
									</header>
									<div class="features">
										<div>
											<form class="box" method="post" action="login" enctype="multipart/form-data">
												@csrf
												<label for="fname">E-mail:</label><br>
												<input type="text" id="fname" name="email" placeholder="กรอกชื่อผู้ใช้" value=""><br>
												@if ($errors->has('email'))
												<div class="alert alert-danger">
													<ul>
														<li style="color: red;">{{ $errors->first('email') }}</li> 
													</ul>
												</div>
												@endif
												<label for="lname">Password:</label><br>
												<input type="password" id="lname" name="password" placeholder="กรอกรหัสผ่าน" value=""><br><br>
												@if ($errors->has('password'))
												<div class="alert alert-danger">
													<ul>
														<li style="color: red;">{{ $errors->first('password') }}</li> 
													</ul>
												</div>
												@endif
												@if ($errors->has('pass'))
												<div class="alert alert-danger">
													<ul>
														<li style="color: red;">{{ $errors->first('pass') }}</li> 
													</ul>
												</div>
												@endif
												
												<a href="{{ route('forget.password.get') }}" style="float: left;">ลืมรหัสผ่าน</a>
												<a href="{{ route('regis') }}" style="float: right;">สมัครสมาชิก</a>
												<span style="float: right;">ยังไม่ได้เป็นสมาชิกหรอ? </span><br><br>
												
												<div class="align-center">
													<div class="col-3-xlarge">
														<button type="submit" class="button fit secondary" >เข้าสู่ระบบ</a> 
													</div>
												</div>
											</form>
										</div>
										  
										
									</div>
								</section>

						</div>
					</div>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>