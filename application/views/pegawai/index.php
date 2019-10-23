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
								<th>Level</th>
								<th>Pekerjaan</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pegawai as $key => $value) : ?>
								<tr>
									<td><?= $key + 1 ?></td>
									<td><?= $value['nama'] ?></td>
									<td><?= $value['level'] ?></td>
									<td><?= $value['pekerjaan'] ?></td>
									<td>
										<a href="<?php echo base_url("pegawai/edit_pegawai/" . $value['id_pegawai']) ?>" class="btn btn-info btn-sm ">Edit</a>
										<a href="<?php echo base_url("pegawai/hapus_pegawai/" . $value['id_pegawai']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
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
