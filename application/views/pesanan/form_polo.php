<div class="container">
	<section class="content-header">
		<h1>
			Form Pesanan Polo Shirt
		</h1><br>
	</section>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group row">
				<label for="input" class="col-sm-3 col-form-label">Jenis Kain</label>
				<div class="col-sm-7">
					<select class="form-control " style="width: 100%;" name="jenis_kain">
						<option value="Lacos Katun">Lacos Katun</option>
						<option value="TC">TC</option>
						<option value="Polyester PE">Polyester PE</option>
						<option value="Double katun">Double Katun</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="input" class="col-sm-3 col-form-label">Warna Kain</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="input" placeholder="Warna Kain" name="warna">
				</div>
			</div>

			<div class="form-group row">
				<label for="input" class="col-sm-3 col-form-label">Jenis Sablon</label>
				<div class="col-sm-7">
					<select class="form-control " style="width: 100%;" name="jenis_sablon">
						<option value="Rubber">Rubber</option>
						<option value="Plastisol">Plastisol</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Ukuran</label>
					<div class="col-sm-7">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">XS</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="xs_pendek" id="xs_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="xs_panjang" id="xs_panjang" placeholder="panjang"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">L</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="l_pendek" id="l_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="l_panjang" id="l_panjang" placeholder="panjang"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">XXXL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="xxxl_pendek" id="xxxl_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="xxxl_panjang" id="xxxl_panjang" placeholder="panjang"><br>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">S</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="s_pendek" id="s_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="s_panjang" id="s_panjang" placeholder="panjang"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">XL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="xl_pendek" id="xl_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="xl_panjang" id="xl_panjang" placeholder="panjang"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">Jumbo</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="jumbo_pendek" id="jumbo_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="jumbo_panjang" id="jumbo_panjang" placeholder="panjang"><br>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">M</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="m_pendek" id="m_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="m_panjang" id="m_panjang" placeholder="panjang"><br>
					</div>

					<label for="input" class="col-sm-3 col-form-label">XXL</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="xxl_pendek" id="xxl_pendek" placeholder="pendek">
						<input type="text" class="form-control" name="xxl_panjang" id="xxl_panjang" placeholder="panjang"><br>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputFile" class="col-sm-3 col-form-label">Upload File</label>
				<div class="input-group">
					<div class="costum-file">
						<input type="file" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Choose file</label>
					</div>
					<div class="input-group-append">
						<span class="input-group-text" id="">Upload</span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="message" class="col-sm-3 col-form-label">Keterangan</label>
				<div class="col-sm-7">
					<textarea id="note_1_1" name="keterangan" class="form-control" placeholder="Keterangan Pekerjaan"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">SAVE</button>
			<button type="button" class="btn btn-danger">CANCEL</button>
		</div>

	</div>
</div>
