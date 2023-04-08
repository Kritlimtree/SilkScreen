<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"  />
		<link rel="stylesheet" href="assets/css/print.css"  media="print" />
		<?php 
		@ini_set('display_errors', '0');
			session_start();
			
		?>
		<style>
			input[type="float"],
  .float{
    width: 100px;
  }#mainprint{
	display: none;
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
										<li><a href="{{ route('logout') }}" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
								
								<section id="main">
									<div class="none"  > 
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
													<div class="img-resize"><span><img src="assets/images/<?php echo $order[0]->picture; ?>" alt="" /></span></div>
													<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p> -->
												</div>
											</div>
											
											<div class="col-5 col-12-medium">
											<div class="form-group row align-items-center">
                    <br>
                    <div class="col-lg-8 col-xl-8">
                        <label class="title-label">ตัวอย่างการสกรีน</label>
                        <label class="cabinet center-block">
						<?php  if($order[0]->id_sample != ''){ ?>
                            <figure>
							<a target="_blank" href="assets/images/<?php echo $order[0]->sample_picture;  ?>"><img id="file_logo" src="{{asset('assets/images/'.$order[0]->sample_picture)}}" width="200px" /></a>
                            </figure>
							<?php  } ?>
                            <input type="file" name="sample" id="file_upload" />
                            <input type="file"   id="file_upload_blob" style="display:none;" />
                        </label>
                    </div>
                </div>	
											</div>
											 
											<?php if($order[0]->id_sample != ''&&$order[0]->sample_status == '2'){ ?>
											<div class="col-5 col-12-medium">
												<div class="displayShirt">
												<p><strong>รายละเอียดการแก้ไขตัวอย่าง</strong></p>
													<p><strong><?php echo $order[0]->sample_detail; ?></strong></p>
													
												</div>
											</div>
											<?php } ?>
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
																			<td>ขนาด(Size)</td>
																				<?php   $c=0; foreach($order as $key => $od){
																					if($c<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo $od->shirtsize_size ?></td>
																				<?php $size[$c]=$od->id_shirtprice; $quantity[$c]=0; $price[$c]=0; $c++;}  } ?>
																				<td></td>
																			</tr>
																			
																			<tr>
																			<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																			<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_upper,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																				<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_lower,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_left,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_right,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<?php  $c1=0; $c3=0; for($i=0;$i<count($order)/$order[0]->numshirtcolor;$i++){    ?>
																			<tr>
																			<?php  foreach($order as $key => $od){ if($c1%($order[0]->numshirtcolor)==0){ ?>
																				<td><span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $order[$c1]->shirtcolor_picture ?>"></span></td>
																				
																				<?php $c1++; break; }$c1++;}  ?>
																				<?php $c2=0; $c4=0; foreach($order as $key => $od){  if($c3<(($i+1)*$order[0]->numshirtcolor)){ ?>
																					<td><?php echo $order[$c3]->quantity ?></td>
																					 
																				<?php $quantity[$c4]=$quantity[$c4]+$order[$c3]->quantity; 
																						$price[$c4] = $price[$c4]+$order[$c3]->orderdetail_price;
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
																			<tr>
																				<td>ราคาค่าบล๋อค(บาท)</td>
																				 
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->blockprice,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาค่าส่ง(บาท)</td>
																				 
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->delivery_price,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<?php if($order[0]->orderdetail_price == ''){ ?>
																			<tr>
																				<td>ราคาที่ประเมินต่อตัว</td>
																				<?php $c1=0; foreach($order as $key => $price){ if($c1<($order[0]->numshirtcolor)){?>
																				<?php if($price->orderdetail_price == ''){ ?>
																				<td><input size="1" type="float" name="appraise[]" value=""></input></td>
																				<input type="hidden" name="shirt[]" value="<?php echo $order[$c1]->id_shirtprice; ?>"/>
																				<?php } ?>
																					
																				<?php $c1++;}} ?>
																				<td>บาท</td>
																			</tr>
																			<?php } ?>
																			<?php if($order[0]->order_price!=null){ ?>
																			<td>ราคารวมต่อตัว(บาท)</td>
																				<?php $c1=0; foreach($order as $key => $num){ if($c1<($order[0]->numshirtcolor)){?>
																					<td><?php echo number_format($order[$c1]->orderdetail_price,2) ?></td>
																				<?php $c1++;} } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคารวมต่อไซส์(บาท)</td>
																				<?php $c1=0; foreach($order as $key => $num){ if($c1<($order[0]->numshirtcolor)){?>
																					<td><?php echo number_format($order[$c1]->orderdetail_price*$quantity[$c1],2) ?></td>
																				<?php $c1++;} } ?>
																				<td>บาท</td>
																			</tr>

																			<tr> 
																				<td>ราคารวม(บาท)</td>
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->order_price,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<?php } ?>
																			
																			</tr>
																		</tbody>
																	<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->orderdetail_wide) ?></td>	
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				 
																				<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->orderdetail_long) ?></td>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
																	</table>
																	
																	<p style="page-break-after:always;"></p>
																</div>
															</div>

												 
												<div class="row gtr-200">
													<div class="col-5 col-12-medium">
														
														<div class="boxOrder">
															<h2>ข้อมูลลูกค้า</h2>
																<label for="fname">ชื่อลูกค้า: <?php echo $order[0]->user_name; ?></label>
																<label for="fname">นามสกุลลูกค้า: <?php echo $order[0]->user_fname; ?></label>
																<label for="fname">ที่อยู่: <?php echo $order[0]->user_address; ?> 
																ตำบล <?php echo $order[0]->district_name_th; ?> 
																อำเภอ <?php echo $order[0]->amphure_name_th; ?> 
																จังหวัด <?php echo $order[0]->province_name_th; ?> 
																รหัสไปรษณีย์ <?php echo $order[0]->zip_code; ?></label>
																<label for="fname">เบอร์โทร: <?php echo $order[0]->user_phone; ?></label>
																<label for="fname">บริการขนส่งโดย: <?php echo $order[0]->transport_name; ?></label>
																<?php if($order[0]->status_payment==0){ ?>
																<label for="fname">การชำระเงิน: <span style="color:red">ยังไม่เสร็จสิ้น</span></label>
																<?php }else if($order[0]->status_payment==1){ ?>
																	<label for="fname">การชำระเงิน: <span style="color:green">เสร็จสิ้น</span></label>
																<?php }else if($order[0]->status_payment==2){ 
																	$pay = 0 ;
																	foreach($order as $key => $payment){
																		$pay = $payment->payment_paid+$pay;
																	} ?>
																	<label for="fname">การชำระเงิน: <span style="color:green"><?php echo $pay-$order[0]->order_price; ?></span></label>
																<?php } ?>
														</div>
													</div>
															
													<div class="col-5 col-12-medium">
														<div class="boxOrder">
														<label >สถานะออเดอร์:</label>
														<select name="option" id="8">
														<?php foreach($status as $key => $s){ 
															if($s->id_status==$order[0]->id_status){ ?>
															<option selected value="<?php echo $s->id_status; ?>"><?php echo $s->status_name; ?></option>
															<?php }else{?>
																<option value="<?php echo $s->id_status; ?>"><?php echo $s->status_name; ?></option>
															<?php }} ?>
														</select>
														<label for="lname">หมายเลขรหัสพัสดุ: -</label>
														<?php if($order[0]->postcode == ''){ ?>
														 
														<input type="text" name="serial" ></input>
														<?php }else{ ?>
															<label for="fname"><?php echo $order[0]->postcode; ?></label>
															<?php } ?>
														<br>
														<?php foreach($order as $key => $idorder){ ?>
															<input type="hidden" name="idorder[]" value="<?php echo $idorder->id_orderdetail; ?>"/>
															<?php } ?>
															<input type="hidden" name="blockprice" value="<?php echo $order[0]->blockprice; ?>"/>
															<input type="hidden" name="delivery" value="<?php echo $order[0]->delivery_price; ?>"/>
														<input type="hidden" name="id" value="<?php echo $order[0]->id_order; ?>"/>
														<input type="hidden" name="type" value="<?php echo $order[0]->order_type; ?>"/>
														
														</div><p style="page-break-after:always;"></p>
														<a href="order.html" id="cancle-btn" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
														<button type="submit" class="button secondary" id="enter-btn" name="action" value="check">บันทึก</button>
														<button type="button" class="button secondary" id="print-btn" onclick="printPageArea('mainprint')" >Print</button>
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
<section id="mainprint">
									<div class="none"  > 
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
													<div class="img-resize"><span><img src="assets/images/<?php echo $order[0]->picture; ?>" alt="" /></span></div>
													<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p> -->
												</div>
											</div>
											
											<div class="col-5 col-12-medium">
											<div class="form-group row align-items-center">
                    <br>
                    <div class="col-lg-8 col-xl-8">
                        <label class="title-label">ตัวอย่างการสกรีน</label>
                        <label class="cabinet center-block">
						<?php  if($order[0]->id_sample != ''){ ?>
                            <figure>
							<a target="_blank" href="assets/images/<?php echo $order[0]->sample_picture;  ?>"><img id="file_logo" src="{{asset('assets/images/'.$order[0]->sample_picture)}}" width="200px" /></a>
                            </figure>
							<?php  } ?>
                            <input type="file" name="sample" id="file_upload" />
                            <input type="file"   id="file_upload_blob" style="display:none;" />
                        </label>
                    </div>
                </div>	
											</div>
											 
											<?php if($order[0]->id_sample != ''&&$order[0]->sample_status == '2'){ ?>
											<div class="col-5 col-12-medium">
												<div class="displayShirt">
												<p><strong>รายละเอียดการแก้ไขตัวอย่าง</strong></p>
													<p><strong><?php echo $order[0]->sample_detail; ?></strong></p>
													
												</div>
											</div>
											<?php } ?>
										</div>
										<div class="row gtr-200">
													<div class="col-5 col-12-medium">
														
														<div class="boxOrder">
															<h2>ข้อมูลลูกค้า</h2>
																<label for="fname">ชื่อลูกค้า: <?php echo $order[0]->user_name; ?></label>
																<label for="fname">นามสกุลลูกค้า: <?php echo $order[0]->user_fname; ?></label>
																<label for="fname">ที่อยู่: <?php echo $order[0]->user_address; ?> 
																ตำบล <?php echo $order[0]->district_name_th; ?> 
																อำเภอ <?php echo $order[0]->amphure_name_th; ?> 
																จังหวัด <?php echo $order[0]->province_name_th; ?> 
																รหัสไปรษณีย์ <?php echo $order[0]->zip_code; ?></label>
																<label for="fname">เบอร์โทร: <?php echo $order[0]->user_phone; ?></label>
																<label for="fname">บริการขนส่งโดย: <?php echo $order[0]->transport_name; ?></label>
																<?php if($order[0]->status_payment==0){ ?>
																<label for="fname">การชำระเงิน: <span style="color:red">ยังไม่เสร็จสิ้น</span></label>
																<?php }else if($order[0]->status_payment==1){ ?>
																	<label for="fname">การชำระเงิน: <span style="color:green">เสร็จสิ้น</span></label>
																<?php }else if($order[0]->status_payment==2){ 
																	$pay = 0 ;
																	foreach($order as $key => $payment){
																		$pay = $payment->payment_paid+$pay;
																	} ?>
																	<label for="fname">การชำระเงิน: <span style="color:green"><?php echo $pay-$order[0]->order_price; ?></span></label>
																<?php } ?>
														</div>
													</div>
															
													<div class="col-5 col-12-medium">
														<div class="boxOrder">
														<label >สถานะออเดอร์:</label>
														<select name="option" id="8">
														<?php foreach($status as $key => $s){ 
															if($s->id_status==$order[0]->id_status){ ?>
															<option selected value="<?php echo $s->id_status; ?>"><?php echo $s->status_name; ?></option>
															<?php }else{?>
																<option value="<?php echo $s->id_status; ?>"><?php echo $s->status_name; ?></option>
															<?php }} ?>
														</select>
														<label for="lname">หมายเลขรหัสพัสดุ: -</label>
														<?php if($order[0]->postcode == ''){ ?>
														 
														<input type="text" name="serial" ></input>
														<?php }else{ ?>
															<label for="fname"><?php echo $order[0]->postcode; ?></label>
															<?php } ?>
														<br>
														<?php foreach($order as $key => $idorder){ ?>
															<input type="hidden" name="idorder[]" value="<?php echo $idorder->id_orderdetail; ?>"/>
															<?php } ?>
															<input type="hidden" name="blockprice" value="<?php echo $order[0]->blockprice; ?>"/>
															<input type="hidden" name="delivery" value="<?php echo $order[0]->delivery_price; ?>"/>
														<input type="hidden" name="id" value="<?php echo $order[0]->id_order; ?>"/>
														<input type="hidden" name="type" value="<?php echo $order[0]->order_type; ?>"/>
														
														</div><p style="page-break-after:always;"></p>
														<a href="order.html" id="cancle-btn" onclick="return confirm('คุณต้องการยกเลิกออเดอร์นี้')" class="button primary">ยกเลิก</a>
														<button type="submit" class="button secondary" id="enter-btn" name="action" value="check">บันทึก</button>
														<button type="button" class="button secondary" id="print-btn" onclick="printPageArea('mainprint')" >Print</button>
														</div>
													 

													 
															<div class="row gtr-uniform">
																
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
																			<td>ขนาด(Size)</td>
																				<?php   $c=0; foreach($order as $key => $od){
																					if($c<($order[0]->numshirtcolor)){ ?>
																				<td><?php echo $od->shirtsize_size ?></td>
																				<?php $size[$c]=$od->id_shirtprice; $quantity[$c]=0; $price[$c]=0; $c++;}  } ?>
																				<td></td>
																			</tr>
																			
																			<tr>
																			<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																			<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_upper,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																				<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านล่าง(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_lower,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_left,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านขวา(นิ้ว)</td>
																				<?php   $c1=0; foreach($order as $key => $od){
																					if($c1<($order[0]->numshirtcolor)){ ?>
																					<td><?php echo number_format($od->orderdetail_right,2) ?></td>
																					<?php }$c1++;} ?>
																				<td>นิ้ว</td>
																			</tr>
																			<?php  $c1=0; $c3=0; for($i=0;$i<count($order)/$order[0]->numshirtcolor;$i++){    ?>
																			<tr>
																			<?php  foreach($order as $key => $od){ if($c1%($order[0]->numshirtcolor)==0){ ?>
																				<td><span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $order[$c1]->shirtcolor_picture ?>"></span></td>
																				
																				<?php $c1++; break; }$c1++;}  ?>
																				<?php $c2=0; $c4=0; foreach($order as $key => $od){  if($c3<(($i+1)*$order[0]->numshirtcolor)){ ?>
																					<td><?php echo $order[$c3]->quantity ?></td>
																					 
																				<?php $quantity[$c4]=$quantity[$c4]+$order[$c3]->quantity; 
																						$price[$c4] = $price[$c4]+$order[$c3]->orderdetail_price;
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
																			<tr>
																				<td>ราคาค่าบล๋อค(บาท)</td>
																				 
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->blockprice,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคาค่าส่ง(บาท)</td>
																				 
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->delivery_price,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<?php if($order[0]->orderdetail_price == ''){ ?>
																			<tr>
																				<td>ราคาที่ประเมิน(จำนวนตัว/ไซส์)</td>
																				<?php $c1=0; foreach($order as $key => $price){ if($c1<($order[0]->numshirtcolor)){?>
																				<?php if($price->orderdetail_price == ''){ ?>
																				<td><input size="1" type="float" name="appraise[]" value=""></input></td>
																				<input type="hidden" name="shirt[]" value="<?php echo $order[$c1]->id_shirtprice; ?>"/>
																				<?php } ?>
																					
																				<?php $c1++;}} ?>
																				<td>บาท</td>
																			</tr>
																			<?php } ?>
																			<?php if($order[0]->order_price!=null){ ?>
																				<tr>
																			<td>ราคารวมต่อตัว(บาท)</td>
																				<?php $c1=0; foreach($order as $key => $num){ if($c1<($order[0]->numshirtcolor)){?>
																					<td><?php echo number_format($order[$c1]->orderdetail_price,2) ?></td>
																				<?php $c1++;} } ?>
																				<td>บาท</td>
																			</tr>
																			<tr>
																				<td>ราคารวมต่อไซส์(บาท)</td>
																				<?php $c1=0; foreach($order as $key => $num){ if($c1<($order[0]->numshirtcolor)){?>
																					<td><?php echo number_format($order[$c1]->orderdetail_price*$quantity[$c1],2) ?></td>
																				<?php $c1++;} } ?>
																				<td>บาท</td>
																			</tr>

																			<tr> 
																				<td>ราคารวม(บาท)</td>
																					<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->order_price,2) ?></td>
																					<td>บาท</td>
																			</tr>
																			<?php } ?>
																			
																			</tr>
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->orderdetail_wide) ?></td>	
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				 
																				<td colspan="<?php echo $c ?>"><?php echo number_format($order[0]->orderdetail_long) ?></td>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
																	</table>
																	 
																	<p style="page-break-after:always;"></p>
																</div>
															</div>

												 
												 
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
									<li><a href="indexLoginIsTrue">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="/user">ข้อมูลลูกค้า</a></li>
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
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}</script>

	</body>
</html>