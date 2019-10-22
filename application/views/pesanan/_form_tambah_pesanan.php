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
												<option style="line-height: unset;" value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Nama Pegawai</label>
										<select class="form-control select2" style="width: 100%;">
											<?php foreach ($pegawai as $key => $value) : ?>
												<option style="line-height: unset;" value="<?= $value['id_pegawai'] ?>"><?= $value['nama'] ?></option>
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
								<!-- <div class="col-md-3">
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
								</div> -->
								<div class="col-md-3">
									<label>Status Transaksi</label>
									<select class="form-control select2" style="width: 100%;">
										<option selected="selected">Proses</option>
										<option>Selesai</option>
									</select>
								</div>
								<div class="col-md-6">
									<label>Kategori Produk</label>
									<select id="produk" class="form-control">
										<option value="">Pilih Produk</option>
										<?php foreach ($produk as $key => $value) : ?>
											<option value="<?= $value['nama'] ?>"><?= $value['nama'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<!-- select produk forum Celana-->
							<div class="box box-success selected " id="Celana">
								<?php
								include APPPATH . 'views/pesanan/form_celana.php';
								?>
							</div>
							<!-- select produk forum jaket-->
							<div class="box box-success selected" id="Jaket">
								<?php
								include APPPATH . 'views/pesanan/form_jaket.php';
								?>
							</div>
							<!-- select produk forum topi-->
							<div class="box box-success selected" id="Topi">
								<?php
								include APPPATH . 'views/pesanan/form_topi.php';
								?>
							</div>
							<!-- select produk forum tshirt-->
							<div class="box box-success selected" id="T-Shirt">
								<?php
								include APPPATH . 'views/pesanan/form_tshirt.php';
								?>
							</div>
							<!-- select produk forum PDL-->
							<div class="box box-success selected" id="PDL">
								<?php
								include APPPATH . 'views/pesanan/form_pdl.php';
								?>
							</div>

							<!-- select produk Polo-->
							<div class="box box-success selected" id="Polo-Shirt">
								<?php
								include APPPATH . 'views/pesanan/form_polo.php';
								?>
							</div>


							<!-- jika kosong select produk-->
							<div class="box box-success selected" id="kosong">
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
