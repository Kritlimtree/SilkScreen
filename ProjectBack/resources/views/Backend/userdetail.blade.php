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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<style>
div.img {
    margin: 5px;
    padding: 5px;   
    border: 1px solid #0000ff;   
    height: auto;   
    width: auto;   
    float: left;   
    text-align: center;   
}	
div.img a:hover img {        
    border: 1px solid #0000ff;
}
div.desc {
  text-align: center; 		 
  font-weight: normal;  	 
  width: 120px; 		 
  margin: 5px; 		 
}
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
									<li><a href="indexLoginIsTrue.html" class="logo">ไปหน้าบ้าน</a></li>
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>

							<section>
								
							 
							
									<div class="features">
									
										<form class="box">
										
                                            <label for="orderid"> </label><br>
											<label for="lname">E-mail: <?php echo $user[0]->user_email ?> </label><br>
											<label for="lname">Name: <?php echo $user[0]->user_name ?> </label><br>
											<!-- <input type="text" id="name" name="name" value="adam"><br> -->
                                            <label for="fname">Lastname: <?php echo $user[0]->user_fname ?> </label><br>
											<!-- <input type="text" id="lname" name="lname" value="smith"><br> -->
											 
											<label for="fname">ที่อยู่: <?php echo $user[0]->user_address; ?> 
															ตำบล <?php echo $user[0]->district_name_th; ?> 
															อำเภอ <?php echo $user[0]->amphure_name_th; ?> 
															จังหวัด <?php echo $user[0]->province_name_th; ?> 
															รหัสไปรษณีย์ <?php echo $user[0]->zip_code; ?></label>
											<!-- <div class="col-12">
												<textarea name="demo-message" id="addr" placeholder="12 nowhere" rows="6"></textarea>
											</div><br> -->
											<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
                                            <label for="fname">phone: <?php echo $user[0]->user_phone; ?>  </label><br>
                                            <!-- <label for="fname">เลขบัญชี 4 ตัวท้าย: 1234</label><br> -->
                                            
											 
										</form>
										</div>
										
									
									
								</section>
								<div class="Center">
									<!-- <h3>ลูกค้าที่สั่งออร์เดอร์ทั้งหมด</h3> -->
									<form method="post" action="{{ route('detailpurchase_store') }}" enctype="multipart/form-data">
										@csrf
									 
									
								</div>

                                <div class="Center3">
                                    <!-- <div class="row col-6 col-6-medium"> -->
										
									  
									
                                      
                                     </from>   
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
									<li><a href="indexLoginIsTrue">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="/user">ข้อมูลลูกค้า</a></li>
									<!-- <li>
										<span class="opener">Submenu</span>
										<ul>
											<li><a href="#">Lorem Dolor</a></li>
											<li><a href="#">Ipsum Adipiscing</a></li>
											<li><a href="#">Tempus Magna</a></li>
											<li><a href="#">Feugiat Veroeros</a></li>
										</ul>
									</li> -->
									<li><a href="purchase.php">การชำระเงิน</a></li>
									<li><span class="opener">การจัดการระบบ</span>
										<ul>
                                            <li><a href="managementSize.html">จัดการราคาไซส์เสื้อ</a></li>
                                            <li><a href="managementColorTshirt.html">จัดการสีเสื้อ</a></li>
                                            <li><a href="managementColor.html">จัดการสีสกรีน</a></li>
                                            <li><a href="managementBlock.html">จัดการบล็อกพิมพ์</a></li>
                                            <li><a href="managementTransport.html">จัดการค่าขนส่ง</a></li>
                                        </ul>
										</li>
									
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
							

							<!-- Footer -->
								

						</div>
					</div>

			</div>

			

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
 
	</body>
</html>