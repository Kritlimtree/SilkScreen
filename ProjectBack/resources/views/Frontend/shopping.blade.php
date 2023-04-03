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
		 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

		
		
		<script type="text/javascript">function toMudjum(){
    document.getElementById("money123").innerHTML = deposit;
}
function toFull(){
    document.getElementById("money123").innerHTML = price;
}</script>
<style>
	.modal {
  display: show;
  position: center;
  height: 80px;
  width:  80px;
  
  
  
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
body{
    background-size: cover;
    background-position: center;
}
.progress img{
    width: 1px;
}
.a{
    padding-left: 10px;
}
.b{
    display: inline-block;
	
    width: 37px;

}
.c{
	
	display: inline-block;
	background: #ccc;
    width: 40px;
	height: 40px;
	color: black;
	border-radius: 50%;
	padding-top: 9px;
	padding-right: 1px;
	 
	font: 1.5em sans-serif;
}
.d{
	display: inline-block;
	background: #3DBEFE;
    width: 40px;
	height: 40px;
	color: white;
	border-radius: 50%;
	padding-top: 9px;
	padding-right: 1px;
	 
	font: 1.5em sans-serif;
}
td{
	margin-left: auto;
  margin-right: auto;
}
h5{
	font-size: 50px;
	font: 1.5em sans-serif;
}
h4{
	font-size: 50px;
	font: 1.5em sans-serif;
	
}
/* Modal Content */


/* The Close Button */


</style>

<style>
.tooltip {
  position: relative;
  display: inline-block;
  
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  top: -5px;
  left: 110%;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 100%;
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent black transparent transparent;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
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

							<!-- Banner -->
							<section>
										<div class="col-12 col-12-small Center">
										
																<h4>การซื้อของฉัน</h4>
															</div>
															
															<div class=" ">
															<div class="table-wrapper">
															<div class="w3-container">
															
																<table id="example"  class="alt" style="width:100%"  >
																	<thead>
																		<tr>
																			
																			<th class="text-center">รูปที่สกรีน</th>
																			<th class="text-center">ตรวจสอบสินค้า</th>
																			<th class="text-center">ชำระเงิน</th>
																			<th class="text-center">ตัวอย่างสินค้า</th>
																			<th class="text-center">ราคา</th>
																			<th class="text-center">สถานะสินค้า 
																				<!-- <div class="tooltip"> -->
																					<i class='fas fa-info-circle' style='font-size:15px'></i>
																				<!-- <span class="tooltiptext">111111</span> -->
																				<!-- </div> -->
																			</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php  foreach($order as $key => $order1){ ?>
																		<tr>
																		<td>
        
            <form method="POST" action="{{ route('checkorder4') }}">
                <input type="hidden" name="id" value="{{ $order1->id_order }}">
                {!! csrf_field() !!}
                <button type="submit"class="btn" >
                    <span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $order1->picture ?>"></span>
                </button>
            </form>
            

    </td>
	<td>
        
		<form method="POST" action="{{ route('checkorder4') }}">
			<input type="hidden" name="id" value="{{ $order1->id_order }}">
			{!! csrf_field() !!}
			<button type="submit" class="btn">
				<span class="glyphicon glyphicon-trash">ตรวจสอบสินค้า</span>
			</button>
		</form>
		

</td>
<td>
        
		<form method="POST" action="{{ route('purchase') }}">
			<input type="hidden" name="id" value="{{ $order1->id_order }}">
			{!! csrf_field() !!}
			<button type="submit" class="btn">
				<span class="glyphicon glyphicon-trash">ชำระเงิน</span>
			</button>
		</form>
		

</td>	
<td>
        
		<form method="POST" action="{{ route('sample') }}">
			<input type="hidden" name="id" value="{{ $order1->id_order }}">
			{!! csrf_field() !!}
			<button type="submit" class="btn">
				<span class="glyphicon glyphicon-trash">ตัวอย่างสินค้า</span>
			</button>
		</form>
		

</td>																	 
																			 
																			 
																			<?php if($order1->order_price!=''){ ?>
																			<td><?php echo number_format($order1->order_price,2) ?></td>
																			
																				<?php }else{ ?>
																					<td>กำลังประเมินราคา</td>
																					<?php } ?>
																					<td><ul class="a">
																					
																				 
																						<?php if($order1->id_status=='1'){ ?>														
																							<i class="d" style="float:left">1</i>	
																								<h4 >กำลังประเมินราคา</h4>	
																						<?php }else if($order1->id_status=='2'){ ?>			
																							<i class="d" style="float:left">2</i>	
																								<h4 >รอชำระเงินมัดจำ/เต็มจำนวน</h4>	
																							<?php }else if($order1->id_status=='3'){ ?>			
																							<i class="d" style="float:left">3</i>	
																								<h4 >รอยืนยันการชำระเงินมัดจำ/เต็มจำนวน</h4>	
																							<?php }else if($order1->id_status=='4'){ ?>			
																							<i class="d" style="float:left">4</i>	
																								<h4 >ชำระเงินไม่ครบกรุณาชำระส่วนที่ขาด</h4>	
																							<?php }else if($order1->id_status=='5'){ ?>			
																							<i class="d" style="float:left">5</i>	
																								<h4 >รอยืนยันการชำระเงินส่วนที่ขาด</h4>	
																							<?php }else if($order1->id_status=='6'){ ?>			
																							<i class="d" style="float:left">6</i>	
																								<h4 >ตรวจสอบตัวอย่าง</h4>	
																							<?php }else if($order1->id_status=='7'){ ?>			
																							<i class="d" style="float:left">7</i>	
																								<h4 >ยืนยันตัวอย่าง</h4>	
																							<?php }else if($order1->id_status=='8'){ ?>			
																							<i class="d" style="float:left">8</i>	
																								<h4 >กำลังผลิตสินค้า</h4>	
																							<?php }else if($order1->id_status=='9'){ ?>			
																							<i class="d" style="float:left">9</i>	
																								<h4 >รอชำระส่วนที่เหลือจากมัดจำ</h4>	
																							<?php }else if($order1->id_status=='10'){ ?>			
																							<i class="d" style="float:left">10</i>	
																								<h4 >รอยืนยันการำระเงินส่วนที่เหลือจากมัดจำ</h4>	
																							<?php }else if($order1->id_status=='11'){ ?>			
																							<i class="d" style="float:left">11</i>	
																								<h4 >ชำระเงินส่วนที่เหลือจากมัดจำไม่ครบกรุณาชำระส่วนที่ขาด</h4>	
																							<?php }else if($order1->id_status=='12'){ ?>			
																							<i class="d" style="float:left">12</i>	
																								<h4 >รอยืนยันการชำระเงินส่วนที่เหลือของมัดจำที่จ่ายไม่ครบ</h4>	
																							<?php }else if($order1->id_status=='13'){ ?>			
																							<i class="d" style="float:left">13</i>	
																								<h4 >กำลังจัดส่งสินค้า</h4>	
																							<?php }else if($order1->id_status=='14'){ ?>			
																							<i class="d" style="float:left">14</i>	
																								<h4 >เสร็จสิ้น</h4>	
																							<?php } ?>																							
																							
																				 
																				
																				 
																			</ul></td>
																			
																		</tr>
																		<?php } ?>
																		
																	</tbody>
																	
																</table>
																

															</div>
															
															</div>

								</section>
																<p>1 กำลังประเมินราคา</p>
																<p>2 รอชำระเงินมัดจำ/เต็มจำนวน</p>
																<p>3 รอยืนยันการชำระเงินมัดจำ/เต็มจำนวน</p>
																<p>4 ชำระเงินไม่ครบกรุณาชำระส่วนที่ขาด</p>
																<p>5 รอยืนยันการชำระเงินส่วนที่ขาด</p>
																<p>6 ตรวจสอบตัวอย่าง</p>
																<p>7 ยืนยันตัวอย่าง</p>
																<p>8 กำลังผลิตสินค้า</p>
																<p>9 รอชำระส่วนที่เหลือจากมัดจำ</p>
																<p>10 รอยืนยันการำระเงินส่วนที่เหลือจากมัดจำ</p>
																<p>11 ชำระเงินส่วนที่เหลือจากมัดจำไม่ครบกรุณาชำระส่วนที่ขาด</p>
																<p>12 รอยืนยันการชำระเงินส่วนที่เหลือของมัดจำที่จ่ายไม่ครบ</p>
																<p>13 กำลังจัดส่งสินค้า</p>
																<p>14 เสร็จสิ้น</p>
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
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
			
			<script>
    $(document).ready(function () {
        $('#example').DataTable({
			"columns": [
        { "width": "10%" },
        { "width": "15%" },
        { "width": "10%" },
        { "width": "15%" },
        { "width": "10%" },
        { "width": "100%" },
         
],
		}
			
			
		);
		
    });
    </script>
			
			
	</body>
</html>
