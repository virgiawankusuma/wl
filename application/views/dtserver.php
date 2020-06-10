<div class="container">
	<table id="tb">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

	<script type="text/javascript">
		$(document).ready( function () {
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
					"url": "<?= base_url('datatablesserver/showTable') ;?>",
					"type": "POST"
				}
			})
		}

		function reload(){
			table.ajax.reload(null, false);
		}
	</script>
</div>