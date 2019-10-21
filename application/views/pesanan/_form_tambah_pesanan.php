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
					<div class="row">
						<form role="form">
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
										<label>Kategori Produk</label>
										<select class="form-control " style="width: 100%;">
										<option>Produk</option>
										<option>Polo Shirt</option>
										<option>T-Shirt</option>
										<option>Seragam olahraga</option>
										<option>Jaket</option>
										<option>Kemeja</option>
										<option>Topi</option>
										<option>Sabuk</option>
										<option>PDL</option>
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
											<input type="text" class="form-control pull-right" id="reservation">
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
									<select class="form-control " style="width: 100%;">
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
									<select class="form-control " style="width: 100%;">
										<option selected="selected">Proses</option>
										<option>Selesai</option>
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

							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item active">
										<a class="nav-link active" id="pekerjaan-tab" data-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="true">Pekerjaan</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="file_orderan-tab" data-toggle="tab" href="#file_orderan" role="tab" aria-controls="file_orderan" aria-selected="false">File Orderan</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">...</div>
									<div class="tab-pane fade" id="file_orderan" role="tabpanel" aria-labelledby="file_orderan-tab">...</div>

								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</section>
	</div>
</div>
