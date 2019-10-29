<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data Costumer
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors(); ?>
					</div>
				<?php endif ?>
				<form action="" method="post">
					<div class="modal-body">
						<input type="hidden" name="id" value="<?= $pemesanan['id'] ?>">
						<div class="form-group">
							<label for="kode_order">kode_order</label>
							<input type="text" class="form-control" id="kode_order" name="kode_order" value="<?= $pemesanan['kode_order'] ?>" readonly>
						</div>
						<div class="form-group">
							<label for="costumer">Costumer</label>
							<select class="form-control select2" style="width: 100%;" name="id_costumer">
								<option value="" selected disabled hidden><?= $get_pesanan['nama_costumer'] ?></option>
								<?php foreach ($costumer as $key => $value) : ?>
									<option name="id_costumer" style="line-height: unset;" value="<?= $value['id_costumer'] ?>"><?= $value['nama'] ?></option>
								<?php endforeach; ?>
							</select>

						</div>
						<div class="form-group">
							<label>Nama Pegawai</label>
							<select class="form-control select2" style="width: 100%;" name="id_pegawai">
								<option value="" selected disabled hidden><?= $get_pesanan['nama_pegawai'] ?></option>
								<?php foreach ($pegawai as $key => $value) : ?>
									<option name="id_pegawai" style="line-height: unset;" value="<?= $value['id_pegawai'] ?>"><?= $value['nama'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="produk">produk</label>
							<input type="text" class="form-control" id="produk" name="produk_id" value="<?= $get_pesanan['nama_produk'] ?>">
						</div>
						<div class="form-group">
							<label for="durasi_pemesanan">durasi_pemesanan</label>
							<input type="text" class="form-control" id="durasi_pemesanan" name="durasi_pemesanan" value="<?= $pemesanan['durasi_pemesanan'] ?>">
						</div>
						<div class="form-group">
							<label for="status">status</label>
							<?php if ($pemesanan['status'] == 1) : ?>
								<span style="margin-left:10px" class="label label-success">Selesai</span>
							<?php else : ?>
								<span style="margin-left:10px" class="label label-danger">Proses</span>
							<?php endif; ?>
						</div>

					</div>
					<div class="modal-footer">
						<a class="btn btn-info " href="<?= base_url('pesanan/') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				
				</form>
			</div>
		</section>
	</div>
</div>
