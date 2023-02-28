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
		@ini_set('display_errors', '0');
		if($_FILES){
			session_start(); 
			$logo = $_FILES['logofile'];
			$dir = "images/";
			$logo = $dir . basename($_FILES['logofile']['name']);
			move_uploaded_file($_FILES['logofile']['tmp_name'],$logo);
			$_SESSION["screenPicture"]=$logo;
		}
		if($_POST){
			$option = explode(",", $_POST['demo-priority1']);
			$color = $option[0];
			$color_name = $option[1];
			$size = $_POST['demo-priority'];
			$quantity = $_POST['quantity'];
			$colorRGB = $_POST['colorRGB'];
			$w = $_POST['points1'];
			$s = $_POST['points2'];
			$a = $_POST['points3'];
			$d = $_POST['points4'];
			$wide = $_POST['wide'];
			$long = $_POST['long'];
			$number = $_POST['number'];
			$price = $quantity*10;
			if($wide>=8.3&&$wide<11.7){
				if($long>=11.7&&$long<16.5){
					$price = 150+$price;
				}
			}elseif($wide>=11.7&&$wide<16.5){
				if($long>=16.5&&$long<23.4){
					$price = 250+$price;
				}
			}else{
					$price = 350+$price;
			}
			$deposit = $price*40/100;
			$_SESSION["color"]=$color;
			$_SESSION["color_name"]=$color_name;
			$_SESSION["quantity"]=$quantity;
			$_SESSION["size"]=$size;
			$_SESSION["number"]=$number;
			$_SESSION["colorRGB"]=$colorRGB;
			$_SESSION["price"]=$price;
			$_SESSION["deposit"]=$deposit;
			$_SESSION["w"]=$w;
			$_SESSION["s"]=$s;
			$_SESSION["a"]=$a;
			$_SESSION["d"]=$d;
			$_SESSION["wide"]=$wide;
			$_SESSION["long"]=$long;
			$_SESSION["name"]="admin";
			$_SESSION["fname"]="Smith";
			$_SESSION["address"]="123 กำแพงแสน จ.นครปฐม";
			$_SESSION["phone"]="123-456789";
			$_SESSION["start"]="1";
		}
		
		?>
		<style>
			.center {
  width: 240px;
  height: 40px;
  border: 1px solid black;
  background-color: <?php echo $colorRGB; ?>;
			}
		</style>
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

								</header>
								<section>
									
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

												<div class="displayShirt">
													<!-- <div class="col-8 col-12-small">
														<p>รูปที่จะใช้สกรีน</p>
													</div> -->
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="<?php echo $logo; ?>" alt="" /></span></div>
													<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p> -->
	
												</div>
												<div class="displayShirt">
													<p><strong>เสื้อยืดที่เลือก</strong></p>
													<div class="img-resize"><span><img src="<?php echo $color; ?>" alt="" /></span></div><br>
												</div>

											</div>
											<div class="col-6 col-12-medium">

												<form class="boxOrder" method="post" action="purchase_1.php" enctype="multipart/form-data" name="from1">
													<label for="fname">ไซส์เสื้อยืด: <?php echo $size; ?> </label>
													<br>
													<label for="lname">สีเสื้อยืด: <?php echo $color_name; ?></label>
													<br>
													<label for="fname">จำนวนเสื้อยืด: <?php echo $quantity; ?></label>
													<br>
													<label for="fname">ตำแหน่งภาพห่างจากบน (นิ้ว): <?php echo $_SESSION["w"]; ?></label>
													<br>
													<label for="fname">ตำแหน่งภาพห่างจากล่าง (นิ้ว): <?php echo $_SESSION["s"]; ?></label>
													<br>
													<label for="fname">ตำแหน่งภาพห่างจากซ้าย (นิ้ว): <?php echo $_SESSION["a"]; ?></label>
													<br>
													<label for="fname">ตำแหน่งภาพห่างจากขวา (นิ้ว): <?php echo $_SESSION["d"]; ?></label>
													<br>
													<label for="fname">ขนาดภาพกว้าง (นิ้ว): <?php echo $_SESSION["wide"]; ?></label>
													<br>
													<label for="fname">ขนาดภาพยาว (นิ้ว): <?php echo $_SESSION["long"]; ?></label>
													<br>
													<label for="lname">สีที่จะใช้สกรีน: </label><div class="col-6 col-12-xsmall">
														<div class="center"></div>
													</div>
													<br>
													<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
													<?php $date=date('d/m/Y',strtotime($date . "+3 days")); 
													$_SESSION["date"]=$date;
													$_SESSION["date1"]=date('d/m/Y');
													if($number == 1){ ?>
													<label for="fname">ราคารวม: <?php echo $price; ?> บาท</label>
													<input type="hidden" name="price" value="<?php echo $price; ?>"></input>
													<label for="lname">ค่ามัดจำ 40% คิดเป็น: <?php echo $deposit; ?> บาท</label>
													<input type="hidden" name="deposit" value="<?php echo $deposit; ?>"></input>
													
													<a href="order.php" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก')" class="button primary">แก้ไข</a>
													<input type="submit" class="button secondary" value="ชำระเงิน"></input>
													<?php }else if($number == 2){?>
														<label for="fname">ราคารวม: แอดมินกำลังประเมินราคา</label>
													<label for="lname" style="display: inline">การประเมินราคาจะเสร็จภายในวันที่ <?php echo $date; ?></label>
													<?php } ?>
													
													<!-- <a href="purchase.html" class="button secondary">ชำระเงินคงเหลือ</a> -->
													<br><br>
													
												</form>

												
													<form method="post" action="#">
														<div class="row gtr-uniform">
															

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
									<li><a href="shopping.php">การซื้อของฉัน</a></li>
									<!-- <li>
										<span class="opener">Submenu</span>
										<ul>
											<li><a href="#">Lorem Dolor</a></li>
											<li><a href="#">Ipsum Adipiscing</a></li>
											<li><a href="#">Tempus Magna</a></li>
											<li><a href="#">Feugiat Veroeros</a></li>
										</ul>
									</li> -->
									
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
			<script src="assets/js/main.js"></script>

	</body>
</html>