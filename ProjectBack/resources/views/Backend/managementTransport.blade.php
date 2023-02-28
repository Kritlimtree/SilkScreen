<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	</head>

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

		</style>

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
							<section id="banner">
								<header>
								</header>
								<div class="Center">
									<div class="row-cols-3">
                                        <div class="col-6 col-12-medium">
                                            <h3>จัดการค่าขนส่ง</h3>
                                        </div>
                                        <div class="col-6 col-12-medium ">
										<form action="{{ route('managementTransport_search') }}" method="POST" enctype="multipart/form-data">
										@csrf
                                            <div class="col-6 float:left " style="margin: 20px 20px 20px 0px;wide: 100px;">
                                                <select name="transportation_category" id="transportation-category" >
												<option value="-1" selected disabled>บริษัทขนส่ง</option>
												<?php foreach ($data2 as $key => $transport) { 
													$selected = ($transport_category==$transport->id_tramsport) ? 'selected' : '';
													?>
                                                    <option value="<?php echo $transport->id_tramsport  ?>"<?php echo $selected ?> ><?php echo $transport->transport_name  ?></option>
													<?php } ?>
                                                </select><button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button><br>
												
												
													</form>
													
                                            </div>
                                        </div>
                                        <button id="myBtn1" class="secondary createtransbtn float:left">เพิ่มบริษัทขนส่ง</button>
                                    </div>

									<!-- Create Transport Modal -->
									<div class="modal fade" id="createtransModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">เพิ่มบริษัทขนส่ง</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{ route('Transport_store') }}" method="POST" enctype="multipart/form-data">
										@csrf
											<label for="size">บริษัทขนส่ง:</label>
											<input type="text" id="file_upload" name="transport_name" value=""> <br>
												<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
															
										</form>
										</div>
										
									</div>
									</div>
									<!-- End Create Transport Modal -->

									<!-- Create Fre Modal -->
									<div class="modal fade" id="createfreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">เพิ่มบริษัทขนส่ง</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{ route('managementTransport_store') }}" method="POST" enctype="multipart/form-data">
										@csrf
											<label for="size">น้ำหนักอย่างน้อย(กิโลกรัม):</label><br>
											<input type="number" step="0.001" id="file_upload" name="min" value=""> <br>
											<label for="size">น้ำหนักไม่เกิน(กิโลกรัม):</label><br>
											<input type="number" step="0.001" id="file_upload" name="max" value=""> <br>
											<label for="size">ราคา(บาท):</label><br>
											<input type="number" step="0.001" id="file_upload" name="price" value=""> <br><br>
											<input type="hidden" id="transport_id" name="id_transport" value="<?php echo $transport_category ?>">
												<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
															
										</form>
										</div>
									</div>
									</div>
									<!-- End Create Fre Modal -->

									<!-- edit Modal -->
									<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{ route('managementTransport_update') }}" method="POST" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<label for="size">น้ำหนักอย่างน้อย(กิโลกรัม):</label><br>
											<input type="number" id="min_edit" step="0.001" id="file_upload" name="min" value=""> <br>
											<label for="size">น้ำหนักไม่เกิน(กิโลกรัม):</label><br>
											<input type="number" id="max_edit" step="0.001" id="file_upload" name="max" value=""> <br>
											<label for="size">ราคา(บาท):</label><br>
											<input type="number" id="price_edit" step="0.001" id="file_upload" name="price" value=""> <br><br>
											<input type="hidden" id="transport_id" name="id_transport" value="<?php echo $transport_category ?>">
												<input type="hidden" id="edit_id" name="id_freight">
												<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
															
										</form>
										</div>
									</div>
									</div>
									<!-- End edit Modal -->

									<!-- Delete Modal -->
									<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{route('managementTransport_delete')}}" method="POST"  >
											@csrf
											@method('DELETE')
										<div class="modal-body">
											
											<p>Are You Sure ?</p>
											<input type="hidden" id="delete_id" name="id_freight" value="DELETE">
										</div>
										<div class="footer">
										<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
										</div>
										</form>
										</div>
									</div>
									</div>
									<!-- End Delete Modal -->
									
									<button id="myBtn2" class="secondary createfrebtn float:left">เพิ่มเรทราคา</button>
									<div class="table-wrapper">
										<table id="example" class="table table-striped" style="width:100%">
											<thead>
												<tr>
													<td>น้ำหนักอย่างน้อย(กิโลกรัม)</td>
													<td>น้ำหนักไม่เกิน(กิโลกรัม)</td>
													<td>ราคา(บาท)</td>
													<td></td>
													<td></td>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data1 as $key => $freight) { ?>
												<tr>
													<td><?php echo $freight->min  ?></td>
													<td><?php echo $freight->max  ?></td>
													<td><?php echo $freight->price  ?></td>
													<td><button type="button" value="{{$freight->id_freight}}" class="secondary editbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</button></td>
                                                    <td><button type="button" value="{{$freight->id_freight}}" class="button primary deletebtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
												</tr>
												<?php } ?>
											</tbody>
											
										</table>
									</div>
								</div>
								
							</section>
                            

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<!-- Menu -->
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
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
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
			
			<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
	 
			<script>
				$(document).ready(function (){
					// Create
					$(document).on('click','.createtransbtn',function (){
					var id = $(this).val();
					$('#createtransModal').modal('show'); 
					 
				});
				 
					// Create
					$(document).on('click','.createfrebtn',function (){
					var id = $(this).val();
					$('#createfreModal').modal('show'); 
					 
					});
				// Edit
				$(document).on('click','.editbtn',function (){
					var id = $(this).val();
					
					
					$.ajax({
						 
						method: "GET", 
						url: "/managementTransport-edit/"+id,
						
						success: function (response){	
							console.log(response);
							 $('#edit_id').val(id);
							 $('#min_edit').val(response.freight[0].min);
							 $('#max_edit').val(response.freight[0].max);
							 $('#price_edit').val(response.freight[0].price);
							 $('#transport_id').val(response.freight[0].id_transport);
							 
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