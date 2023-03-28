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
			$dir = "assets/images/";
			$logo = $dir . basename($_FILES['logofile']['name']);
			move_uploaded_file($_FILES['logofile']['tmp_name'],$logo);
			
			$_SESSION["screenPicture"]=$_FILES['logofile']['name'];
		}
		if($_POST){
			$option = explode(",", $_POST['demo-priority1']);
			$color = $option[0];
			$color_name = $option[1];
			$size = $_POST['demo-priority'];
			$number = $_POST['number'];
			 
			$_SESSION["color"]=$color;
			$_SESSION["color_name"]=$color_name;
			$_SESSION["size"]=$size;
			$_SESSION["number"]=$number;

		}
		
		?>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
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
									<?php if(session('is_admin')==1){ ?>
											<li><a href="indexLoginIsTrue" class="logo">ไปหลังบ้าน</a></li>
											<?php } ?>
										<li><a href="{{ route('edit_user') }}" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="{{ route('logout') }}" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
							
									<form method="post" action="checkorder3.php" enctype="multipart/form-data">
										@csrf
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
													<div class="img-resize"><span><img src="assets/images/<?php echo $_SESSION["screenPicture"]; ?>" alt="" /></span></div>
												</div>
											</div>	
										</div>

									<div class="col-6 col-12-medium">
										<div id="boxCenter">		
											<div class="displayShirt">
												<p><strong>เสื้อยืดที่เลือก</strong></p>
													<div class="img-resize"><span><img src="assets/images/<?php echo $_SESSION["color"]; ?>" alt="" /></span></div><br>
											</div>
										</div>			
									</div>
										
										<div class="col-12 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">

															<!-- <div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div> -->
															<div class="col-12 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		
																		<tbody>
																			<tr>
																				<td>ขนาด<br>(Size)</td>
																				<?php $c = 0 ; foreach($size as $key => $size) { ?>
																				<td><?php echo $size ?></td>
																				<?php $c++; } ?>
																				<td></td>
																			</tr>
																		
																			<tr>
																				<td>จำนวน(ตัว)</td>
																				<?php for($i=0;$i<$c;$i++) { ?>
																				<td><input type="float" id="demo-name" required name="quantity[]" min="1" value="" /></td>
																				<?php } ?>
																				<td>ตัว</td>
																			</tr>
																			</tr>
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<?php for($i=0;$i<$c;$i++) { ?>
																				<td><input type="float" id="demo-name" required name="top[]" min="1" value="" /></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			 
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php for($i=0;$i<$c;$i++) { ?>
																				<td><input type="float" id="demo-name" required name="left[]" min="1" value="" /></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			 
																			
																			
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td><input type="float" id="demo-name" required name="wide" max="11.69" min="1" value="" /></td>	
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				<td><input type="float" id="demo-name" required name="long" max="16.54" min="1" value="" /></td>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
																	
																	</table>
																	
																	
																	
																	
																	<!-- เอามาไว้ตรงนี้เพราะ ต้องเลือกสี 2 อย่าง ถ้าเลือกเป็นสีเดียวจะขึ้นให้เลือก ถ้า 2 สีจะไม่ขึ้นให้เลือก -->
																	<?php if($number==1){ ?>
																	<div class="col-6 col-12-xsmall">
																		<h3 id="content">สีที่จะใช้สกรีน</h3>
																	</div>
																	<select name="screen_color" id="example" style>
												 
												<?php foreach ($screencolor as $key => $screencolor1) { 
													
													?>
                                                    <option value="<?php echo $screencolor1->id_color  ?>" data-icon="<?php echo $screencolor1->color_code  ?>"><?php echo $screencolor1->color_name  ?></option>
													<?php } ?>
                                                </select>
												
																	</div>
																	<?php } ?>
																</div>
															</div>
															<br>
															<select name="transport" id="myval" >
												<option value="-1" selected disabled>กรุณาเลือกบริษัทขนส่ง</option>
												<?php foreach ($transport as $key => $trans) { 
													
													?>
                                                    <option value="<?php echo $trans->id_tramsport ?>"><?php echo $trans->transport_name  ?></option>
													<?php } ?>
                                                </select>
												<br>
															
															
															
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
									<li><a href="orderf.php">การสั่งสกรีนเสื้อผ้า</a></li>
									<li><a href="shopping.php">การซื้อของฉัน</a></li>
									
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
			<script src="assets/js/custom-selectbox.min.js"></script>
			<script>
    $('#example').IconSelectBox(true); // isImg: boolean 
    $('.example2').IconSelectBox(false); // isImg: boolean 
  </script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
			
	</body>
</html>