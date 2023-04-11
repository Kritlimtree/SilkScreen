<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php 
			session_start();
		?>
		<style>
	.modal {
  display: show;
  position: ;
  height: 80px;
  width: ;: 80px;
  
  
  
  overflow: hidden;
  background-color: white;
}
</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<!-- <a href="index.html" class="logo"><strong>ยินดีต้อนรับ</strong> by HTML5 UP</a> -->
									<p>ยินดีต้อนรับ คุณ admin</p>
									<ul class="icons">

										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>

							<section>
							
									<div class="features">
									
										<form class="box">
										
                                            <label for="orderid">ID Order: bts1013220001</label><br>
											<!-- <label for="fname">Username: qwerty</label><br> -->
											<!-- <input type="text" id="uname" name="uname" value="admin"><br> -->
											<label for="lname">Name: <?php echo $_SESSION["name"]; ?></label><br>
											<!-- <input type="text" id="name" name="name" value="adam"><br> -->
                                            <label for="fname">Lastname: <?php echo $_SESSION["fname"]; ?></label><br>
											<!-- <input type="text" id="lname" name="lname" value="smith"><br> -->
											<label for="lname">Address: <?php echo $_SESSION["address"]; ?></label><br>
											<!-- <div class="col-12">
												<textarea name="demo-message" id="addr" placeholder="12 nowhere" rows="6"></textarea>
											</div><br> -->
											<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
                                            <label for="fname">phone: <?php echo $_SESSION["phone"]; ?></label><br>
                                            <!-- <label for="fname">เลขบัญชี 4 ตัวท้าย: 1234</label><br> -->
                                            <label for="fname">จำนวน: <?php echo $_SESSION["quantity"]; ?> ตัว</label><br>
                                            <label for="fname">ราคาเต็ม: <?php echo $_SESSION["price"]; ?> บาท</label><br>
                                            <label for="fname">ราคาที่ลูกค้าจ่าย: <?php echo $_SESSION["deposit"]; ?> บาท</label><br>
                                            <label for="fname">ราคาคงเหลือ: <?php echo $_SESSION["price"]; ?> บาท</label><br>
										  </form>
										</div>
										
									
									
								</section>
								<div class="Center">
									<!-- <h3>ลูกค้าที่สั่งออร์เดอร์ทั้งหมด</h3> -->
									<form method="post" action="purchase.php" enctype="multipart/form-data">
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>จ่ายครั้งที่</th>
													<th>มัดจำ/จ่ายเต็ม</th>
													<th>ราคาที่จ่าย(บาท)</th>
													<th>สลีป</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													
													<td><?php echo $_SESSION["mf"]; ?></td>
													<td><input type="number" name="price"></td>
													<td>
													<span><img class="modal" src="images/TXN_202003051xxU8nbrdzPgP3V9h.jpg" alt="" /></span></td>
													<!-- <td>11/11/65</td>
													<td>bts1111220001</td>
													<td><a href="test1.php" class="button secondary" value="คลิ๊กที่นี่">คลิ๊กที่นี่</a></td> -->
												</tr>

											</tbody>
											
										</table>
									</div>
									
								</div>

                                <div class="Center3">
                                    <!-- <div class="row col-6 col-6-medium"> -->
                                        <input type="submit" name="st" class="button secondary" value="มัดจำถูกต้อง"></input>
                                        <input type="submit" name="st" class="button primary" value="มัดจำไม่ถูกต้อง"></input>
                                        <input type="submit" name="st" class="button secondary" value="จ่ายเต็มจำนวนถูกต้อง"></input>
                                </div>
</from>
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
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
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
									<li><span class="opener">การจัดการระบบ</span>
										<ul>
                                            <li><a href="managementSize.html">จัดการราคาไซส์เสื้อ</a></li>
                                            <li><a href="managementColorTshirt.html">จัดการสีเสื้อ</a></li>
                                            <li><a href="managementColor.html">จัดการสีสกรีน</a></li>
                                            <li><a href="managementBlock.html">จัดการบล็อกพิมพ์</a></li>
                                            <li><a href="managementTransport.html">จัดการค่าขนส่ง</a></li>
                                        </ul>
										</li>
									
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
							

							<!-- Footer -->
								

						</div>
					</div>

			</div>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
			
	</body>
</html>