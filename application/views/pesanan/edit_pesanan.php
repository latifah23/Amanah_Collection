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
							<input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai'] ?>">

							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama'] ?>">
							</div>
							<div class="form-group">
								<label for="level">Level</label>
								<input type="text" class="form-control" id="level" name="level" value="<?= $pegawai['level'] ?>">
							</div>
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $pegawai['pekerjaan'] ?>">
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
