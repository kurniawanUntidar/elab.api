<?= $this->extend('Auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                     <h2 class="card-header"><?=lang('Auth.register')?></h2>
                    <div class="card-body p-0">
                        <?= view('App\Views\Auth\_message_block') ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    
                                    <div class="row align-items-center">
                                        <div class="col "><img src="<?= base_url('img/Logo_Untidar.png') ?>" class="img-fluid mb-3  float-start" style="max-width: 120px"></div>
                                        <div class="col "><img src="<?= base_url('img/BLU-Speed.png') ?>" class="img-fluid mb-3  float-end" style="max-width: 120px;"></div>
                                        </div>
                                    </div>
                                    
                                    <form action="<?= url_to('register') ?>" method="post">
                                    <?= csrf_field() ?>

                                        <div class="form-group">
                                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                            </div>
                                        </div>
                                       <button type="submit" class="btn btn-secondary btn-block"><?=lang('Auth.register')?></button>
                            
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= url_to('login') ?>">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?= $this->endSection(); ?>