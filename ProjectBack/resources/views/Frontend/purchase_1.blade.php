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
		 
		 $deposit = $purchase[0]->order_price*40/100;
		 $price1 = $purchase[0]->order_price;
		 echo '<script type="text/javascript">';
		 echo "var price = '$price1';";
		 echo "var deposit = '$deposit';";
		 echo '</script>';
		
		
		?>
		<script type="text/javascript">function toMudjum(){
			var image = document.querySelector('#qr');
    document.getElementById("money123").innerHTML = deposit;
	image.src = "https://promptpay.io/0873717758/"+deposit+".png";
}
function toFull(){
	var image = document.querySelector('#qr');
    document.getElementById("money123").innerHTML = price;
	image.src = "https://promptpay.io/0873717758/"+price+".png";
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
								<?php if(session('is_admin')==1){ ?>
											<li><a href="/index_back" class="logo">ไปหลังบ้าน</a></li>
											<?php } ?>
									<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
									<li><a href="{{ route('logout') }}" class="logo">logout</a></li>
								</ul>
								<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
							</header>

							<!-- Banner -->
							
							<section>
							<?php if($purchase[0]->id_status<12){ ?>
								<form  method="post" action="payment" enctype="multipart/form-data">
									@csrf
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
												<input type="number" id="number" name="num"  placeholder="xxxx"><br><br>
												<label for="lname">สแกนจ่าย:</label>
												<?php if($purchase[0]->id_status==2){ ?>
												<img id="qr" src = "" alt="">
												 
												<div class="row gtr-uniform">
													<!-- <div class="align-center"> -->
														<label for="fname">ชำระเงินค่า:</label>
														
														<div class="col-3 col-12-small">
															<input onclick="toMudjum()" type="radio" id="demo-priority-low" name="mf" value="1,<?php echo $deposit ?>">
															<label for="demo-priority-low">เงินมัดจำ</label>
														</div>

														<div class="col-4 col-12-small">
															<input onclick="toFull()" type="radio" id="demo-priority-high" name="mf" value="2,<?php echo $price1 ?>">
															<label for="demo-priority-high">จ่ายเต็มจำนวน</label>
														</div>
														<label >จำนวนเงิน : <span id="money123"></span> บาท</label>
														</div><br>
														<input type="hidden" name="price" value="<?php echo $price1 ?>"></input>
														<?php }else if($purchase[0]->id_status==4 ){ 
															$paid = 0;
															foreach($purchase as $key => $p){
																$paid = $paid+$p->payment_paid;
															}
															 
															?>
															
															 
															<?php if($purchase[0]->id_status==4&&($purchase[0]->id_statuspayment==1||$purchase[0]->id_statuspayment==4)){ 
																$price = $price1*40/100 - $paid;
																?>
																<input type="hidden" name="mf" value="4,<?php echo $price ?>">
																<input type="hidden" name="price" value="<?php echo $purchase[0]->payment_arrears ?>"></input>
																<?php }else if($purchase[0]->id_status==4&&($purchase[0]->id_statuspayment==2||$purchase[0]->id_statuspayment==4)){ 
																	$price = $price1 - $paid;
																	 
																	?>
																	<input type="hidden" name="mf" value="4,<?php echo $price ?>">
																	<input type="hidden" name="price" value="<?php echo $purchase[0]->payment_arrears ?>"></input>
																	<?php } ?>
																<div class="row gtr-uniform">
															<img id="qr" src = "https://promptpay.io/0873717758/<?php echo $price ?>.png" alt="">
															<label for="fname">ชำระเงินส่วนที่ขาด </label>
															<label >จำนวนเงิน : <?php echo $price ?> บาท</label>

															
															<?php }else if($purchase[0]->id_status==10){ 
																$paid = 0;
																foreach($purchase as $key => $p){
																	$paid = $paid+$p->payment_paid;
																}
																$price = $price1 - $paid;
																?>

																<div class="row gtr-uniform">
															<img id="qr" src = "https://promptpay.io/0873717758/<?php echo $price ?>.png" alt="">
															<label for="fname">ชำระเงินส่วนที่ขาด </label>
															<label >จำนวนเงิน : <?php echo $price ?> บาท</label>

																<input type="hidden" name="mf" value="5,<?php echo $price ?>">
																<input type="hidden" name="price" value="<?php echo $purchase[0]->payment_arrears ?>"></input>
															</div><br>
															 
														<?php } else if($purchase[0]->id_status==8){ 
															$paid = 0;
															foreach($purchase as $key => $p){
																$paid = $paid+$p->payment_paid;
															}
															$price = $price1 - $paid;
															 
															?>
															<div class="row gtr-uniform">
															<img id="qr" src = "https://promptpay.io/0873717758/<?php echo $price ?>.png" alt="">
															<label for="fname">ชำระเงินส่วนที่เหลือ </label>
															<label >จำนวนเงิน : <?php echo $price ?> บาท</label>
															<input type="hidden" name="mf" value="3,<?php echo $price ?>">
															<input type="hidden" name="price" value="<?php echo $purchase[0]->payment_arrears ?>"></input>
															</div><br>
														<?php } ?>
													<!-- </div> -->
												
												
												
												<div class="col-12 col-12-small">
													<input type="hidden" name="id" value="<?php echo $purchase[0]->id_order ?>"></input>
													 
													<input type="button" class="button primary" value="ยกเลิก"></input>
													<input type="submit" class="button secondary" value="ตกลง"></input>
												</div>
</form >
												
											</div>

										</div>

										<div class="align-center"></div>
										<div class="align-center">

										</div>

										<div class="align-center">
										</div>
									</div>
									<?php }else{ ?>
										<h1>สำเร็จ</h1>
										<?php } ?>
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
