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
		session_start();
		 
		if($_POST){
			$quantity = $_POST['quantity'];
			$colorRGB = $_POST['colorRGB'];
			$w = $_POST['top'];
			$s = $_POST['button'];
			$a = $_POST['left'];
			$d = $_POST['right'];
			$wide = $_POST['wide'];
			$long = $_POST['long'];
			$sum = 0;
			for($i=0;$i<3;$i++){
			$price[$i] = $quantity[$i]*10;
			if($wide>=8.3&&$wide<11.7){
				if($long>=11.7&&$long<16.5){
					$price[$i] = 150+$price[$i];
				}
			}elseif($wide>=11.7&&$wide<16.5){
				if($long>=16.5&&$long<23.4){
					$price[$i] = 250+$price[$i];
				}
			}else{
					$price[$i] = 350+$price[$i];
			}
			$deposit[$i] = $price[$i]*40/100;
			$sum = $sum+$price[$i];
		}
			$_SESSION["quantity"]=$quantity;
			$_SESSION["sum"]=$sum;
			
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
										
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
							
									<form method="post" action="purchase_1.php" enctype="multipart/form-data">
							<!-- Content -->
								<section>
									<header class="main">
										<h2>ทำการสั่งซื้อ</h2>
									</header>

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">
											<div id="boxCenter">
												<div class="displayShirt">												
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="<?php echo $_SESSION["screenPicture"]; ?>"  alt="" /></span></div>
												</div>
											</div>	
										</div>

                                        <div class="col-6 col-12-medium">
                                            <div id="boxCenter">		
                                                <div class="displayShirt">
                                                    <p><strong>เสื้อยืดที่เลือก</strong></p>
                                                        <div class="img-resize"><span><img src="<?php echo $_SESSION["color"]; ?>"  alt="" /></span></div><br>
                                                </div>
                                            </div>			
                                        </div>
									</div>


										<div class="col-12 col-12-medium">
											<!-- <h3>Form</h3> -->
                                            
                            	
                                            <div class="box2"></div>
														<div class="row gtr-uniform">

															<!-- <div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div> -->

                                                            
															<div class="col-10 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		
																		<tbody>
																			<tr>
																				<td>ขนาด(Size)</td>
																				<td>s</td>
																				<td>m</td>
																				<td>l</td>
																			</tr>
																		
																			<tr>
																				<td>จำนวน(ตัว)</td>
																				<td><?php echo $_SESSION["quantity"][0]; ?></td>
																				<td><?php echo $_SESSION["quantity"][1]; ?></td>
																				<td><?php echo $_SESSION["quantity"][2]; ?></td>
																			</tr>
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<td><?php echo $_SESSION["w"][0]; ?></td>
																				<td><?php echo $_SESSION["w"][1]; ?></td>
																				<td><?php echo $_SESSION["w"][2]; ?></td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<td><?php echo $_SESSION["s"][0]; ?></td>
																				<td><?php echo $_SESSION["s"][1]; ?></td>
																				<td><?php echo $_SESSION["s"][2]; ?></td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<td><?php echo $_SESSION["a"][0]; ?></td>
																				<td><?php echo $_SESSION["a"][1]; ?></td>
																				<td><?php echo $_SESSION["a"][2]; ?></td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<td><?php echo $_SESSION["d"][0]; ?></td>
																				<td><?php echo $_SESSION["d"][1]; ?></td>
																				<td><?php echo $_SESSION["d"][2]; ?></td>
																			</tr>
																			<tr>
																				<td>ราคาต่อหน่วย(บาท)</td>
																				<td><?php echo $_SESSION["deposit"][0]; ?></td>
																				<td><?php echo $_SESSION["deposit"][1]; ?></td>
																				<td><?php echo $_SESSION["deposit"][2]; ?></td>
																			</tr>
																			<tr>
																				<td>ราคารวม(บาท)</td>
																				<!-- <td><?php echo $_SESSION["price"][0]; ?></td>
																				<td><?php echo $_SESSION["price"][1]; ?></td>
																				<td><?php echo $_SESSION["price"][2]; ?></td> -->
																				<td>อยู่ในระหว่างการประเมินราคา</td>
																				<td>อยู่ในระหว่างการประเมินราคา</td>
																				<td>อยู่ในระหว่างการประเมินราคา</td>
																				
																				
																				
																			</tr>
																			<tr>
																				<td colspan="3">ราคาสุทธิ(บาท)</td>
                                                                                <td>อยู่ในระหว่างการประเมินราคา</td>
																				<!-- <td><?php echo $_SESSION["sum"]; ?></td> -->
																				
																			</tr>
																			
																			
																		</tbody>
																	
																	</table>
																</div>

                                                                <div class="col-6 col-12-medium">

                                                                    <form class="box2" style="background-color: rgb(179, 171, 171);">
                                                                        
                                                                        <!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
                                                                        <label for="fname">ขนาดภาพกว้าง(นิ้ว): <?php echo $_SESSION["wide"]; ?></label>
                                                                        <label for="fname">ขนาดภาพยาว(นิ้ว): <?php echo $_SESSION["long"]; ?></label>
                                                                        
                                                                         
                                                                        <!-- <a href="purchase.html" class="button secondary">ชำระเงินคงเหลือ</a> -->
                                                                        
                                                                    </form>
                                                                </div> 

                                                                


															</div>
															
															
															<div class="col-12 col-12-small">
																<input type="button" class="button primary" value="ยกเลิก"></input>
																
																<button type="submit" class="button secondary" name="action" value="check">ชำระเงิน</button>
																<!-- <a href="checkorder3.html">ดำเนินการสั่งทำ</a> -->
																
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