<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Alat</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
        <table class="table bg-white text-dark" id="dataAlat">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>KODE REG</th>
                <th>NAMA</th>
                <th>MERK</th>
                <th>TYPE</th>
                <th>KATEGORI</th>
                <th>KONDISI</th>
                <th>KETERSEDIAAN</th>
                <th>INSTRUKSI KERJA</th>
                <th>AKSI</th>
              </tr>
            </thead> 
            <tbody>
               <?php 
              $no =1;
              foreach ($alat as $alat) { ?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $alat['kode'];?>.<?= $alat['register'];?></td>
                  <td><?= $alat['nama_alat']; ?></td></a>
                  <td><?= $alat['merk']; ?></td></a>
                  <td><?= $alat['type']; ?></td></a>
                  <td><?= $alat['kategori']; ?></td>
                  <td><?= $alat['kondisi']; ?></td> 
                  <td>
                  <?php
                    switch($alat['ketersediaan']){
                      case 'booked': ?>
                        <span style="color:orange; font-weight: bold;"><?= $alat['ketersediaan']; ?></span> <?php 
                        break;
                      case 'dipinjam': ?>
                        <span style="color:red; font-weight: bold;"><?= $alat['ketersediaan']; ?></span> <?php
                        break;
                      case 'tersedia':  ?>
                        <span style="color:MediumSeaGreen; font-weight: bold;"><?= $alat['ketersediaan']; ?></span> <?php
                        break;
                      case 'Out Of Service':  ?>
                          <span style="color:red; font-weight: bold;"><?= $alat['ketersediaan']; ?></span> <?php
                          break;
                    }
                  ?>
                  </td> 
                  <td><a href="<?= base_url('assets/doc/IK/').$alat['IK'];?>"><?= $alat['IK']; ?></a></td> 
                  <td>
                    <?php 
                    if($alat['ketersediaan']=='tersedia'){?>
                      <a href="<?= base_url('user/addCart/').$alat['id'];?>" class ='badge badge-warning float-right' >Pinjam</a>
                    <?php } else {?>
                      <a href="" class ='badge badge-secondary float-right' disabled >Pinjam</a>
                      <?php }?>

                  </td>
                </tr>
                  <?php } ?>  
            </tbody>
        </table>
        <a href="<?= base_url('alat');?>" class ='btn btn-success' disabled >Kembali ke halaman sebelumnya..</a>
        </div>
    </div>
    <br>



<?= $this->endSection(); ?>


   