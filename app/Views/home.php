<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
    <?php foreach ($info as $info){?>
        <br>
        <div class="card">
        <h4 class="card-header"><?= $info['judul'] ?></h4>
            <div class="card-body">
                <h5 class="card-title"><?= $info['penulis']?></h5>
                <h6 class="card-subtitle"><?= date('d-F-Y',$info['created']); ?></h6>
                <p class="card-text"><?= $info['isi'] ?></p>
            <a href="#" class="">Go somewhere</a>
            </div>
        </div>
    <?php }; ?>

</div>


<?= $this->endSection(); ?>

