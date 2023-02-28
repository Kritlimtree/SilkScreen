<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php 
		@ini_set('display_errors', '0');
			session_start();
			$logo = $_SESSION["screenPicture"];
		?>
		<style>
			input[type="float"],
  .float{
    width: 100px;
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
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
								
								<section>
									<form method="post" action="{{ route('orderadmin_edit') }}" enctype="multipart/form-data">
										@csrf
									<!-- Elements -->
										<!-- <h2 id="elements">Elements</h2> -->
										<div class="row gtr-200">
											<div class="col-5 col-12-medium">
												<div class="displayShirt">
													<!-- <div class="col-8 col-12-small">
														<p>รูปที่จะใช้สกรีน</p>
													</div> -->
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="assets/images/<?php echo $order[0]->orderdetail_picture; ?>" alt="" /></span></div>
													<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p> -->
												</div>
											</div>
											<div class="col-5 col-12-medium">
												<div class="displayShirt">
													<p><strong>เสื้อยืดที่เลือก</strong></p>
													<div class="img-resize"><span><img src="assets/images/<?php echo $order[0]->shirtcolor_picture; ?>" alt="" /></span></div><br>
												</div>
											</div>
											<div class="col-5 col-12-medium">
												<div class="displayShirt">
													<div id="boxCenter">
														<p><strong>ตัวอย่างการสกรีน</strong></p>
															<div id="display_image"></div><br>
												<!-- <span>*กรุณาเลือกลายรูป*</span><br><br> -->
															
																<input type="file" id="image_input" name="sample" accept="image/png, image/jpeg">
																 
													</div>
												</div>
											</div>
										</div>
										
											<div class="col-6 col-12-medium">

												<div class="col-12 col-12-small">
													<h4>ประเมินราคาเสื้อยืด</h4>
												</div>
															<div class="col-10 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		
																			<tbody>
																			<tr>
																				<td>ขนาด</th>
																				<?php foreach($order as $key => $size){ ?>
																				<td><?php echo $size->shirtsize_size ?></td>
																				<?php } ?>
																			</tr>
																			
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<?php foreach($order as $key => $up){ ?>
																					<td><?php echo $up->orderdetail_upper ?></td>
																				<?php } ?>
																			</tr>
																				<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<?php foreach($order as $key => $down){ ?>
																					<td><?php echo $down->orderdetail_lower ?></td>
																				<?php } ?>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php foreach($order as $key => $left){ ?>
																					<td><?php echo $left->orderdetail_left ?></td>
																				<?php } ?>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<?php foreach($order as $key => $right){ ?>
																					<td><?php echo $right->orderdetail_right ?></td>
																				<?php } ?>
																			</tr>
																			<tr>
																				<td>จำนวน(ตัว)</td>
																				<?php foreach($order as $key => $num){ ?>
																					<td><?php echo $num->quantity ?></td>
																				<?php } ?>
																			</tr>
																			<tr>
																				<td>ราคาที่ประเมิน(จำนวนตัว/ไซส์)</td>
																				<?php foreach($order as $key => $price){ ?>
																				<?php if($price->order_type == 2){ ?>
																				<td><input type="float" name="appraise[]" value=""></input></td>
																				<?php }else{ ?>
																					<td><?php echo $price->orderdetail_price ?></td>
																				<?php } ?>
																				<?php } ?>
																			</tr>
																		</tbody>
																	
																	</table>
																</div>
															</div>

												<div class="boxOrder">
												<label for="fname">ขนาดภาพกว้าง (นิ้ว): <?php echo $order[0]->orderdetail_long; ?></label>
													
													<label for="fname">ขนาดภาพยาว (นิ้ว): <?php echo $order[0]->orderdetail_wide; ?></label>
													</div>
												<div class="row gtr-200">
													<div class="col-5 col-12-medium">
														
														<div class="boxOrder">
														<h2>ข้อมูลลูกค้า</h2>
														<label for="fname">ชื่อลูกค้า: <?php echo $order[0]->user_name; ?></label>
															<label for="fname">นามสกุลลูกค้า: <?php echo $order[0]->user_fname; ?></label>
															<label for="fname">ที่อยู่: <?php echo $order[0]->user_address; ?></label>
															<label for="fname">เบอร์โทร: <?php echo $order[0]->user_phone; ?></label>
															</div>
													</div>
															
													<div class="col-5 col-12-medium">
														<div class="boxOrder">
														<label >สถานะออเดอร์:</label>
														<select name="option" id="8">
														<?php foreach($status as $key => $s){ ?>
															<option value="<?php echo $s->id_status; ?>"><?php echo $s->status_name; ?></option>
															<?php } ?>
														</select>
														<label for="lname">บริการขนส่งโดย: -</label>
														<select name="tp">
														<?php foreach($transport as $key => $trans){ ?>
															<option value="<?php echo $trans->id_tramsport; ?>"><?php echo $trans->transport_name; ?></option>
															<?php } ?>
														</select>
														<label for="lname">หมายเลขรหัสพัสดุ: -</label>
														<input type="text" name="serial" ></input>
														<br>
														<?php foreach($order as $key => $idorder){ ?>
															<input type="hidden" name="idorder[]" value="<?php echo $idorder->id_orderdetail; ?>"/>
															<?php } ?>
														<input type="hidden" name="id" value="<?php echo $order[0]->id_order; ?>"/>
														<input type="hidden" name="type" value="<?php echo $order[0]->order_type; ?>"/>
														<a href="order.html" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
														<button type="submit" class="button secondary" name="action" value="check">บันทึก</input>
														</div>
													</form>

														<form method="post" action="#">
															<div class="row gtr-uniform">
																
															</div>
													</div>
												</div>
											</div>
										

								</section>
</form>
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
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
									<li><a href="purchase.php">การชำระเงิน</a></li>
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
			<script src="assets/js/main.js"></script>

	</body>
</html>