<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Bahan</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
        <table class="table bg-white text-dark" id="dataBahan">
            <thead class="thead-dark">
              <tr>
                <th>Nama Bahan</th>
                <th>Type</th>
                <th>Spesifikasi</th>
                <th>Nilai</th>
                <th>Jumlah</th>
              </tr>
            </thead> 
            <tbody>
              <?php 
              $no=0;
              foreach($bahan as $bahan): ?>
              <tr>
                <td><?= $bahan['nama'];?></td>
                <td><?= $bahan['type'];?></td>
                <td><?= $bahan['spesifikasi'];?></td>
                <td><?= $bahan['nilai'];?></td>
                <td><?= $bahan['jumlah'];?></td>
              </tr>
                <?php endforeach; ?>                
            </tbody>
        </table>
        </div>
    </div>
    <br>



<?= $this->endSection(); ?>


   