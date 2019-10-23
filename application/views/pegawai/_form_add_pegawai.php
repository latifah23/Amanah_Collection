<div class="modal fade" id="modalPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Pegawai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div id="custom-modal" class="modal-demo">
					<form action="<?= base_url('pegawai/tambah_pegawai') ?>" method="post">
						<div class="custom-modal-text text-left">
							<input type="hidden" name="id_pegawai" id="id_pegawai">
							<div class="form-group">
								<label for="name">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama">
							</div>
							<div class="form-group">
								<label for="level">Level</label>
								<input type="level" class="form-control" id="level" name="level">
							</div>
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
							<button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
