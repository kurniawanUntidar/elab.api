<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Alat</h1>
     <div class="container bg-white">
        <div class="row">
            <?php foreach ($alat as $a): ?> 
                <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= $a['picture']!=null ? base_url('img/alat/').$a['picture'] : base_url('img/alat/').'default.jpg'; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title"><?= $a['nama_alat']; ?></h5>
                            <h6 class="card-title"><?= $a['merk']; ?></h6>
                            <h6 class="card-title"><?= $a['jumlah']; ?></h6>
                            <h6 class="card-title"><?= $a['type']; ?></h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>  
                <?php endforeach; ?>
        </div>
    </div>


<?= $this->endSection(); ?>


   