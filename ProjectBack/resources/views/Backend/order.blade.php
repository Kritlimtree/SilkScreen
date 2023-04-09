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
		 
		<?php 
		@ini_set('display_errors', '0');
		session_start();
		?>
		<style>

body, input, select, textarea {
  color: #7f888f;
  font-family: "Open Sans", sans-serif;
  font-size: 13pt;
  font-weight: 400;
  line-height: 1.65; }
  @media screen and (max-width: 1680px) {
    body, input, select, textarea {
      font-size: 11pt; } }
  @media screen and (max-width: 1280px) {
    body, input, select, textarea {
      font-size: 10pt; } }
  @media screen and (max-width: 360px) {
    body, input, select, textarea {
      font-size: 9pt; } }

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

strong, b {
  color: #3d4449;
  font-weight: 600; }

em, i {
  font-style: italic; }

p {
  margin: 0 0 2em 0; }

h1, h2, h3, h4, h5, h6 {
  color: #3d4449;
  font-family: "Roboto Slab", serif;
  font-weight: 700;
  line-height: 1.5;
  margin: 0 0 1em 0; }
  h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    color: inherit;
    text-decoration: none;
    border-bottom: 0; }

h1 {
  font-size: 4em;
  margin: 0 0 0.5em 0;
  line-height: 1.3; }

h2 {
  font-size: 1.75em; }

h3 {
  font-size: 1.25em; }

h4 {
  font-size: 1.1em; }

h5 {
  font-size: 0.9em; }

h6 {
  font-size: 0.7em; }

@media screen and (max-width: 1680px) {
  h1 {
    font-size: 3.5em; } }

@media screen and (max-width: 980px) {
  h1 {
    font-size: 3.25em; } }

@media screen and (max-width: 736px) {
  h1 {
    font-size: 2em;
    line-height: 1.4; }
  h2 {
    font-size: 1.5em; } }

sub {
  font-size: 0.8em;
  position: relative;
  top: 0.5em; }

sup {
  font-size: 0.8em;
  position: relative;
  top: -0.5em; }

blockquote {
  border-left: solid 3px rgba(210, 215, 217, 0.75);
  font-style: italic;
  margin: 0 0 2em 0;
  padding: 0.5em 0 0.5em 2em; }

code {
  background: rgba(230, 235, 237, 0.25);
  border-radius: 0.375em;
  border: solid 1px rgba(210, 215, 217, 0.75);
  font-family: "Courier New", monospace;
  font-size: 0.9em;
  margin: 0 0.25em;
  padding: 0.25em 0.65em; }

pre {
  -webkit-overflow-scrolling: touch;
  font-family: "Courier New", monospace;
  font-size: 0.9em;
  margin: 0 0 2em 0; }
  pre code {
    display: block;
    line-height: 1.75;
    padding: 1em 1.5em;
    overflow-x: auto; }

hr {
  border: 0;
  border-bottom: solid 1px rgba(210, 215, 217, 0.75);
  margin: 2em 0; }
  hr.major {
    margin: 3em 0; }

.align-left {
  text-align: left; }

.align-center {
  text-align: center; }

.align-right {
  text-align: right; }

	.model {
  display: show;
   
  height: 80px;
  width:  80px;
  
  overflow: hidden;
  background-color: white;
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
										<li><a href="{{ route('edit_user') }}" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="{{ route('logout') }}" class="logo">logout</a></li>
									</ul>

								</header>

							<section id="banner">
								<header>
								</header>
								<form action="{{ route('orderadmin_detail') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<div class="Center2">
									<h3>ลูกค้าที่สั่งออร์เดอร์ทั้งหมด</h3>
									
									<div class="table-wrapper" style="width:116%">
										<table id="example" class="table table-striped" style="width:100%">
											<thead>
												<tr>													
													<td>ชื่อ</td>
													<td>นามสกุล</td>
													<td>วันที่สั่งออร์เดอร์ล่าสุด</td>
													<td>id order</td>
													<td>สถานะ</td>
													<td>ออร์เดอร์</td>
												</tr>
											</thead>
											<tbody>
												<?php foreach($order as $key => $orders){  ?>
												<tr>
													<td><?php echo $orders->user_name ?></td>
													<td><?php echo $orders->user_fname ?></td>
													<td><?php echo $orders->order_orderdate ?></td>
													<td><?php echo $orders->order_id ?></td>
													<td><?php echo $orders->status_name ?></td>
													<td><button type="submit" value="<?php echo $orders->id_order ?>" name="id" class="secondary" >รายละเอียด</button></td>
												</tr>
												<?php } ?>
												
												 
											</tbody>
											
										</table>
									</div>
									
								</div>
								</form>
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
									<li><a href="indexLoginIsTrue">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="/user">ข้อมูลลูกค้า</a></li>
									<li><a href="purchase.php">การชำระเงิน</a></li>
									<!-- <li><a href="management.html">การจัดการระบบ</a></li> -->
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

			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
			
			<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
			
	</body>
</html>