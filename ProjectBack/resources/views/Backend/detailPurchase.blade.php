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

										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>

							<section>
								
							<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">จ่ายครั้งที่ <?php echo sizeof($payment)+1 ?> ไม่ถูกต้อง</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{ route('detailpurchase_store') }}" method="POST" enctype="multipart/form-data">
										@csrf
											<label for="size">จำนวนที่ลูกค้าจ่าย:</label>
											<input type="text" id="file_upload" name="price" value=""> 
											<br>
											<input type="hidden" id="id" name="id">
											<input type="hidden" name="st" value="1">
											<input type="hidden" name="id_status" id="id_status" >
												<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
															
										</form>
										</div>
									</div>
									</div>
							
									<div class="features">
									
										<form class="box">
										
                                            <label for="orderid"><?php echo $payment[0]->order_id ?></label><br>
											<!-- <label for="fname">Username: qwerty</label><br> -->
											<!-- <input type="text" id="uname" name="uname" value="admin"><br> -->
											<label for="lname">Name: <?php echo $payment[0]->user_name ?></label><br>
											<!-- <input type="text" id="name" name="name" value="adam"><br> -->
                                            <label for="fname">Lastname: <?php echo $payment[0]->user_fname ?></label><br>
											<!-- <input type="text" id="lname" name="lname" value="smith"><br> -->
											<label for="lname">Address: </label><br>
											<!-- <div class="col-12">
												<textarea name="demo-message" id="addr" placeholder="12 nowhere" rows="6"></textarea>
											</div><br> -->
											<!-- <input type="text" id="addr" name="addr" value="12 nowhere"><br> -->
                                            <label for="fname">phone: <?php echo $payment[0]->user_phone ?></label><br>
                                            <!-- <label for="fname">เลขบัญชี 4 ตัวท้าย: 1234</label><br> -->
                                             
                                            <label for="fname">ราคาเต็ม: <?php echo $payment[0]->order_price ?> บาท</label><br>
                                            <label for="fname">ราคามัดจำ: <?php echo $payment[0]->order_price*40/100 ?> บาท</label><br>
											<?php $c=0; while(true){
												if($c==sizeof($payment)-1){ ?>
                                            <label for="fname">ราคาคงเหลือ: <?php echo $payment[$c]->payment_arrears ?> บาท</label><br>
											<?php break; } $c++; } ?>
										</form>
										</div>
										
									
									
								</section>
								<div class="Center">
									<!-- <h3>ลูกค้าที่สั่งออร์เดอร์ทั้งหมด</h3> -->
									<form method="post" action="{{ route('detailpurchase_store') }}" enctype="multipart/form-data">
										@csrf
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>จ่ายครั้งที่</th>
													<th>มัดจำ/จ่ายเต็ม</th>
													<th>ราคาที่จ่าย(บาท)</th>
													<th>สลีป</th>
													
												</tr>
											</thead>
											 
											<tbody>
												<?php $c=1; foreach($payment as $key => $p){ ?>
												<tr>
													<td><?php echo $c ?></td>
													
													<td><?php echo $p->statuspayment_name ?></td>
													<td><?php echo $p->payment_paid ?></td>
													<?php if($c==sizeof($payment)){ ?>
														<input type="hidden" name="st" value="0">
														<input type="hidden" name="id_status" value="<?php echo $p->id_statuspayment ?>">
														<input type="hidden" name="price" value="<?php echo $p->payment_paid ?>">
													<input type="hidden" name="id" class="button primary" value="<?php echo $p->id_payment  ?>"></input>
													<?php } ?>
														
													
													<td>
													<a target="_blank" href="assets/images/<?php echo $p->payment_slip  ?>"><span><img src="assets/images/<?php echo $p->payment_slip  ?>" width="100px" alt=""></span></a></td>
													

														
													<!-- <td>11/11/65</td>
													<td>bts1111220001</td>
													<td><a href="test1.php" class="button secondary" value="คลิ๊กที่นี่">คลิ๊กที่นี่</a></td> -->
												</tr>
												<?php $c++; } ?>
											</tbody>
											
										</table>
									</div>
									
								</div>

                                <div class="Center3">
                                    <!-- <div class="row col-6 col-6-medium"> -->
										
									 <button type="button" value="<?php echo $p->id_payment  ?>,<?php echo $p->id_statuspayment ?>" id="myBtn1" class="danger createbtn">จำนวนไม่ถูกต้อง</button>  
                                    <input type="submit" class="button secondary" value="จำนวนถูกต้อง"></input>
									
                                      
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
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
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
			 
	 
			<script>
				$(document).ready(function (){
					// Create
					$(document).on('click','.createbtn',function (){
					var id1 = $(this).val();
					var id = id1.split(",");
					$('#id').val(id[0]);
					$('#id_status').val(id[1]);
					$('#createModal').modal('show'); 
					 
				});
				// Edit
				$(document).on('click','.editbtn',function (){
					var id = $(this).val();
					

					$.ajax({
						 
						method: "GET", 
						url: "/managementBlock-edit/"+id,
						
						success: function (response){	
							  
							 $('#edit_id').val(id);
							 $('#block_name_edit').val(response.block[0].block_name);
							 $('#block_wide_edit').val(response.block[0].block_wide);
							 $('#block_long_edit').val(response.block[0].block_long);
							 $('#block_price_edit').val(response.block[0].block_price);
							 
						}
					});
					 $('#editModal').modal('show'); 
				});

				
				// Delete
				$(document).on('click','.deletebtn',function (){
					var id = $(this).val();
					$('#deleteModal').modal('show'); 
					$('#delete_id').val(id); 
				});
			});
			</script>
	</body>
</html>