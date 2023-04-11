<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php 
		@ini_set('display_errors', '0');
			session_start();
			$logo = $_SESSION["screenPicture"];
		?>
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
									<form method="post" action="indexLoginIsTrue.php" enctype="multipart/form-data">
									<!-- Elements -->
										<!-- <h2 id="elements">Elements</h2> -->
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
												<div class="displayShirt">
												<div id="boxCenter">
												<p><strong>ตัวอย่างการสกรีน</strong></p>
												<div id="display_image"></div><br>
												<!-- <span>*กรุณาเลือกลายรูป*</span><br><br> -->
												
												<input type="file" id="image_input" name="logofile" accept="image/png, image/jpeg">
												<?php 
													
												?>
											</div>
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
													<label for="fname">ชื่อลูกค้า: <?php echo $_SESSION["name"]; ?></label>
													<label for="fname">นามสกุลลูกค้า: <?php echo $_SESSION["fname"]; ?></label>
													<label for="fname">ที่อยู่: <?php echo $_SESSION["address"]; ?></label>
													<label for="fname">เบอร์โทร: <?php echo $_SESSION["phone"]; ?></label>
													
													<!-- <a href="purchase.html" class="button secondary">ชำระเงิน</a> -->
													<!-- <a href="purchase.html" class="button secondary">ชำระเงินคงเหลือ</a> -->
													<label for="lname">ราคาที่ประเมิน: </label>
													<input type="number" value=""></input>
													<label >สถานะออเดอร์:</label>
													<select name="option" id="8">
 														 <option value="1">กำลังประเมินราคา</option>
 														 <option value="2">รอชำระเงินมัดจำ/เต็มจำนวน</option>
														 <option value="3">รอการชำระเงินส่วนที่เหลือ</option>
														  
 														 <option value="4">กำลังผลิต</option>
 														 <option value="5">กำลังจัดส่งสินค้า</option>
														 <option value="6">จัดส่งสินค้าสำเร็จ</option>
													</select>
													<label for="lname">บริการขนส่งโดย: -</label>
													<select name="tp">
 														 <option value="Kerry">Kerry</option>
 														 <option value="ไปรษณีไทย">ไปรษณีไทย</option>
													</select>
													<label for="lname">หมายเลขรหัสพัสดุ: -</label>
													<input type="text" name="serial" ></input>
													<br>
													<a href="order.html" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
													<button type="submit" class="button secondary" name="action" value="check">บันทึก</input>
												</form>

													<form method="post" action="#">
														<div class="row gtr-uniform">
															
														</div>
													
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
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
									<li><a href="purchase.php">การชำระเงิน</a></li>
								</ul>
							</nav>
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