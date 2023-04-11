<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<!-- <?php session_start(); 
	$_SESSION['color'] = 0;?> -->
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
							
									<form method="post" action="checkorder_1.php" enctype="multipart/form-data">
							<!-- Content -->
								<section>
									<!-- <header class="main">
										<h2>ทำการสั่งซื้อ</h2>
									</header> -->

									<div class="row gtr-200">
										<div class="col-5 col-12-medium">
											<div id="boxCenter">
												<div class="displayShirt">												
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src=""></span></div>
												</div>
											</div>	
										</div>

                                        <div class="col-4 col-12-medium">
                                            <div id="boxCenter">		
                                                <div class="displayShirt">
                                                    <p><strong>เสื้อยืดที่เลือก</strong></p>
                                                        <div class="img-resize"><span><img src=""></span></div><br>
                                                </div>
                                            </div>			
                                        </div>
										<div class="col-5 col-12-medium">
											<div class="displayShirt">
												<div id="boxCenter">
												<p><strong>ตัวอย่างการสกรีน</strong></p>
												<div id="display_image"></div><br>
												<!-- <span>*กรุณาเลือกลายรูป*</span><br><br> -->
												<input type="file" id="image_input" name="logofile" accept="image/png, image/jpeg">
												</div>
											</div>

										</div>


										<div class="col-4 col-12-medium">

											<form class="boxOrder" style="background-color: rgb(228, 220, 220);">
												
												
												<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
												<label for="fname">ชื่อลูกค้า:</label>
												<label for="fname">นามสกุลลูกค้า:</label>
												<label for="fname">ที่อยู่: 123 ต.ไม่รู้ อ.ไม่ทราบ จ.ทุกแห่ง 10000:</label>
												<label for="fname">เบอร์โทร: 123-4567890:</label>
												
												<!-- <a href="purchase.html" class="button secondary">ชำระเงิน</a> -->
												<!-- <a href="purchase.html" class="button secondary">ชำระเงินคงเหลือ</a> -->
												<label for="lname">จำนวนสีที่ใช้: 1 สี</label>
												<label for="lname">สีที่จะใช้สกรีน: </label><div class="col-6 col-12-xsmall">
													<div class="boxCenter" ></div>
												</div>
												<br>
												<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
												<label for="fname">ขนาดภาพกว้าง(นิ้ว): 5</label>
												<label for="fname">ขนาดภาพยาว(นิ้ว): 7</label>
												<label for="lname">ราคาที่ประเมิน: </label>
												<input type="number" value=""></input>
												<label >สถานะออเดอร์:</label>
												<select >
													  <option value="">กำลังประเมินราคา</option>
													  <option value="">รอชำระเงินมัดจำ/เต็มจำนวน</option>
													 <option value="">รอการชำระเงินส่วนที่เหลือ</option>
													  
													  <option value="">กำลังผลิต</option>
													  <option value="">กำลังจัดส่งสินค้า</option>
													 <option value="">จัดส่งสินค้าสำเร็จ</option>
												</select>
												<label for="lname">บริการขนส่งโดย: -</label>
												<select >
													  <option value="">Kerry</option>
													  <option value="">ไปรษณีไทย</option>
												</select>
												<label for="lname">หมายเลขรหัสพัสดุ: -</label>
												<input type="text" value=""></input>
												<br>
												<!-- <a href="order.php" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
												<a href="order.php" class="button secondary">บันทึก</a> -->
											</form>
										</div>








										<div class="col-12 col-12-medium">
											<!-- <h3>Form</h3> -->
                                            
                            	
                                            <div class="box2"></div>
														<div class="row gtr-uniform">

															<!-- <div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div> -->

                                                            
															<div class="col-12 col-12-small">
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
																				<td>100</td>
																				<td>200</td>
																				<td>300</td>
																			</tr>
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<td>2.0</td>
																				<td>2.0</td>
																				<td>2.0</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<td>2.0</td>
																				<td>2.0</td>
																				<td>2.0</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<td>2.0</td>
																				<td>2.0</td>
																				<td>2.0</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<td>2.0</td>
																				<td>2.0</td>
																				<td>2.0</td>
																			</tr>
																			<tr>
																				<td>ราคาต่อหน่วย(บาท)</td>
																				<td>5.0</td>
																				<td>5.0</td>
																				<td>5.0</td>
																			</tr>
																			<tr>
																				<td>ราคารวม(บาท)</td>
																				<td>500.0</td>
																				<td>1000.0</td>
																				<td>1500.0</td>
																			</tr>
																			<tr>
																				<td colspan="3">ราคาสุทธิ(บาท)</td>
																				<td>3000.0</td>
																				
																			</tr>
																			
																			
																		</tbody>
																	
																	</table>
																</div>

															</div>
															
															<div class="row gtr-200">
																<div class="col-6 col-12-medium">
																	<a href="order.php" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
																</div>
																<div class="col-6 col-12-medium">

																	<a href="order.php" class="button secondary">บันทึก</a>
																</div>
															</div>
															
															<!-- <div class="col-12 col-12-small">
																<input type="button" class="button primary" value="ยกเลิก"></input>
																
																<button type="submit" class="button secondary" name="action" value="check">ยืนยันการสั่ง</button>
																
																
															</div> -->

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