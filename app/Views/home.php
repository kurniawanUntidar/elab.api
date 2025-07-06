<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?=base_url()?>favicon.ico">

    <title>Elab [<?=$title;?>]</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-light">

<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
    <div class="container bg-gray-150 shadow">

    <a class="navbar-brand" href="<?= base_url();?>">
      <img src="<?= base_url();?>img/Logo-elab.svg" alt="Elab" height="60">
    </a>

<!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/">Alat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/">Bahan</a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>login">Login</a>
        </li>
    </ul>
    </div>
</nav>

<div class="container bg-gray-100 shadow">
<!-- Page Heading -->
    <div class="container-fluid">
    <h2 class=""><?= $title ?></h2>
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
</div>




<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="container-fluid bg-gray-100 shadow p-3">
        <div class="container my-100 ">
            <div class="copyright text-center my-auto ">
                <span>Copyright &copy; ELAB Untidar <?= date('Y');?></span>
            </div>
        </div>
    </div>

</footer>

<!-- SCRIPTS -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>js/sb-admin-2.min.js"></script>

</body>

</html>
