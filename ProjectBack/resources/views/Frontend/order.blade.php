<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php 
	
	session_start(); 
	 
	$_SESSION['color'] = 0; ?>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script >function openModalBlack() {
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
</script>
<script type="text/javascript" src="assets/js/app1.js" defer></script>
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
							
									<form method="post" action="buy.php" enctype="multipart/form-data">
										@csrf
							<!-- Content -->
								<section>
									<!-- <header class="main">
										<h1>สั่งสกรีน</h1>
									</header> -->

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">

											<div id="boxCenter">
												<div id="display_image"></div><br>
												<span>*กรุณาเลือกลายรูป*</span><br><br>
												<input type="file" id="image_input" required name="logofile" accept="images/png, images/jpeg">
											</div><br><br>

											<h3 id="content">จำนวนสี</h3>
											<div class="row gtr-200">
												<div class="col-4 col-12-small">
													<input onclick="color()" type="radio"  id="1" name="number" value="1" >
													<label for="1">1 สี</label>
												</div>
												<div class="col-6 col-12-small">
													<input onclick="morecolor()" type="radio" id="2" name="number" value="2">
													<label for="2">มากกว่า 1 สี</label>
												</div>
											</div>

											<h3 id="content">ไซส์เสื้อยืด</h3>
											<div class="row gtr-200">
											<?php foreach ($shirtsize1 as $key => $shirtsize1) { ?>
												<div class="col-3 col-12-small">
													<input type="checkbox"  id="demo-<?php echo $shirtsize1->shirtsize_size ?>" name="demo-priority[]" value="<?php echo $shirtsize1->shirtsize_size ?>">
													<label for="demo-<?php echo $shirtsize1->shirtsize_size ?>"><?php echo $shirtsize1->shirtsize_size ?></label>
												</div>
												
												
												<?php } ?>
											</div>

											</div>
										
										<div class="col-6 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">

															<div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div>
															<div class="col-10 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		<thead>
																			<tr>
																				<th>ขนาด<br>(Size)</th>
																				<th>รอบอก<br>(chest) / inch</th>
																				<th>ความยาว<br>(length) / inch</th>
																				
																			</tr>
																		</thead>
																		<tbody>
																			<?php foreach ($shirtsize as $key => $shirtsize) { ?>
																			<tr>
																				<td><?php echo $shirtsize->shirtsize_size ?></td>
																				<td><?php echo $shirtsize->shirtsize_chest ?></td>
																				<td><?php echo $shirtsize->shirtsize_long ?></td>
																				
																			</tr>
																			<?php } ?>
																			
																		</tbody>
																	
																	</table>
																</div>
															</div>
															

															<!-- color T-shirt -->
															<h3 id="content">สีเสื้อยืด</h3>
															<div class="col-4 col-12-small"></div>
															<div class="col-4 col-12-small"></div>
															<?php foreach ($shirtcolor as $key => $shirtcolor) { ?>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img name="img" value="<?php echo $shirtcolor->shirtcolor_name ?>" id="image" class="zoom colorshow" src="assets/images/<?php echo $shirtcolor->shirtcolor_picture ?>" onmouseover="openModalWhite();" onmouseout="closeModalWhite()" alt="" /></span></div><br>
																	<input type="radio" required class="zoom colorshow" id="<?php echo $shirtcolor->shirtcolor_name ?>" name="demo-priority1" value="<?php echo $shirtcolor->shirtcolor_picture ?>,<?php echo $shirtcolor->id_shirtcolor ?>">
																	<label for="<?php echo $shirtcolor->shirtcolor_name ?>">สี<?php echo $shirtcolor->shirtcolor_name ?></label>
																
																</div>
															</div>

															
															<div id="<?php echo $shirtcolor->shirtcolor_name ?>" class="modal">

  <div class="modal-content">

      <img src="assets/images/<?php echo $shirtcolor->shirtcolor_picture ?>" style="width:450px" class="center">
    
  </div>
</div>
<?php } ?>

															<div class="col-4 col-12-small"></div>
															<!-- number of T-shirt -->
															<!-- <h3 id="content">จำนวนเสื้อยืด</h3>
															<div class="col-6 col-12-xsmall">
																<input type="number" id="demo-name" name="quantity" min="1" value="" />
															</div>
															<div class="col-6 col-12-xsmall">
																<h3 id="content">สีที่จะใช้สกรีน</h3>
															</div>
															<div class="col-6 col-12-xsmall"></div>
															<div class="col-6 col-2-xsmall">
																<div id="box"></div>
															</div>
															<div class="col-2 col-2-xsmall">
																<input type="color" id="colorInputColor" name="colorRGB">
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="button" id="colorButton" value="เลือกใช้" onclick="changeColor()">
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="hidden" id="colorInputText">
															</div> -->
															<div class="col-12 col-12-small">
																<input type="button" class="button primary" value="ยกเลิก"></input>
																<input type="hidden" name="controller" value="<span id='color'></span>"/>
																<button type="submit" class="button secondary" name="action" value="check">ต่อไป</input>
																
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
									<li><a href="orderf.php">การสั่งสกรีนเสื้อผ้า</a></li>
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
			
			</script>
	 
			<script>
				$(document).ready(function (){
					// Create
					$(document).on('mouseover','.colorshow',function (){
					var id = document.getElementById('image').getAttribute('value');
					console.log(id[1]);
					document.getElementById(id).style.display = "block";
					
				});
				
			});
			$(document).ready(function (){
					// Create
					$(document).on('mouseout','.colorshow',function (){
					var id = document.getElementById('image').getAttribute('value');
					console.log(id);
					document.getElementById(id).style.display = "none";
					
				});
				
			});
			</script>
	</body>
</html>