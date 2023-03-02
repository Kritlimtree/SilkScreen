<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html> 
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="is-preload">
		<?php
		session_start(); 
		$_SESSION["screenPicture"];
		$_SESSION["color"];
		$_SESSION["color_name"];
		$_SESSION["quantity"];
		$_SESSION["size"];
		$_SESSION["number"];
		$_SESSION["colorRGB"];
		$_SESSION["price"];
		$_SESSION["deposit"];
		$_SESSION["date"];
		?>
		<style>
			.center {
  width: 240px;
  height: 40px;
  border: 1px solid black;
  background-color: <?php echo $_SESSION["colorRGB"]; ?>;
			}
		</style>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<!-- <a href="index.html" class="logo"><strong>ยินดีต้อนรับ</strong> by HTML5 UP</a> -->
									<p>ยินดีต้อนรับ คุณ admin1233</p>
									<ul class="icons">
										
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
							
								<section>
									
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

												<div class="displayShirt">
													<!-- <div class="col-8 col-12-small">
														<p>รูปที่จะใช้สกรีน</p>
													</div> -->
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="<?php echo $_SESSION["screenPicture"]; ?>" alt="" /></span></div>
													<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p> -->
	
												</div>
												<div class="displayShirt">
													<p><strong>เสื้อยืดที่เลือก</strong></p>
													<div class="img-resize"><span><img src="<?php echo $_SESSION["color"]; ?>" alt="" /></span></div><br>
												</div>

												
											</div>
											<div class="col-6 col-12-medium">

												<form class="boxOrder">
													<label for="fname">ไซส์เสื้อยืด: <?php echo $_SESSION["size"]; ?> </label>
													<br>
													<label for="lname">สีเสื้อยืด: <?php echo $_SESSION["color_name"]; ?></label>
													<br>
													<label for="fname">จำนวนเสื้อยืด: <?php echo $_SESSION["quantity"]; ?></label>
													<br>
													<label for="lname">สีที่จะใช้สกรีน: </label><div class="col-6 col-12-xsmall">
														<div class="center"></div>
													</div>
													<br>
													<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
													
													<?php 
													if($_SESSION["number"] == 1){ ?>
													<label for="fname">ราคารวม: <?php echo $_SESSION["price"]; ?> บาท</label>
													<input type="hidden" name="price" value="<?php echo $_SESSION["price"]; ?>"></input>
													<label for="lname">ค่ามัดจำ 40% คิดเป็น: <?php echo $_SESSION["deposit"]; ?> บาท</label>
													<input type="hidden" name="deposit" value="<?php echo $_SESSION["deposit"]; ?>"></input>
													
													
													<input type="submit" class="button secondary" value="ชำระเงิน"></input>
													<?php }else if($_SESSION["number"] == 2){?>
														<label for="fname">ราคารวม: แอดมินกำลังประเมินราคา</label>
													<label for="lname" style="display: inline">การประเมินราคาจะเสร็จภายในวันที่ <?php echo $_SESSION["date"]; ?></label>
													<?php } ?>
													
													<br><br>
													<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">ยังไม่ชำระ</span></label>
													<label for="lname">สถานะการชำระเงินคงเหลือ: <span style="color:rgb(0, 0, 0)">-</span></label>
													<label for="lname">บริการขนส่งโดย: <?php echo $_SESSION["tp"]; ?></label>
													<label for="lname">หมายเลขรหัสพัสดุ: <?php echo $_SESSION["serial"]; ?></label>
													<!-- <input type="submit" value="Submit"> -->
												</form>


													<form method="post" action="#">
														<div class="row gtr-uniform">
															
														</div>
													</form>

												

											</div>
										</div>

								</section>

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
										<li><a href="order.php">การสั่งสกรีนเสื้อผ้า</a></li>
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
			<script src="assets/js/main.js"></script>

	</body>
</html>