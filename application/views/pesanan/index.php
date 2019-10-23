<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Pesanan Masuk
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Data Table With Full Features</h3>
					<a href="<?= base_url('/pesanan/tambah_pesanan') ?>" type="button" class="btn btn-block btn-primary" style="width:auto; float:right;">Tambah Pesanan</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Costumer</th>
								<th>Produk</th>
								<th>Kode Order</th>
								<th>Pegawai</th>
								<th>Durasi Pemesanan</th>
								<th>Status</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pemesanan as $key => $value) : ?>
								<tr>
									<td><?= $value['nama_costumer'] ?></td>
									<td><?= $value['nama_produk'] ?></td>
									<td><?= $value['kode_order'] ?></td>
									<td><?= $value['nama_pegawai'] ?></td>
									<td><?= $value['durasi_pemesanan'] ?></td>
									<td>
										<?php if ($value['status'] == 1) : ?>
											Selsai
										<?php else : ?>
											Proses
										<?php endif; ?>

									</td>

									<td>
										<a href="" class="btn btn-info btn-sm ">Edit</a>
										<a href="" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
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
