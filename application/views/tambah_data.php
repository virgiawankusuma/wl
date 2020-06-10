<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="<?= base_url('crud/simpan') ;?>" method="post" autocomplete="off">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" id="nama" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>