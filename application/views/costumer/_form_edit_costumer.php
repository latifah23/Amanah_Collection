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
							<input type="hidden" name="id" value="<?= $costumer['id'] ?>">
							<div class="form-group">
								<label for="nama">No</label>
								<input type="text" class="form-control" id="no" name="no" value="<?= $costumer['no'] ?>">
							</div>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" value="<?= $costumer['nama'] ?>">
							</div>
							<div class="form-group">
								<label for="notelp">No telp</label>
								<input type="text" class="form-control" id="notelp" name="notelp" value="<?= $costumer['notelp'] ?>">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" value="<?= $costumer['email'] ?>">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $costumer['alamat'] ?>">
							</div>	
					</div>
					<div class="modal-footer">
						<a class="btn btn-info " href="<?= base_url('admin/') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
