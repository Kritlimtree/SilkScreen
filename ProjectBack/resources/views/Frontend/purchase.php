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
		@ini_set('display_errors', '0');
		if($_POST){
			$price = $_POST['price'];
			$deposit = $_POST['deposit'];
			echo '<script type="text/javascript">';
			echo "var price = '$price';";
			echo "var deposit = '$deposit';";
			echo '</script>';
		}
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
										<div class="col-12 col-12-small">
																<h4>การชำระเงิน</h4>
															</div>
															<div class="col-10 col-12-small">
															<div class="table-wrapper">
																<table class="alt">
																	<thead>
																		<tr>
																			<th>เลขที่ใบสั่งซื้อ</th>
																			<th>ราคา</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><a href="purchase_1.php">00001</a></td>
																			<td>1000</td>
																		</tr>
																		<tr>
																			<td><a href="purchase_1.php">00002</a></td>
																			<td>กำลังประเมิน</td>
																			
																	</tbody>
																	
																</table>
															</div>
															</div>

								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<!-- <section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="indexLoginIsTrue.html">หน้าหลัก</a></li>
										<li><a href="order.php">การสั่งสกรีนเสื้อผ้า</a></li>
										<li><a href="checkorder.php">ตรวจสอบสินค้า</a></li>
										<!-- <li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<li><a href="purchase.php">การชำระเงิน</a></li>
										<!-- <li><a href="#">Adipiscing</a></li> -->
										<!-- <li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<!-- <li><a href="#">Maximus Erat</a></li> -->
										<!-- <li><a href="#">Sapien Mauris</a></li> -->
										<li><a href="simple.html">ตัวอย่างของงาน</a></li>
										<li><a href="contact.html">ติดต่อเรา</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
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
