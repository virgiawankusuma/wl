<div class="container">
	<table id="tb" class="table table-hover">
	    <thead>
	        <tr>
	            <th scope="col">ID</th>
	            <th scope="col">Nama</th>
	            <th scope="col">Aksi</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php $id=1;
	    	foreach ($isi as $k0 => $v0){ ?>
	        <tr>
	            <td><?= $id++ ;?></td>
	            <td><?= $v0['nama'] ;?></td>
	            <td>
	            	<a class="badge badge-success" href="<?= base_url('crud/ubah/'.$v0['id']) ;?>">Ubah</a>
	            	<a class="badge badge-danger" href="<?= base_url('crud/hapus/'.$v0['id']) ;?>" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
	            </td>
	        </tr>
	    	<?php } ?>
	    </tbody>
	</table>
		<script type="text/javascript">
		$(document).ready( function () {
	    $('#tb').DataTable();
	} );
		</script>
</div>