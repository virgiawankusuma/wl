<div class="container">

  <!-- caraku dewe -->
  <!-- <table class="table table-hover">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
    </tr>

    <?php foreach ($isi as $i){ ?>
    <tr>
      <td scope="row"><?= $i->id ;?></td>
      <td><?= $i->nama ;?></td>
    </tr>
    <?php } ?>
  </table> -->

  <!-- carane pak harminto -->
  <table class="table table-hover table-bordered">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>

    <?php $id=1;
    foreach ($isi as $k0 => $v0){ ?>
    <tr>
      <td scope="row"><?= $id++ ;?></td>
      <td><?= $v0['nama'] ;?></td>
      <td>
        <a class="badge badge-success" href="<?= base_url('crud/ubah/'.$v0['id']) ;?>">Ubah</a>
        <a class="badge badge-danger" href="<?=  base_url('crud/hapus/'.$v0['id']) ;?>" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

