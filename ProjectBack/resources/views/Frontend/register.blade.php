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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
										<h2>สมัครสมาชิก</h2>
									</header>
									<!-- <h1>สมัครสมาชิก</h1> -->
									<div class="features">

									<form class="box" method="post" action="{{route('apply')}}" enctype="multipart/form-data">
										@csrf
											<label for="fname">email:</label>
											<input type="text" id="email" name="email" placeholder="กรอกชื่อผู้ใช้" value=""><br>
											@if ($errors->has('email'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('email') }}</li> 
													</ul>
												</div>
											@endif
											<label for="lname">ชื่อ:</label>
											<input type="text" id="name" name="name" placeholder="กรอกชื่อจริง" value=""><br>
											@if ($errors->has('name'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('name') }}</li> 
													</ul>
												</div>
											@endif
                                            <label for="fname">นามสกุล:</label>
											<input type="text" id="fname" name="fname" placeholder="กรอกนามสกุล" value=""><br>
											@if ($errors->has('fname'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('fname') }}</li> 
													</ul>
												</div>
											@endif
											<label for="lname">ที่อยู่:</label>
											<div class="col-6">
											<input type="text" id="address" name="address" placeholder="กรอกที่อยู่"></input>
											@if ($errors->has('address'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('address') }}</li> 
													</ul>
												</div>
											@endif
											<div class="row gtr-25">
											<div class="col-6" style="padding-top: 5px;">
													<select name="province" id="province" class="province">
														<option value="" selected disabled>--กรุณาเลือกจังหวัด--</option>
														<?php  foreach($province as $key => $province){?>
														<option value="<?php echo $province->id ?>"><?php echo $province->province_name_th ?></option>
														<?php }?>
													</select>
													@if ($errors->has('province'))
														<div class="alert alert-danger">
															<ul>
																<li style="color: red;">{{ $errors->first('province') }}</li> 
															</ul>
														</div>
													@endif
												</div>
												
												<div class="col-6" style="padding-top: 5px;">
													<select  name="amphures" id="amphures"  class="amphures">
														<option value="	" selected disabled>--กรุณาเลือกอำเภอ--</option>
													</select>
													@if ($errors->has('amphures'))
														<div class="alert alert-danger">
															<ul>
																<li style="color: red;">{{ $errors->first('amphures') }}</li> 
															</ul>
														</div>
													@endif
												</div>
											</div>
											<div class="row gtr-25">
												
												<div class="col-6" style="padding-top: 5px;">
													<select  name="district" id="district" class="district">
														<option value=" " selected disabled>--กรุณาเลือกตำบล--</option>
														
													</select>
													@if ($errors->has('district'))
														<div class="alert alert-danger">
															<ul>
																<li style="color: red;">{{ $errors->first('district') }}</li> 
															</ul>
														</div>
													@endif
												</div>
												<div class="col-6" style="padding-top: 5px;">
													<select  name="postcode" id="postcode" class="postcode">
														<option value="" selected disabled>--กรุณาเลือกรหัสไปรษณีย์--</option>
														
													</select>
													@if ($errors->has('postcode'))
														<div class="alert alert-danger">
															<ul>
																<li style="color: red;">{{ $errors->first('postcode') }}</li> 
															</ul>
														</div>
													@endif
												</div>
											</div>
											</div><br>
                                            <label for="fname">เบอร์โทร:</label>
											<input type="tel" id="phone" name="phone" placeholder="กรอกเบอร์โทร" value=""><br>
											@if ($errors->has('phone'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('phone') }}</li> 
													</ul>
												</div>
											@endif
											<label for="lname">รหัสผ่าน:</label>
											<input type="password" id="password" name="pass" placeholder="กรอกรหัสผ่าน" value=""><br>
											@if ($errors->has('pass'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('pass') }}</li> 
													</ul>
												</div>
											@endif
											<label for="lname">ยืนยันรหัสผ่าน:</label>
											<input type="password" id="passwordConflim" name="passConflim" placeholder="ยืนยันรหัสผ่านอีกครั้ง" value=""><br>
											@if ($errors->has('passwordConflim'))
												<div class="alert alert-danger">
													<ul>
															<li style="color: red;">{{ $errors->first('passwordConflim') }}</li> 
													</ul>
												</div>
											@endif
											<!-- <input type="submit" value="Submit"> -->
											<ul class="actions fit">
												<li>
												<button type="submit" class="button fit secondary" >สมัครสมาชิก</a>
													 
												</li>
												<li>
													<input type="button" onclick="history.back()" class="button primary fit" value="ยกเลิก"></input>
													<!-- <a href="#" class="button primary fit">ยกเลิก</a> -->
												</li>
											</ul>
											 
 

										  </form>

									</div>
								</section>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			{{csrf_field()}}
	</body>
	<script type="text/javascript">
		$('.province').change(function(){
			if($(this).val()!=''){
				var select=$(this).val();
				console.log(select);
				var _token=$('input[name="_token"]').val();
				$.ajax({
					url:"{{route('amphures')}}",
					method:"POST",
					data:{select:select,_token:_token},
					success:function(result){
						 
						$('.amphures').html(result);
					}
				})	
				 
			}
		});

		$('.amphures').change(function(){
			if($(this).val()!=''){
				var select=$(this).val();
				console.log(select);
				var _token=$('input[name="_token"]').val();
				$.ajax({
					url:"{{route('district')}}",
					method:"POST",
					data:{select:select,_token:_token},
					success:function(result){
						 
						$('.district').html(result);
					}
				})	
				 
			}
		});

		$('.district').change(function(){
			if($(this).val()!=''){
				var select=$(this).val();
				console.log(select);
				var _token=$('input[name="_token"]').val();
				$.ajax({
					url:"{{route('postcode')}}",
					method:"POST",
					data:{select:select,_token:_token},
					success:function(result){
						 
						$('.postcode').html(result);
					}
				})	
				 
			}
		});

	</script>
</html>