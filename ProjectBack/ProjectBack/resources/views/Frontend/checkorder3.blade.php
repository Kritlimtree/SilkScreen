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
			if($_SESSION["number"]==1){
			$screen_color = $_POST['screen_color'];
			 
			
			}else{
				$screen_color = '';
			
			}
			$transport = $_POST['transport'];
			$w = $_POST['top'];
			
			
			$a = $_POST['left'];
			$count = 0;
			foreach($quantity as $value){
				$weight[] = $quantity[$count]*0.2;
				$count++;
			}

			foreach($data1 as $key => $data){
				$weightunit[] = $data;
				 
			}
			
			$count = 0;
			foreach($w as $value){
				foreach($shirtsize as $key => $size){
				if($size->shirtsize_size == $_SESSION["size"][$count]){
					$s[$count] = $size->shirtsize_long - $w[$count];
					$d[$count] = $size->shirtsize_chest - $a[$count];
					$size_price[$count] = $size->shirtsize_price;
					$size_id[$count] = $size->id_shirtsize;
				}
				
			}
			$count++;
			}
			
			$wide = $_POST['wide'];
			$long = $_POST['long'];
			foreach($block as $key => $b){
				if($b->block_wide >= $wide){
					if($b->block_long >= $long){
						$blockprice = $b->block_price;
						break;
					}
				}
			}
			$sum = 0;
			for($i=0;$i<$count;$i++){
			$price[$i] = ($quantity[$i]*$size_price[$i])+$blockprice;
			$unitprice[$i] = $size_price[$i];
			  
			 
		}
		 
		$weightprice[]=0;
		$c = 0;
		$count = 0;
		foreach($unitprice as $key => $up){
			foreach($weightunit as $key => $wu){
				foreach($weight as $key => $we){
					 
					if($wu->min < $we && $wu->max >= $we){
						$weightprice[$c] = $price[$c]+$wu->price;
						$wpu[$c] = $wu->price;
					}
				}
			$count++;
			}
			$sum = $weightprice[$c]+$sum;
		$c++;
		} 
		 
			$_SESSION["quantity"]=$quantity;
			$_SESSION["w"]=$w;
			$_SESSION["a"]=$a;
			$_SESSION["s"]=$s;
			$_SESSION["d"]=$d;
			$_SESSION["size_price"]=$size_price;
			$_SESSION["unitprice"]=$unitprice;
			$_SESSION["wide"]=$wide;
			$_SESSION["long"]=$long;
			$_SESSION["price"]=$price;
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
<script type="text/javascript">function toMudjum(){
    document.getElementById("weight").innerHTML = deposit;
}
function toFull(){
    document.getElementById("weight").innerHTML = price;
}</script>
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
										@csrf
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
													<div class="img-resize"><span><img src="assets/images/<?php echo $_SESSION["screenPicture"]; ?>"  alt="" /></span></div>
												</div>
											</div>	
										</div>

                                        <div class="col-6 col-12-medium">
                                            <div id="boxCenter">		
                                                <div class="displayShirt">
                                                    <p><strong>เสื้อยืดที่เลือก</strong></p>
                                                        <div class="img-resize"><span><img src="assets/images/<?php echo $_SESSION["color"]; ?>"  alt="" /></span></div><br>
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
																				<?php $c = 0 ; foreach($_SESSION["size"] as $key => $size) { ?>
																				<td><?php echo $size ?></td>
																				<?php $c++; } ?>
																				<td></td>
																			</tr>
																		
																			
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<?php foreach($w as $key => $w1) { ?>
																				<td><?php echo number_format($w1,2); ?></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<?php foreach($s as $key => $s1) { ?>
																				<td><?php echo number_format($s1,2); ?></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																				
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php foreach($a as $key => $a1) { ?>
																				<td><?php echo number_format($a1,2); ?></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<?php foreach($d as $key => $d1) { ?>
																				<td><?php echo number_format($d1,2); ?></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			<?php if($_SESSION["number"]==1) { ?>
																			<tr>
																				<td>จำนวน(ตัว)</td>
																				<?php foreach($quantity as $key => $q) { ?>
																				<td><?php echo $q; ?></td>
																				<?php } ?>
																				<td>ตัว</td>
																			</tr>
																			<tr>
																				<td>ราคาต่อหน่วย(บาท)</td>
																				<?php foreach($unitprice as $key => $unit) { ?>
																				<td><?php echo number_format($unit,2); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาบล็อคพิมพ์(บาท)</td>
																				<?php foreach($unitprice as $key => $unit) { ?>
																				<td><?php echo number_format($blockprice,2); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาค่าส่ง(บาท)</td>
																				<?php foreach($wpu as $key => $wpu1) { ?>
																				<td><?php echo number_format($wpu1,2); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคารวม(บาท)</td>
																				<?php foreach($weightprice as $key => $p) { ?>
																				<td><?php echo number_format($p,2); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td colspan="<?php echo $c; ?>">ราคาสุทธิ(บาท)</td>
																				<td><?php echo number_format($sum,2); ?></td>
																				<td>บาท</td>
																			</tr>
																			<?php } ?>
																			
																		</tbody>
																	
																	</table>
																</div>

                                                                <div class="col-6 col-12-medium">

                                                                    <form class="box2" style="background-color: rgb(179, 171, 171);">
																	<?php if($_SESSION["number"]==1){ ?>
                                                                        <label for="lname">จำนวนสีที่ใช้: 1 สี</label>
																		<?php }else{ ?>
																			<label for="lname">จำนวนสีที่ใช้: หลายสี</label>
																			<?php } ?>
																		<?php if($_SESSION["number"]==1){ 
																			 ?>
                                                                        <label for="lname">สีที่จะใช้สกรีน: </label><div class="col-6 col-12-xsmall">
																			 
                                                                            <div class="boxCenter" style="background-color: <?php echo $screen_color ?>";></div>
																			<input type="hidden" name="sum" value="<?php echo $sum; ?>"/>
                                                                        </div>
																		<?php } ?>
                                                                        <br>
                                                                        <!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
																		
																		<label for="fname">ขนส่งโดย: </label>
                                                                        <label for="fname">ขนาดภาพกว้าง(นิ้ว): <?php echo number_format($_SESSION["wide"],2); ?></label>
                                                                        <label for="fname">ขนาดภาพยาว(นิ้ว): <?php echo number_format($_SESSION["long"],2); ?></label>
                                                                        <div class="col-6 col-12-xsmall">
																		<h3 id="content">บริษัทขนส่ง</h3>
																	</div>
																	<input type="hidden" name="transport" value="<?php echo $_SESSION["number"]; ?>"/>					
												<input type="hidden" name="number" value="<?php echo $_SESSION["number"]; ?>"/>
                                                                         <?php $i = 0; foreach($size_id as $key => $size){ ?>
                                                                        <!-- <a href="purchase.html" class="button secondary">ชำระเงินคงเหลือ</a> -->
                                                                        <input type="hidden" name="w[]" value="<?php echo $w[$i]; ?>"/>
																		<input type="hidden" name="a[]" value="<?php echo $a[$i]; ?>"/>
																		<input type="hidden" name="s[]" value="<?php echo $s[$i]; ?>"/>
																		<input type="hidden" name="d[]" value="<?php echo $d[$i]; ?>"/>
																		<input type="hidden" name="wide[]" value="<?php echo $_SESSION["long"]; ?>"/>
																		<input type="hidden" name="long[]" value="<?php echo $_SESSION["wide"]; ?>"/>
																		<input type="hidden" name="screenPicture[]" value="<?php echo $_SESSION["screenPicture"]; ?>"/>
																		
																		<input type="hidden" name="color[]" value="<?php echo $_SESSION["color"]; ?>"/>
																		<input type="hidden" name="screencolor[]" value="<?php echo $screen_color; ?>"/>
																		<input type="hidden" name="colorname[]" value="<?php echo $_SESSION["color_name"]; ?>"/>
																		<input type="hidden" name="size_id[]" value="<?php echo $size; ?>"/>
																		<input type="hidden" name="quantity[]" value="<?php echo $quantity[$i]; ?>"/>
																		<input type="hidden" name="blockprice" value="<?php echo $blockprice; ?>"/>
																		<input type="hidden" name="wpu[]" value="<?php echo $wpu[$i]; ?>"/>
																		<input type="hidden" name="unitprice[]" value="<?php echo $unitprice[$i]; ?>"/>
																		<input type="hidden" name="price[]" value="<?php echo $price[$i]; ?>"/>
																		<?php $i++; } ?>
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
			<script>
				$(document).ready(function (){
				$(document).on('change','.weight',function (){
					var id = $(this).val();
					

					$.ajax({
						 
						method: "GET", 
						url: "/managementColorTshirt-edit/"+id,
						
						success: function (response){	
							  
							 $('#edit_id').val(id);
							 $('#shirtcolor_name_edit').val(response.shirtcolor[0].shirtcolor_name);
							 $('#shirtcolor_picture_edit').val(response.shirtcolor[0].shirtcolor_picture);
							 
						}
					});
					 $('#editModal').modal('show'); 
				});
			});
			</script>
	</body>
</html>