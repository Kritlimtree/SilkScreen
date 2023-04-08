<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php $c=0; foreach($orderdetail as $key => $od){  
			$sum[$c] = ($od->orderdetail_price*$od->quantity)+$od->wpu;
			$c++;
		 }  ?>
		<title>silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

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
													<div class="img-resize"><span><img src="assets/images/<?php echo $order[0]->picture; ?>"  alt="" /></span></div>
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
																				<?php   $c=0; foreach($orderdetail as $key => $od){
																					if($c<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo $od->shirtsize_size ?></td>
																				<?php $quantity[$c]=0; $price[$c]=0; $c++;}  } ?>
																				<td></td>
																			</tr>
																		
																			 
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<?php $c1=0; foreach($orderdetail as $key => $od){ 
																					if($c1<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo number_format($od->orderdetail_upper, 2) ?></td>
																				<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<?php $c1=0; foreach($orderdetail as $key => $od){ 
																					if($c1<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo number_format($od->orderdetail_lower, 2) ?></td>
																				<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php $c1=0; foreach($orderdetail as $key => $od){ 
																					if($c1<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo number_format($od->orderdetail_left, 2) ?></td>
																				<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<?php $c1=0; foreach($orderdetail as $key => $od){ 
																					if($c1<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo number_format($od->orderdetail_right, 2) ?></td>
																				<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>

																			 
																			
																				 
																			<?php  $c1=0; $c3=0; for($i=0;$i<count($orderdetail)/$order[0]->numshirtcolor;$i++){    ?>
																			<tr>
																			<?php  foreach($orderdetail as $key => $od){ if($c1%($order[0]->numshirtcolor)==0){ ?>
																				<td><span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $orderdetail[$c1]->shirtcolor_picture ?>"></span></td>
																				
																				<?php $c1++; break; }$c1++;}  ?>
																				<?php $c2=0; $c4=0; foreach($orderdetail as $key => $od){  if($c3<(($i+1)*$order[0]->numshirtcolor)){ ?>
																					<td><?php echo $orderdetail[$c3]->quantity ?></td>
																					 
																				<?php $quantity[$c4]=$quantity[$c4]+$orderdetail[$c3]->quantity; 
																						$price[$c4] = $price[$c4]+($orderdetail[$c3]->orderdetail_price*$orderdetail[$c3]->quantity);
																						 $c3++; $c4++; }$c2++; }  ?>
																						   
																				<td>ตัว</td>
																			</tr>
																			 <?php } ?>

 
																			<tr>
																				<td>จำนวนรวม(ตัว)</td>
																				<?php for($i=0;$i<count($quantity);$i++){  ?>
																				<td><?php echo $quantity[$i] ?></td>
																				<?php } ?>
																				<td>ตัว</td>
																			</tr>
																			<?php if($order[0]->id_status!=1) { ?>
																			<tr>
																				<td>ราคาต่อตัว(บาท)</td>
																				<?php for($i=0;$i<count($price);$i++){  ?>
																				<td><?php echo number_format($price[$i]/$quantity[$i] , 2) ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาต่อหน่วย(บาท)</td>
																				<?php $tprice = 0; for($i=0;$i<count($price);$i++){  ?>
																				<td><?php $tprice = $tprice+$price[$i]; echo number_format($price[$i], 2) ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			 <?php } ?>
																			<tr>
																				<td>ราคาค่าส่ง(บาท)</td>
																				<?php  ?>
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($order[0]->delivery_price, 2) ?></td>
																				 
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาบล็อคพิมพ์(บาท)</td>
																				 
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($order[0]->blockprice, 2) ?></td>
																				 
																				<td>บาท</td>
																			</tr>
																			
																			<tr>
																				<td>ราคารวม(บาท)</td>
																				<?php if($order[0]->order_price!=null) { ?>
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($order[0]->order_price-$order[0]->blockprice-$order[0]->delivery_price, 2) ?></td>
																				<?php }else{ ?>
																					<td colspan="<?php echo $order[0]->numshirtcolor ?>">กำลังประเมินราคา</td>
																					<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td  >ราคาสุทธิ(บาท)</td>
																				<?php if($order[0]->order_price!=null) { ?>
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($order[0]->order_price, 2) ?></td>
																				<?php }else{ ?>
																					<td colspan="<?php echo $order[0]->numshirtcolor ?>">กำลังประเมินราคา</td>
																					<?php } ?>
																				<td>บาท</td>
																			</tr>
																			
																			
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($orderdetail[0]->orderdetail_wide) ?></td>	
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				 
																				<td colspan="<?php echo $order[0]->numshirtcolor ?>"><?php echo number_format($orderdetail[0]->orderdetail_long) ?></td>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
																	</table>
																</div>

                                                                <div class="col-6 col-12-medium">

                                                                    <form class="box2" style="background-color: rgb(179, 171, 171);">
																	<?php if($order[0]->order_type==1){ ?>
                                                                        <label for="lname">จำนวนสีที่ใช้: 1 สี</label>
																		<?php }else{ ?>
																			<label for="lname">จำนวนสีที่ใช้: หลายสี</label>
																			<?php } ?>
																			<?php if($order[0]->id_color!=''){ ?>
																			<label for="lname">สีที่จะใช้สกรีน: </label><div class="col-6 col-12-xsmall">
																		<div class="img-resize"><span><img src="assets/images/<?php echo $screencolor[0]->color_code; ?>"  alt="" /></span></div>
																		<?php } ?>
                                                                        <br>
                                                                        <!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
                                                                        
                                                                        
																		<?php if($order[0]->id_status==2){ ?>
																		<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">ยังไม่ชำระ</span></label><br>
																		<label for="lname">สถานะการชำระเงินคงเหลือ: <?php  echo number_format($order[0]->order_price,2) ?> บาท </label><br>
																		<?php }else if($order[0]->id_status==1){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">กำลังประเมินราคา</span></label><br>
																			 
																			 
																		<?php }else if($order[0]->id_status==4&&$purchase[0]->id_statuspayment==2){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">ชำระเต็มจำนวนไม่ครบ</span></label><br>
																			<label for="lname">สถานะการชำระเงินคงเหลือ: <?php echo number_format($order[0]->order_price-$purchase[0]->payment_paid,2) ?> บาท </label><br>
																			<?php }else if($order[0]->id_status==4&&$purchase[0]->id_statuspayment==1){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">ชำระมัดจำไม่ครบ</span></label><br>
																			<label for="lname">สถานะการชำระเงินคงเหลือ: <?php echo number_format(($order[0]->order_price*40/100)-$purchase[0]->payment_paid,2) ?> บาท </label><br>
																		 
																			<?php }else if($order[0]->id_status>5&&$order[0]->id_status<8){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:green">ชำระมัดจำแล้ว</span></label><br>
																			<?php }else if($order[0]->id_status==8){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">รอชำระส่วนที่เหลือจากมัดจำ</span></label><br>
																			<label for="lname">สถานะการชำระเงินคงเหลือ: <?php echo number_format($purchase[0]->payment_arrears,2) ?> บาท </label><br>
																			<?php }else if($order[0]->id_status>=10&&$order[0]->id_status<=11){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:red">รอชำระส่วนที่เหลือจากมัดจำไม่ครบ</span></label><br>
																			<label for="lname">สถานะการชำระเงินคงเหลือ: <?php echo number_format(($order[0]->order_price*40/100)-$purchase[0]->payment_paid,2) ?> บาท </label><br>
																			<?php }else if($order[0]->id_status>=12){ ?>
																			<label for="lname">สถานะการชำระเงินมัดจำ: <span style="color:green">ชำระเสร็จสิ้น</span></label><br>
																			<?php } ?>
                                                                         
																		<?php foreach($transport as $key => $trans){ if($trans->id_tramsport==$order[0]->id_post){ ?>
                                                                        <label for="lname">บริการขนส่งโดย: <?php echo $trans->transport_name ?></label><br>
																		<?php }} ?>
                                                                        <label for="lname">หมายเลขรหัสพัสดุ: <?php echo $order[0]->postcode ?></label><br>
                                                                    </form>
                                                                </div> 

                                                                


															</div>
															
															
															<div class="col-12 col-12-small">
																<button type="button" onclick="history.back()" style="float: left;" class="button primary" value="ยกเลิก">ยกเลิก</button>
																<?php if($order[0]->id_status>=5){ ?>
																		 
																		<?php }else{ ?>
																			 
																			<form method="POST" action="{{ route('purchase') }}">
																				<input type="hidden" name="id" value="<?php echo $order[0]->id_order ?>">
																				{!! csrf_field() !!}
																				<button type="submit" style="margin-left: 10px;" class="button secondary">
																					<span class=" ">ชำระเงิน</span>
																				</button>
																			</form>
																			<?php } ?>
																 
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

			

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
	</body>
</html>