<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="<?= base_url('crud/update') ;?>" method="post" autocomplete="off">
				<input type="hidden" name="id" value="<?= $id ;?>">
				<div class="form-group">
					<label for="nama">Nama :</label>
					<input type="text" name="nama" id="nama" class="form-control" value="<?= $nama ;?>">
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>