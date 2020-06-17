<div class="container">
	<table id="tb" class="table table-hover">
		<thead>
			<tr>
				<th scope="col">ID</th>
	            <th scope="col">Nama</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

	<script type="text/javascript">
		$(document).ready(function () {
			load();
		});	

		function load(){
			table = $('#tb').DataTable({
				"bDestroy": true,
				"processing": true,
				"serverSide": true,
				"ordering": false,
				"pagingType": "simple",
				"order": [],
				"ajax": {
					"url": "<?= base_url('DatatablesServer/showTable') ;?>",
					"type": "POST"
				},
			});
		}

		function reload()
		{
			table.ajax.reload(null, false);
		}
	</script>

</div>