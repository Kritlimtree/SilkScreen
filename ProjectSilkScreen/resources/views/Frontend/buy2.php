<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php
		@ini_set('display_errors', '0');
		$asd = serialize($_POST['demo-priority']);
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
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <script >function openModalBlack() {
  document.getElementById("ModalBlack").style.display = "block";
}
function closeModalBlack() {
  document.getElementById("ModalBlack").style.display = "none";
}
function openModalWhite() {
  document.getElementById("ModalWhite").style.display = "block";
}
function closeModalWhite() {
  document.getElementById("ModalWhite").style.display = "none";
}
function openModalBlue() {
  document.getElementById("ModalBlue").style.display = "block";
}
function closeModalBlue() {
  document.getElementById("ModalBlue").style.display = "none";
}
function openModalOrange() {
  document.getElementById("ModalOrange").style.display = "block";
}
function closeModalOrange() {
  document.getElementById("ModalOrange").style.display = "none";
}
function openModalYellow() {
  document.getElementById("ModalYellow").style.display = "block";
}
function closeModalYellow() {
  document.getElementById("ModalYellow").style.display = "none";
}
function slider(){
    var output = document.getElementById("demo");
    var slider = document.getElementById("myRange").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider1(){
    var output = document.getElementById("demo1");
    var slider = document.getElementById("myRange1").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider2(){
    var output = document.getElementById("demo2");
    var slider = document.getElementById("myRange2").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider3(){
    var output = document.getElementById("demo3");
    var slider = document.getElementById("myRange3").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider4(){
    var output = document.getElementById("demo4");
    var slider = document.getElementById("myRange4").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider5(){
    var output = document.getElementById("demo5");
    var slider = document.getElementById("myRange5").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
</script>
<script type="text/javascript" src="assets/js/app1.js" defer></script> -->
<style>
	.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 50px;
  left: 335px;
  top: 10;
  width: 495px;
  height: 495px;
  overflow: hidden;
  background-color: white;
}
	/* .color{
		
	} */

/* Modal Content */


/* The Close Button */


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
										<?php echo $asd; ?>
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
							
									<form method="post" action="checkorder3.php" enctype="multipart/form-data">
							<!-- Content -->
								<section>
									<!-- <header class="main">
										<h1>สั่งสกรีน</h1>
									</header> -->

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">
											<div id="boxCenter">
												<div class="displayShirt">												
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="<?php echo $_SESSION["screenPicture"]; ?>" alt="" /></span></div>
												</div>
											</div>	
										</div>

									<div class="col-6 col-12-medium">
										<div id="boxCenter">		
											<div class="displayShirt">
												<p><strong>เสื้อยืดที่เลือก</strong></p>
													<div class="img-resize"><span><img src="<?php echo $_SESSION["color"]; ?>" alt="" /></span></div><br>
											</div>
										</div>			
									</div>
										
										<div class="col-12 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">

															<!-- <div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div> -->
															<div class="col-10 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		
																		<tbody>
																			<tr>
																				<td>ขนาด<br>(Size)</td>
																				<td>s</td>
																				<td>m</td>
																				<td>l</td>
																			</tr>
																		
																			<tr>
																				<td>จำนวน(ตัว)</td>
																				<td><input type="number" id="demo-name" name="quantity[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="quantity[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="quantity[]" min="1" value="" /></td>
																			</tr>
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<td><input type="number" id="demo-name" name="top[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="top[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="top[]" min="1" value="" /></td>
																			</tr>
																			 
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<td><input type="number" id="demo-name" name="left[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="left[]" min="1" value="" /></td>
																				<td><input type="number" id="demo-name" name="left[]" min="1" value="" /></td>
																			</tr>
																			 
																			
																			
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td><input type="number" id="demo-name" name="wide" min="1" value="" /></td>						
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				<td><input type="number" id="demo-name" name="long" min="1" value="" /></td>
																			</tr>
																		</tfoot>
																	
																	</table>
																	<!-- เอามาไว้ตรงนี้เพราะ ต้องเลือกสี 2 อย่าง ถ้าเลือกเป็นสีเดียวจะขึ้นให้เลือก ถ้า 2 สีจะไม่ขึ้นให้เลือก -->
																	
																	</div>
																</div>
															</div>
															
															
															
															
															
															
															<div class="col-12 col-12-small">
																<input type="button" class="button primary" value="ยกเลิก"></input>
																
																<button type="submit" class="button secondary" name="action" value="check">ยืนยันการสั่ง</button>
																
																
															</div>

														</div>
													</form>
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
			<script src="assets/js/changecolor.js"></script>
			
	</body>
</html>