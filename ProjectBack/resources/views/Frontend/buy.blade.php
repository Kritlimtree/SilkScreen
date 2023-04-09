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
		 
		if($_FILES['logofile']['name'] != "" ){
			 
			$logo = $_FILES['logofile'];
			$dir = "assets/images/";
			$logo = $dir . basename($_FILES['logofile']['name']);
			move_uploaded_file($_FILES['logofile']['tmp_name'],$logo);
			$awd = '';
			$_SESSION["screenPicture"]=$_FILES['logofile']['name'];
		}else{
			$awd = explode(",", $_POST['oldimage']);
			$_SESSION["screenPicture"]= $awd[0];
			
			
		}
		if($_POST){
			 
			 
			 
			foreach($_POST['demo-priority1'] as $value => $demo){
	 			
			$option[] = explode(",", $demo);
			 }
 
			foreach($option as $value => $op){
				$color[] = $op[0];
			$color_name[] = $op[1];
			}
			
			$size = $_POST['demo-priority'];
			$number = $_POST['number'];
			 
			$_SESSION["color"]=$color;
			$_SESSION["color_name"]=$color_name;
			 
			$_SESSION["size"]=$size;
			$_SESSION["number"]=$number;
			 
		}
		 
		?>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
 <style>
.input {
 
  width: 4px;
  height: 495px;
 
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
							 
									<form method="post" action="checkorder3.php" enctype="multipart/form-data">
										@csrf
							<!-- Content -->
								<section>
									 

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">
											<div id="boxCenter">
												<div class="displayShirt">												
													<p><strong>ภาพที่จะใช้สกรีน</strong></p>
													<div class="img-resize"><span><img src="assets/images/<?php echo $_SESSION["screenPicture"]; ?>" alt="" /></span></div>
												</div>
											</div>	
										</div>

									 
										
										<div class="col-12 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">

														 
															<!-- <div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div> -->
															<div class="col-12 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		
																		<tbody>
																			<tr>
																				<td>ขนาด<br>(Size)</td>
																				<?php $c = 0 ; foreach($size as $key => $size1) { 
																					foreach($shirtsize as $key => $sh){ if($sh->id_shirtsize==$size1){ ?>
																				<td><?php echo $sh->shirtsize_size ?></td>
																				<input type="hidden" name="size1[]" value="<?php echo $sh->id_shirtsize ?>" />
																				<input type="hidden" name="size2[]" value="<?php echo $sh->shirtsize_size ?>" />
																				<?php }}$c++; } ?>
																				<td></td>
																			</tr>
																		
																			 
																			
																			 
																			
																				
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านบน(นิ้ว)</td>
																				<?php for($i=0;$i<$c;$i++) { ?>
																				<td><input required size="1" type="float" id="demo-name" required name="top[]" min="1" value="1" /></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			 
																			<tr>
																				<td>ระยะห่างของลายแบบกับขอบด้านซ้าย(นิ้ว)</td>
																				<?php for($i=0;$i<$c;$i++) { ?>
																				<td><input required size="1" type="float" id="demo-name" required name="left[]" min="1" value="1" /></td>
																				<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																			<?php  foreach ($option as $value => $o) { ?>
																			<tr>
																			<?php foreach($shirtcolor as $key => $sc){ if($sc->id_shirtcolor==$o[1]){ ?>
																				<td><span class="glyphicon glyphicon-trash"><img style="width:100px" class="img-fluid"  src="assets/images/<?php echo $sc->shirtcolor_picture ?>"></span></td>
																				 
																				<?php }}  ?>
																				<?php foreach($size as $key => $size2) { 
																					foreach($shirtsize as $key => $sh1){ if($sh1->id_shirtsize==$size2){ ?>
																					  
																					<input type="hidden" name="count" value="<?php echo $c ?>" />
																				<td><input required size="1" type="float" id="demo-name" required name="color[]" min="0" value="0" /></td>
																				<?php }}} ?>
																				<td>ตัว</td>
																			</tr>
																			<input type="hidden" name="option[]" value="<?php echo $o[1] ?>" />
																			 <?php } ?>
																		</tbody>
																		<tfoot>
																			<tr>
																				<td>ขนาดภาพกว้าง(นิ้ว)</td>	
																				<?php if($awd == null){ ?>
																				<td><input required size="1" type="float" id="demo-name" required name="wide" max="11.69" min="1" value="1" /></td>	
																				<?php }else{ ?>
																					<td><label for="fname"><?php echo number_format($order[0]->orderdetail_wide,2); ?></label></td>
																					<input type="hidden" id="demo-name" name="wide" max="11.69" min="1" value="<?php echo $order[0]->orderdetail_wide; ?>" />
                                                                         
																					<?php } ?>
																				<td>นิ้ว</td>					
																			</tr>
																			<tr>
																				<td>ขนาดภาพยาว(นิ้ว)</td>
																				<?php if($awd == null){ ?>
																				<td><input required size="1" type="float" id="demo-name" required name="long" max="16.54" min="1" value="1" /></td>
																				<?php }else{ ?>
																					<td><label for="fname"><?php echo number_format($order[0]->orderdetail_long,2); ?></label></td>
																					<input type="hidden" id="demo-name" name="long" max="11.69" min="1" value="<?php echo $order[0]->orderdetail_long; ?>" />
																						<?php } ?>
																				<td>นิ้ว</td>
																			</tr>
																		</tfoot>
																	 
																	</table>
																	
																	
																	
																	
																	<!-- เอามาไว้ตรงนี้เพราะ ต้องเลือกสี 2 อย่าง ถ้าเลือกเป็นสีเดียวจะขึ้นให้เลือก ถ้า 2 สีจะไม่ขึ้นให้เลือก -->
																	<?php if($number==1){ ?>
																	<div class="col-6 col-12-xsmall">
																		<h3 id="content">สีที่จะใช้สกรีน</h3>
																	</div>
																	 
																	<select required name="screen_color" id="example" style>
												 
												<?php foreach ($screencolor as $key => $screencolor1) { 
													
													?>
                                                    <option value="<?php echo $screencolor1->id_color  ?>" data-icon="<?php echo $screencolor1->color_code  ?>"><?php echo $screencolor1->color_name  ?></option>
													<?php } ?>
                                                </select>
												
																	</div>
																	<?php } ?>
																</div>
															</div>
															<br>
															<div class="col-6 col-12-xsmall">
																		<h3 id="content">กรุณาเลือกบริษัทขนส่ง</h3>
																	</div>
															<select name="transport" id="myval" required>
												<option value="" selected disabled>กรุณาเลือกบริษัทขนส่ง</option>
												<?php foreach ($transport as $key => $trans) { 
													
													?>
                                                    <option value="<?php echo $trans->id_tramsport ?>"><?php echo $trans->transport_name  ?></option>
													<?php }  ?>
                                                </select>
												<br>
												 
															
															
															<div class="col-12 col-12-small">
																<input type="button" onclick="history.back()" class="button primary" value="ยกเลิก"></input>
																<input type="hidden" name="imageName" value="<?php echo $imageName; ?>" />
																<button type="submit" class="button secondary" name="action" value="check">ยืนยันการสั่ง</button>
																
																
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
			<script src="assets/js/custom-selectbox.min.js"></script>
			<script>
    $('#example').IconSelectBox(true); // isImg: boolean 
    $('.example2').IconSelectBox(false); // isImg: boolean 
  </script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
			{{csrf_field()}}
			<script>
				$(document).ready(function (){
					// Create
					$(document).on('click','.createbtn',function (){
					var id = $(this).val();
					$('#createModal').modal('show'); 
					 
				});
			});
		</script>
		<script>
$(document).ready(function() {
    var i=1; 
    $('#add').click(function() {
        i++;
        $('#dynamic_field').append('<div id="row'+i+'"><label" for="member_'+ i +'">Member '+ i +'</label><input type="text" name="member_' + i + '" value=""><button type="button" class="btn_remove" name="remove" id="'+ i +'">X</button></div>')
		var _token=$('input[name="_token"]').val();
				$.ajax({
					url:"{{route('color')}}",
					method:"POST",
					data:{_token:_token},
					success:function(result){
						 
						$('#dynamic_field2').html(result);
					}
				})	
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });
});
 
</script>
 
	</body>
</html> 