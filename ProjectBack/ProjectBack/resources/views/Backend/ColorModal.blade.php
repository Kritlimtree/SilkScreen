<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="{{ route('shirtcolor_store') }}" method="POST" enctype="multipart/form-data">
										@csrf
											<label for="size">สี:</label>
											<input type="text" id="file_upload" name="shirtcolor_name" value=""><br>
											<label for="price">รูปเสื้อ:</label>
											<div class="image">
   							 				  <label><h4>Add image</h4></label>
   										   <input type="file" class="form-control" required name="shirtcolor_picture">
  											  </div>
												<button type="button" class=" danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="secondary" data-loading-text="Loading...">
           									         <i class="bx bx-save text-4 mr-2"></i> บันทึกข้อมูล
               											 </button>
															
										</form>
										</div>
									</div>
									</div>