<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Costumer
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<?php if ($this->session->flashdata()) : ?>
					<div class="alert alert-success alert-dismissible mt-3 " role="alert">
						<strong> Berhasil !!</strong> <?= $this->session->flashdata('flash') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<div class="box-header">
					<h3 class="box-title">Data Table With Full Features</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>No Telp</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($costumer as $key => $value) : ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= $value['nama'] ?></td>
									<td><?= $value['notelp'] ?></td>
									<td><?= $value['email'] ?></td>
									<td><?= $value['alamat'] ?></td>
									<td>
										<a href="<?php echo base_url("costumer/edit_costumer/" . $value['id_costumer']) ?>" class="btn btn-info btn-sm ">Edit</a>
										<a href="<?php echo base_url("costumer/hapus_costumer/" . $value['id_costumer']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
									</td>

								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
