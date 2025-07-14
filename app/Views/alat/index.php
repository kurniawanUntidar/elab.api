<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Alat</h1>
    <div id="cardCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $count = 0;
            foreach ($alat as $a):
                // Mulai carousel-item baru untuk setiap 2 card
                if ($count % 3 == 0) {
                    $activeClass = ($count == 0) ? 'active' : ''; // Slide pertama aktif
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<div class="row justify-content-center">'; // Gunakan row di dalam item
                }
            ?>
                <div class="col-md-4"> 
                    <div class="card" style="max-width: 540px; margin: auto;">
                    <img src="<?= $a['picture'] != null ? base_url('img/alat/') . $a['picture'] : base_url('img/alat/') . 'default.jpg'; ?>" 
                        class="card-img-top rounded mt-2" alt="<?= esc($a['nama_alat']); ?>" style="max-height:250px;object-fit:contain;">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($a['nama_alat']); ?></h5>
                            <div class="row">  
                                <div class="col-md-4"> 
                                    <p class="card-text">Merk <br>Type <br>Kategori<br>Instruksi Kerja<br>Jumlah</p>
                                </div>
                                <div class="col-md-8"> 
                                    <p class="card-text">: <?= esc($a['merk']); ?><br>: <?= esc($a['type']); ?>
                                    <br>: <?= esc($a['kategori']);?><br>: 
                                    <a href="<?=base_url('doc/IK/') .$a['IK'];?>"><?= $a['IK'];?></a><br>: <?= esc($a['jumlah']);?></p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $count++;
                // Tutup row dan carousel-item setelah 2 card atau di akhir loop
                if ($count % 3 == 0 || $count == count($alat)) {
                    echo '</div>'; // Tutup row
                    echo '</div>'; // Tutup carousel-item
                }
            endforeach;
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-target="#cardCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#cardCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <br>



<?= $this->endSection(); ?>


   