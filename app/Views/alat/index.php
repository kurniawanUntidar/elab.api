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
                <th>DAFTAR ALAT LABORATORIUM TEKNIK ELEKTRO</th>
              </tr>
            </thead> 
            <tbody>
              <?php 
              $no =1;
              foreach ($alat as $alat) { ?>
                <tr>
                  <td>
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4 align-self-center">
                          <img class="card-img " src="<?= ($alat['picture'])? base_url('img/alat/').$alat['picture'] : base_url('img/alat/').'default.jpg';?>"  style="width:40%">
    		            </div>
                    <div class="col-md-8">
     		            <div class="card-body ml-2">
        	            <h5 class="card-title"><?= $alat['nama_alat'];?></h5>
                        <hr>
                        <div class="row">
                    <div class="col-md-4">
                        <p class="card-text">Merk <br>Type <br>Kategori<br>Instruksi Kerja<br>Jumlah</p>
                    </div>
                    <div class="col-md-8"> 
                        <p class="card-text">: <?= $alat['merk'];?><br>: <?= $alat['type'];?><br>: <?= $alat['kategori'];?><br>: <a href="<?=base_url('doc/IK/') .$alat['IK'];?>"><?= $alat['IK'];?></a><br>: <?= $alat['jumlah'];?></p>     
                        <a href="<?= base_url('alat/detail/').$alat['nama_alat'] ?>" class="btn btn-success mt-3">Detail</a>       
                    </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </td>
                </tr>
                  <?php } ?>           
            </tbody>
        </table>
        </div>
    </div>
    <br>



<?= $this->endSection(); ?>


   