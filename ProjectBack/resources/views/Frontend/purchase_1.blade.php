<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<?php
		session_start();
		@ini_set('display_errors', '0');
		//if($_POST){
		//	$price = $_SESSION["price"];
		//	$deposit = $_SESSION["deposit"];
		//	echo '<script type="text/javascript">';
		//	echo "var price = '$price';";
		//	echo "var deposit = '$deposit';";
		//	echo '</script>';
		//}
		$price = $_SESSION["sum"];
		$deposit = $price*40/100;
		$_SESSION["deposit"] = $deposit;
		echo '<script type="text/javascript">';
			echo "var price = '$price';";
			echo "var deposit = '$deposit';";
			echo '</script>';
		
		?>
		<script type="text/javascript">function toMudjum(){
    document.getElementById("money123").innerHTML = deposit;
}
function toFull(){
    document.getElementById("money123").innerHTML = price;
}</script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
								<p>ยินดีต้อนรับ คุณ admin</p>

								<ul class="icons">

									<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
									<li><a href="index.html" class="logo">logout</a></li>
								</ul>
								<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
							</header>

							<!-- Banner -->
							
							<section>
								<form name="form1" method="post" action="shopping.php" enctype="multipart/form-data">
								<div class="content">
									<div class="align-center">
										<p>ชำระเงินโดยโอนมาที่บัญชี 123-456789 ธนาคารกรุงไทย นายสมชาย พร้อมรับเงิน</p>
									</div>
									
									<div class="row gtr-200">
										<div class="col-6 col-12-small">
											
										
												<div id="display_image"></div><br>
												<input type="file" name="bill" id="image_input" accept="image/png, image/jpeg">
											</div><br><br>
												
										
										
										<div class="col-6 col-12-small">
											
										
												
												<label for="fname">วันที่โอนเงิน:</label>
												<input type="date" id="day" name="date"  value=""><br><br>
												<label for="lname">เลขบัญชี 4 ตัวท้าย:</label>
												<input type="number" id="number"  placeholder="xxxx"><br><br>
												<div class="row gtr-uniform">
													<!-- <div class="align-center"> -->
														<label for="fname">ชำระเงินค่า:</label>
														
														<div class="col-3 col-12-small">
															<input onclick="toMudjum()" type="radio" id="demo-priority-low" name="mf" value="มัดจำ">
															<label for="demo-priority-low">เงินมัดจำ</label>
														</div>

														<div class="col-4 col-12-small">
															<input onclick="toFull();" type="radio" id="demo-priority-high" name="mf" value="จ่ายเต็ม">
															<label for="demo-priority-high">จ่ายเต็มจำนวน</label>
														</div>
													<!-- </div> -->
												</div><br>
												<label >จำนวนเงิน : <span id="money123"></span></label>
												
												<div class="col-12 col-12-small">
													<input type="button" class="button primary" value="ยกเลิก"></input>
													<input type="submit" class="button secondary" value="ตกลง"></input>
												</div>

												
											</div>

										</div>

										<div class="align-center"></div>
										<div class="align-center">

										</div>

										<div class="align-center">
										</div>
									</div>

								</section>
</form>
						</div>
					</div>
					
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="indexLoginIsTrue.html">หน้าหลัก</a></li>
										<li><a href="orderf.php">การสั่งสกรีนเสื้อผ้า</a></li>
										<li><a href="shopping.php">การซื้อของฉัน</a></li>
										<li><a href="contact.html">ติดต่อเรา</a></li>
									</ul>
								</nav>

								<section>
									<!-- <header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">abc@gmail.com</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			
			
			
	</body>
</html>
