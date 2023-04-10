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
			 
			 
			if($_SESSION["number"]==1){
			$screen_color = $_POST['screen_color'];
			
			  
			
			}else{
				$screen_color = '';
			
			}
			
			$option[] = $_POST['option'];
			$c2=0;
		    $quantity[$c2] = 0;
		 
		   foreach($_POST['color'] as $key){
			
			   $screen_color1[] = array($_POST['size1'][$c2%$_POST['count']],$_POST['color'][$c2]);
			   $quantity[$c2%$_POST['count']] = 0;
				
			   $c2++; 
		   }$c2=0;
		    
		   foreach($_POST['color'] as $key){
			   $quantity[$c2%$_POST['count']] = $quantity[$c2%$_POST['count']]+$screen_color1[$c2][1];
			   $c2++; 
			}
			for($i=0;$i<count($_SESSION["color_name"]);$i++){
			$c2=0+($i*$_POST['count']);
			foreach($screen_color1 as $value ){
			   if($c2<count($screen_color1)){
			   $screen_color1[$c2][2] = $_SESSION["color_name"][$i];
			   $c2++; 
			   }
			}
		   }
		 
 
			$transport = $_POST['transport'];
			$w = $_POST['top'];
			
			
			$a = $_POST['left'];
			$count = 0;
			$weight = 0;
			foreach($quantity as $value){
				$weight = $weight+$quantity[$count]*0.2;
				$count++;
			}
			 
			foreach($data1 as $key => $data){
				$weightunit[] = $data;
				 
			}
			 
			$count = 0;
			foreach($w as $value){
				foreach($shirtsize as $key => $size){
					$x=0;
					foreach($_SESSION["size"] as $value){
				if($size->id_shirtsize == $_SESSION["size"][$x]){
					$s[$count] = $size->shirtsize_long - $w[$count];
					$d[$count] = $size->shirtsize_chest - $a[$count];
					$size_price[$count] = $size->shirtsize_price;
					$size_id[$count] = $size->id_shirtsize;
				}
				$x++;
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
				$unit[$i] = $size_price[$i];
			$unitprice[$i] = $size_price[$i]*$quantity[$i];
		}
		for($i=0;$i<count($screen_color1);$i++){
			$price[$i] = ($screen_color1[$i][1]*$size_price[$i%$_POST['count']]);
		}
		 
		$weightprice[]=0;
		$c = 0;
		 
		foreach($price as $key => $up){
			foreach($weightunit as $key => $wu){		
				  
					if($wu->min <= $weight && $wu->max >= $weight){
						 
						$weightprice[$c] = $price[$c];
						$wpu[$c] = $wu->price;
					}
			 
			}
			$sum = $weightprice[$c]+$sum;
		$c++;
		} 
		$sum = $wpu[0]+$sum;
		$c2=0;
		  
			 
			foreach($screen_color1 as $value ){
			   if($c2<count($screen_color1)){
			   $screen_color1[$c2][3] = $price[$c2];
			   $c2++; 
			   }
			}
		  
 
		$sum = $blockprice+$sum;
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
																				<?php $c = 0 ; foreach($_POST["size2"] as $key => $size) { ?>
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
																			 
																			<?php $c3=0;$c2=0; foreach ($_POST['option'] as $value) { $c2=0;?>
																			<tr>
																			<?php foreach($shirtcolor as $key => $sc){ if($sc->id_shirtcolor==$_POST['option'][$c3]){ ?>
																				<td><span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $sc->shirtcolor_picture ?>"></span></td>
																				<?php }}  ?>
																				<?php   $c1=$c3*$_POST['count'];  
																					foreach($screen_color1 as $value) { 
																						if($screen_color1[$c1][0]==$_POST['size1'][$c2]){  ?>
																					 
																					 <td><?php echo $screen_color1[$c1][1] ?></td>
																					 
																				<?php $c2++; 
																				if($c2>=$_POST['count']){
																					break;
																					}
																				}
																				$c1++;}   ?>
																				<td>ตัว</td>
																			</tr>
																			 <?php $c3++; } ?>
																			  
																			 <tr>
																				<td>จำนวนรวม(ตัว)</td>
																			 <?php foreach($quantity as $key => $q1){ ?>
																				
																				 
																				<td><?php echo number_format($q1); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<?php if($_SESSION["number"]==1) { ?>
																			<tr>
																				<td>ราคาต่อหน่วย(บาท)</td>
																				<?php foreach($unit as $key => $unit) { 
																					if($quantity[0]!=0){ ?>
																				<td><?php echo number_format($unit,2); ?></td>
																				<?php }else{ ?>
																					<td><?php echo number_format(0,2); ?></td>
																					<?php }} ?>
																				<td>บาท</td>
																			</tr>
																			 
																			 
																			 
																			<tr>
																				<td>ราคารวมแต่ละไซส์(บาท)</td>
																				<?php foreach($unitprice as $key => $p) { ?>
																				<td><?php echo number_format($p,2); ?></td>
																				<?php } ?>
																				<td>บาท</td>
																			</tr>
																			<?php } ?>
																			<tr>
																				<td>ราคาค่าส่ง(บาท)</td>
																				 
																				<td colspan="<?php echo $c ?>"><?php echo number_format($wpu[0],2); ?></td>
																				 
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาบล็อคพิมพ์(บาท)</td>
																				 
																				<td colspan="<?php echo $c ?>"><?php echo number_format($blockprice,2); ?></td>
																				 
																				<td>บาท</td>
																			</tr>
																			 
																			<?php if($_SESSION["number"]==1) { ?>
																			<tr>
																				<td>ราคาสุทธิ(บาท)</td>
																				<td  colspan="<?php echo $c ?>"><?php echo number_format($sum,2); ?></td>
																				<td>บาท</td>
																			</tr>
																			<?php } ?>
																			 
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td colspan="<?php echo $c ?>"><?php echo number_format($_SESSION["wide"],2); ?></td>	
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				 
																				<td colspan="<?php echo $c ?>"><?php echo number_format($_SESSION["long"],2); ?></td>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
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
																		<div class="img-resize"><span><img src="assets/images/<?php echo $screencolor[0]->color_code; ?>"  alt="" /></span></div>
                                                                             
																			<input type="hidden" name="sum" value="<?php echo $sum; ?>"/>
                                                                        </div>
																		<?php } ?>
                                                                        <br>
                                                                        <!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
																		
																		<label for="fname">ขนส่งโดย: <?php echo $transporter[0]->transport_name ?></label>
                                                                        <label for="fname">ขนาดภาพกว้าง(นิ้ว): <?php echo number_format($_SESSION["wide"],2); ?></label>
                                                                        <label for="fname">ขนาดภาพยาว(นิ้ว): <?php echo number_format($_SESSION["long"],2); ?></label>
                                                                        <div class="col-6 col-12-xsmall">
																		 
																	</div>
																	<input type="hidden" name="transport" value="<?php echo $_POST["transport"]; ?>"/>					
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
																		
																		<input type="hidden" name="screencolor[]" value="<?php echo $screen_color ; ?>"/>
																		<input type="hidden" name="count" value="<?php echo $_POST['count']; ?>"/>
																		<input type="hidden" name="size_id[]" value="<?php echo $size; ?>"/>
																		<input type="hidden" name="quantity[]" value="<?php echo $quantity[$i]; ?>"/>
																		<input type="hidden" name="blockprice" value="<?php echo $blockprice; ?>"/>
																		<input type="hidden" name="wpu[]" value="<?php echo $wpu[$i]; ?>"/>
																		<input type="hidden" name="unitprice[]" value="<?php echo $unitprice[$i]; ?>"/>
																		<input type="hidden" name="price[]" value="<?php echo $price[$i]; ?>"/>
																		<?php $i++; } ?>
																		<?php  $i = 0; foreach($screen_color1 as $value){ ?>
																		<?php   for($j=0;$j<4;$j++){ ?>
																		<input type="hidden" name="screen_color1[<?php echo $i ?>][<?php echo $j ?>]" value="<?php echo $screen_color1[$i][$j]; ?>"/>
																		<?php }$i++;} ?>

																		<?php  $i = 0; foreach($_SESSION["color_name"] as $value){ ?>
																		 
																		<input type="hidden" name="color_name[]" value="<?php echo $_SESSION["color_name"][$i]; ?>"/>
																		<?php  $i++;} ?>
                                                                    </form>
                                                                </div> 

                                                                


															</div>
															
															
															<div class="col-12 col-12-small">
																<input type="button" onclick="history.back()" class="button primary" value="ยกเลิก"></input>
																<input type="hidden" name="imageName" value="<?php echo $_POST['imageName']; ?>" />
																<button type="submit" class="button secondary" name="action" value="check">ยืนยันการสั่งซื้อ</button>
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