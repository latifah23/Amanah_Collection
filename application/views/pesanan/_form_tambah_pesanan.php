<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Tambah Pesanan
			</h1>
		</section>
		<section class="content">
			<div class="box box-success">
				<div class="box-body">
					<form role="form">
						<div class="row">

							<div class="box-body">
								<div class="col-md-3">
									<div class="form-group">
										<label>Nama Costumer</label>
										<select class="form-control select2" style="width: 100%;">
											<?php foreach ($costumer as $key => $value) : ?>
												<option style="line-height: unset;"><?= $value['nama'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Nama Pegawai</label>
										<select class="form-control select2" style="width: 100%;">
											<?php foreach ($pegawai as $key => $value) : ?>
												<option style="line-height: unset;"><?= $value['nama'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Durasi Pemesanan:</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control pull-right" name="datefilter" value="" />

											<script type="text/javascript">
												$(function() {

													$('input[name="datefilter"]').daterangepicker({
														autoUpdateInput: false,
														locale: {
															cancelLabel: 'Clear'
														}
													});

													$('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
														$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
													});

													$('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
														$(this).val('');
													});

												});
											</script>
										</div>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Kode Orderan</label>
										<input type="text" class="form-control" id="code_orderan" placeholder="">
									</div>
								</div>
								<div class="col-md-3">
									<label>User/Cs Transaksi</label>
									<select class="form-control select2" style="width: 100%;">
										<option selected="selected">Alabama</option>
										<option>Alaska</option>
										<option>California</option>
										<option>Delaware</option>
										<option>Tennessee</option>
										<option>Texas</option>
										<option>Washington</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Status Transaksi</label>
									<select class="form-control select2" style="width: 100%;">
										<option selected="selected">Proses</option>
										<option>Selesai</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Kategori Produk</label>
									<select id="produk" class="form-control">
										<option value="">Pilih Produk</option>
										<option value="Polo Shirt">Polo Shirt</option>
										<option value="T-Shirt">T-Shirt</option>
										<option value="Seragam Olahraga">Seragam Olahraga</option>
										<option value="Jaket">Jaket</option>
										<option value="Kemeja">Kemeja</option>
										<option value="Topi">Topi</option>
										<option value="Sabuk">Sabuk</option>
										<option value="PDL">PDL</option>
									</select>
								</div>
								<div class="col-md-2">
									<label>&nbsp;</label>
									<button type="submit" class="btn btn-primary form-control">Simpan</button>
								</div>
								<div class="col-md-1">
									<label>&nbsp;</label>
									<button type="submit" class="btn btn-danger form-control">Reset</button>
								</div>
							</div>

							<!-- select produk PDL-->
							<div class="box box-success" id="select-PDL">
								<div class="box-body">
									<div class="row">
										<section class="content-header ">
											<h1>Form Katagori Produk <span id="header-select"></span></h1>
											<br>
										</section>
										<section class="content">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">Jenis Kain</label>
														<div class="col-sm-9">
															<select class="form-control " style="width: 100%;">
																<option>American Drill</option>
																<option>Nagata Drill</option>
																<option>Obor</option>
																<option>Taipan</option>
															</select>
														</div>
													</div>

													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">Warna Kain</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Warna Kain">
														</div>
													</div>

													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">Jumlah</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Jumlah">
														</div>
													</div>
												</div>
											</div>

											<div class="row">

												<div class="col-md-3">
													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label"></label>
														<div class="col-sm-9">
														</div>
													</div>

												</div>
												<div class="col-md-3">
													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">XS</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>


														<label for="input" class="col-sm-3 col-form-label">L</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>

														<label for="input" class="col-sm-3 col-form-label">XXXL</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>


													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">S</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>


														<label for="input" class="col-sm-3 col-form-label">XL</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>

														<label for="input" class="col-sm-3 col-form-label">Jumbo</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>


													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group row">
														<label for="input" class="col-sm-3 col-form-label">M</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>


														<label for="input" class="col-sm-3 col-form-label">XXL</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="input" placeholder="Panjang">
															<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
														</div>

													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Keterangan</label>
															<div class="col-sm-9">
																<textarea id="note_4_1" name="transaction_job_note[4][1]" class="form-control" rows="5" placeholder="Keterangan"></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group row">
															<label class="col-sm-3 col-form-label">Upload File</label>

															<div class="col-sm-9">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
																	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
							<!-- select produk Polo-->
							<div class="box box-success" id="select-Polo">
								<div class="box-body">
									<div class="row">
										<section class="content-header">
											<h1>
												Form Pesanan Polo Shirt
											</h1><br>
										</section>
										<section class="content">
											<form>

												<div class="row">

													<div class="col-md-12">

														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Jenis Kain</label>
															<div class="col-sm-9">
																<select class="form-control " style="width: 100%;">
																	<option>Lacos Katun</option>
																	<option>TC</option>
																	<option>Polyester PE</option>
																	<option>Double Katun</option>
																</select>
															</div>
														</div>

														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Warna Kain</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Warna Kain">
															</div>
														</div>

														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Jenis Sablon</label>
															<div class="col-sm-9">
																<select class="form-control " style="width: 100%;">
																	<option>Rubber</option>
																	<option>Plastisol</option>
																</select>
															</div>
														</div>

														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">Jumlah</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Jumlah">
															</div>
														</div>

													</div>
												</div>

												<div class="row">

													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label"></label>
															<div class="col-sm-9">
															</div>
														</div>

													</div>
													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">XS</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


															<label for="input" class="col-sm-3 col-form-label">L</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">XXXL</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">S</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


															<label for="input" class="col-sm-3 col-form-label">XL</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>

															<label for="input" class="col-sm-3 col-form-label">Jumbo</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group row">
															<label for="input" class="col-sm-3 col-form-label">M</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


															<label for="input" class="col-sm-3 col-form-label">XXL</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="input" placeholder="Panjang">
																<input type="text" class="form-control" id="input" placeholder="Pendek"><br>
															</div>


														</div>
													</div>
												</div>

												<div class="row">
													<div class="form-group">
														<label for="exampleInputFile" class="col-sm-3 col-form-label">Upload File</label>
														<div class="input-group">
															<div class="costum-file">
																<input type="file" class="custom-file-input" id="exampleInputFile">
																<label class="custom-file-label" for="exampleInputFile">Choose file</label>
															</div>
															<div class="input-group-append">
																<span class="input-group-text" id="">Upload</span>
															</div>
														</div>
													</div>

													<div class="form-group row">
														<label for="message" class="col-sm-3 col-form-label">Keterangan</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="message" placeholder="Keterangan">
														</div>
													</div>
												</div>
												<button type="button" class="btn btn-primary">SAVE</button>
												<button type="button" class="btn btn-danger">CANCEL</button>
											</form>
										</section>
									</div>
								</div>
							</div>

							<!-- jika kosong select produk-->
							<div class="box box-success" id="select-kosong">
								<div class="box-body">
									<div class="row">
										<section>
											<h5 class="text-center">Data Katagori belum di pilih</h5>
										</section>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
