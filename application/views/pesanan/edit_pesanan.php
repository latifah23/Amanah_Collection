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
						<form action="" method="post">
							<input type="hidden" name="id" value="<?= $pesanan['id'] ?>">

							<div class="form-group">
								<label for="costumer">Costumer</label>
								<input type="text" class="form-control" id="costumer" name="costumer_id" value="<?= $pesanan['costumer_id'] ?>">
							</div>
							<div class="form-group">
								<label for="produk">produk</label>
								<input type="text" class="form-control" id="produk" name="produk_id" value="<?= $pesanan['produk_id'] ?>">
							</div>
							<div class="form-group">
								<label for="kode_order">kode_order</label>
								<input type="text" class="form-control" id="kode_order" name="kode_order" value="<?= $pesanan['kode_order'] ?>">
							</div>
							<div class="form-group">
								<label for="durasi_pemesanan">durasi_pemesanan</label>
								<input type="text" class="form-control" id="durasi_pemesanan" name="durasi_pemesanan" value="<?= $pesanan['durasi_pemesanan'] ?>">
							</div>
							<div class="form-group">
								<label for="kode_order">kode_order</label>
								<input type="text" class="form-control" id="kode_order" name="kode_order" value="<?= $pesanan['kode_order'] ?>">
							</div>
							<div class="form-group">
								<label for="status">status</label>
								<input type="text" class="form-control" id="status" name="status" value="<?= $pesanan['status'] ?>">
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
