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
		<script>
function hiddenn(pvar) {
    if(pvar==0){
		document.getElementById("boxCenter").style.display = 'none';
		document.getElementById("demo-message").required;
	}else if(pvar==1){
		document.getElementById("boxCenter").style.display = '';

	}
}
</script>
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

								<section>
									<!-- <header class="main">
										<h1>สั่งสกรีน</h1>
									</header> -->
									<?php  if($order[0]->id_sample != ''){ ?>
									<div class="row gtr-200">
									<div class="col-6 col-12-medium">
											<div id="box">
												<div class="displayShirt">												
													<p><strong>ตัวอย่างสินค้า</strong></p>
													<?php  if($order[0]->id_sample != ''){ ?>
													<div class="img-resize"><span><img src="assets/images/<?php echo $sample[0]->sample_picture; ?>"  alt="" /></span></div>
												<?php }else{ ?>
													<div class="img-resize"><span></span></div>
													<?php } ?>
												</div>
											</div>	
										</div>
										
										<div class="col-6 col-12-medium">
											<!-- <h3>Form</h3> -->
													<?php if($sample[0]->sample_status==null){ ?>
													<form method="post" action="confirmsimple" enctype="multipart/form-data">
														@csrf
														<div class="row gtr-uniform">
															<div class="col-12 col-12-small">
																<h4>ข้าพเจ้าได้ตรวจสอบตัวอย่างของงานแล้วพบว่า</h4>
																<h4>(สามารถแก้ไขได้เพียงรั้งเดียว)</h4>
															</div>
															 
															<div class="col-8 col-12-small">
																<input onclick="hiddenn('0')" type="radio" id="demo-priority-low" name="fix" value="1" required>
																<label for="demo-priority-low">ตัวอย่างถูกต้อง</label>
															</div>
															<div class="col-8 col-12-small">
																<input onclick="hiddenn('1')" type="radio" id="demo-priority-normal" name="fix" value="2" required>
																<label for="demo-priority-normal">ตัวอย่างไม่ถูกต้อง</label>
															</div><br>
                                                            <div class="col-10 col-12-small" id="boxCenter">
                                                                <h4>หมายเหตุ / สาเหตุที่ตัวอย่างไม่ถูกต้อง</h4>
                                                                <div class="col-12">
                                                                    <textarea name="message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                                                </div><br>
                                                            </div>
															<div class="col-6 col-12-xsmall">
																<input type="hidden" id="colorInputText">
															</div>
															<div class="col-12 col-12-small">
															 
															<input type="hidden" id="demo-priority-low" name="id" value="<?php echo $sample[0]->id_sample; ?>">
															 
																<input type="button" class="button primary" value="ยกเลิก"></input>
																<input type="hidden" name="controller" value="<span id='color'></span>"/>
																<button type="submit" class="button secondary" name="action" value="check">ยืนยัน</input>
															</div>
														</div>
													</form>
													<?php }else{ ?>
															<h1>ตรวจสอบตัวอย่างเสร็จสิ้น</h1>
														<?php } ?>
										</div>
										<?php }else{ ?>
											<h1>ยังไม่ได้จัดทำตัวอย่าง</h1>
											<?php } ?>
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
									<li><a href="orderf.php">การสั่งสกรีนเสื้อผ้า</a></li>
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
									<li class="icon solid fa-envelope">อีเมล<br>baantonson.silkscreen@hotmail.com</li>
									<li class="icon solid fa-phone">เบอร์โทรศัพท์<br>084-317-2553(จ๋าย)<br> 094-549-1388(น้อง)<br> 081-920-9709(บูรณ์)</li>
									<li class="icon solid fa-home">46 หมู่ 8<br>ต.หนองกระทุ่ม อ.กำแพงแสน <br>จ.นครปฐม 73140</li>
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
			
			<script>

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