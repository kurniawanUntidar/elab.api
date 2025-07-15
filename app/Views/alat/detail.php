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
         <?php var_dump($alat);?>
            </tbody>
        </table>
        </div>
    </div>
    <br>



<?= $this->endSection(); ?>


   