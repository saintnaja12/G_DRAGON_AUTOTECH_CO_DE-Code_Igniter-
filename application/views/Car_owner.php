<div class="col-md-12 text-center">
	<h1 class="h1" style="color:#666">ลงทะเบียนปล่อยเช่ารถยนต์</h1>

	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-5 mb-5 bg-white rounded">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<H2>สเปครถยนต์</H2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm">
						กรุณาใส่รายละเอียดของรถยนต์
					</div>
<<<<<<< HEAD
					<div class="row">
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="Brand"
								id="Brand1" onChange="Change_Brand()">
								<option value="">เลือกยี่ห้อ</option>
								<?php 
  									$this->db->select('*');
								  $sql = $this->db->get('Brand');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
								<option value="<?php echo $he['idBrand'] ?>"><?php echo $he['Name_Brand'] ?></option>
								<?php }
								  
							?>
							</select>
						</div>
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">รุ่นรถ</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="Gen"
								id="gen1">
								<option value="">เลือกรุ่น</option>
							</select>
						</div>
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">รุ่นปีรถ</label>
							<input class="date-own form-control" type="text" id="yearcar">
						</div>
					</div>
					<div class="row">
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">จำนวนที่นั่ง</label>
							<select class="form-control selectpicker" data-style="btn btn-link"
								id="exampleFormControlSelect1">
								<option></option>
								<option>2 ที่นั่ง</option>
								<option>3 ที่นั่ง</option>
								<option>4 ที่นั่ง</option>
								<option>5 ที่นั่ง</option>
								<option>6 ที่นั่ง</option>
								<option>7 ที่นั่ง</option>
								<option>8 ที่นั่ง</option>
								<option>9 ที่นั่ง</option>
								<option>10 ที่นั่ง</option>
								<option>11+ ที่นั่ง</option>
							</select>
						</div>
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">สีรถ</label>
							
							<select class="form-control selectpicker" data-style="btn btn-link" name="Color"
								id="exampleFormControlSelect1">
								<option value="">เลือกสีรถยนต์</option>
								<option value="แดง">แดง</option>
								<option value="น้ำเงิน">น้ำเงิน</option>
								<option value="เหลือง">เหลือง</option>
								<option value="ขาว">ขาว</option>
								<option value="ดำ">ดำ</option>
								<option value="ม่วง">ม่วง</option>
								<option value="เขียว">เขียว</option>
								<option value="ส้ม">ส้ม</option>
								<option value="น้ำตาล">น้ำตาล</option>
								<option value="ชมพู">ชมพู</option>
								<option value="เทา">เทา</option>
								<option value="ฟ้า">ฟ้า</option>

							</select>
						</div>
						<div class="col-sm shadow p-3 mb-1">
							<label for="exampleFormControlSelect1">ชนิดเชื้อเพลิง</label>
							<select class="form-control selectpicker" data-style="btn btn-link"
								id="exampleFormControlSelect1">
								<option value="">เลือกชนิดเชื้อเพลิง</option>
								<option value="ดีเซล">ดีเซล</option>
								<option value="ดีเซลB10">ดีเซลB10</option>
								<option value="ดีเซลB20">ดีเซลB20</option>
								<option value="เบนซิน95">เบนซิน95</option>
								<option value="เบนซิน91">เบนซิน91</option>
								<option value="แก๊สโซฮอล์95">แก๊สโซฮอล์95</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์91</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์E20</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์E85</option>
								<option value="LPG">LPG</option>
								<option value="NGV">NGV</option>


							</select>
						</div>
=======
				</div>
				<div class="row">
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">รุ่นรถ</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
>>>>>>> parent of ac83654... l,;;
					</div>
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">รุ่นปีรถ</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">จำนวนที่นั่ง</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">สีรถ</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">ชนิดเชื้อเพลิง</label>
						<select class="form-control selectpicker" data-style="btn btn-link"
							id="exampleFormControlSelect1">
							<option></option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm shadow p-3 mb-1">
						<label for="exampleFormControlSelect1">ระบบเกียร์</label>
						<div class="label-bot">
							<div class="radio">
								<label style="padding-right: 8px;">
									<input type="radio" name="transmission" value="automatic" checked="checked"
										data-parsley-multiple="transmission">
									<span style="vertical-align: top;">Automatic</span>
								</label>
								<label>
									<input type="radio" name="transmission" value="manual"
										data-parsley-multiple="transmission">
									<span style="vertical-align: top;">Manual</span>
								</label>
							</div>
						</div>
					</div>
					<div class="col-sm shadow p-3 mb-1">
						<label class="bmd-label-floating">เลขไมล์</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-sm shadow p-3 mb-1">
					<a class="btn btn-Danger btn-lg" href="<?php echo base_url("Owner2");?>">ดำเนินการต่อ</a>
					</div>
				</div>
			</div>
		</div>
