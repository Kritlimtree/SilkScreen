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
	 
	$_SESSION['color'] = 0; 
	
	 
	?>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
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



<script>
function hiddenn(pvar) {
    if(pvar==0){
		document.getElementById("boxCenter").style.display = 'none';
		document.getElementById("oldbox").style.display = 'none';
	}else if(pvar==1){
		document.getElementById("boxCenter").style.display = '';
		document.getElementById("oldbox").style.display = 'none';
		document.getElementById('image_input').value = '';
		
	}else if(pvar==2){
		document.getElementById("boxCenter").style.display = 'none';
		document.getElementById("oldbox").style.display = '';
		
	}
}
</script>
 
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
	
a {
  -moz-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  -webkit-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  -ms-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  border-bottom: dotted 1px;
  color: #2c91f0;
  text-decoration: none; }
  a:hover {
    border-bottom-color: #2c91f0;
    color: #2c91f0 !important; }
    a:hover strong {
      color: inherit; }
/* Modal Content */


/* The Close Button */
img {
border: 0px;
vertical-align:"middle"; 
}

</style>

	</head>
	<body class="is-preload" onload="hiddenn('0')">
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<!-- <a href="index.html" class="logo"><strong>ยินดีต้อนรับ</strong> by HTML5 UP</a> -->
									<p>ยินดีต้อนรับ คุณ <?php echo session("user_name") ?></p>
									<ul class="icons">
									<?php if(session('is_admin')==1){ ?>
											<li><a href="indexLoginIsTrue" class="logo">ไปหลังบ้าน</a></li>
											<?php } ?>
										<li><a href="{{ route('edit_user') }}" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="{{ route('logout') }}" class="logo">logout</a></li>
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
										 
											<h3 id="content">เลือกรูป</h3>
											<div class="row gtr-200">
												<div class="col-4 col-12-small">
													<input onclick="hiddenn('1')" type="radio"  id="3" name="number1" value="1" >
													<label for="3">รูปใหม่</label>
												</div>
												<div class="col-6 col-12-small">
													<input onclick="hiddenn('2')" type="radio" id="4" name="number1" value="2">
													<label for="4">รูปเก่า(ใช้รูปเก่าไม่คิดค้าบล็อคพิมพ์)</label>
												</div>
											</div>
											 
											<div id="boxCenter">
												<div id="display_image"></div><br>
												<span>*กรุณาเลือกลายรูป*</span><br><br>
												<input type="file" id="image_input"  name="logofile" accept="images/png, images/jpeg">
												
											</div><br><br>
											 
											<div id="oldbox">
												<div id="oldimage"></div><br>
												<span>รูปเก่า</span><br><br>
												<select name="oldimage" id="examplee1" style>
												<option  value="" disabled selected >เลือกรูป</option>
												 <?php foreach ($oldimage as $key => $old) { 
													 
													 ?>
													 <option  value="<?php echo $old->picture?>,<?php echo $old->id_order?>" data-icon="<?php echo $old->picture  ?>"><?php echo $old->picture  ?></option>
													 <?php } ?>
												 </select>
												 <br>

												 <img src="" id="changesrc" alt="" width="400px" height="400px">
											</div><br><br>
											 
											<h3 id="content">จำนวนสี</h3>
											<div class="row gtr-200">
												<div class="col-4 col-12-small">
													<input onclick="color()" type="radio"  id="1" name="number" value="1" required >
													<label for="1">1 สี</label>
												</div>
												<div class="col-6 col-12-small">
													<input onclick="morecolor()" type="radio" id="2" name="number" value="2" required >
													<label for="2">มากกว่า 1 สี</label>
												</div>
											</div>

											<h3 id="content">ไซส์เสื้อยืด</h3>
											<div class="row gtr-200">
											<?php foreach ($shirtsize1 as $key => $shirtsize1) { ?>
												<div class="col-3 col-12-small">
													<input type="checkbox"  id="demo-<?php echo $shirtsize1->shirtsize_size ?>" name="demo-priority[]" value="<?php echo $shirtsize1->id_shirtsize ?>">
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
																	<div class="img-resize2 Center"><span><img style="width:115px; height:110px" name="img" value="<?php echo $shirtcolor->shirtcolor_name ?>" id="image" class="zoom colorshow" src="assets/images/<?php echo $shirtcolor->shirtcolor_picture ?>" onmouseover="openModalWhite();" onmouseout="closeModalWhite()" alt="" /></span></div><br>
																	<input type="checkbox"   class="zoom colorshow" id="<?php echo $shirtcolor->shirtcolor_name ?>" name="demo-priority1[]" value="<?php echo $shirtcolor->shirtcolor_picture ?>,<?php echo $shirtcolor->id_shirtcolor ?>">
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
																<input type="button" onclick="history.back()" class="button primary" value="ยกเลิก"></input>
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

			
			<script src="assets/js/order-selectbox.min.js"></script>
			<script>
    $('#examplee').IconSelectBox(true); // isImg: boolean 
    $('.example2').IconSelectBox(false); // isImg: boolean 
  </script>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
			
			</script>
	 
			<script >
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
			$(document).ready(function() {
     $(document).on('change','#examplee1',function(){
		
		var image = document.querySelector('#changesrc');
		var id = $(this).val();
		const myArray = id.split(",");
		console.log(myArray[0]);
        image.src = "assets/images/"+myArray[0];
     });
   });
			</script>
	</body>
</html> 