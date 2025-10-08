<?= $this->extend('Auth/templates/index'); ?>

<?= $this->section('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
                    <div class="card-body p-0">
                        <?= view('App\Views\Auth\_message_block') ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Elab Untidar</h1>
                                    

  
                                        <div class="row align-items-center">
                                        <div class="col "><img src="<?= base_url('img/Logo_Untidar.png') ?>" class="img-fluid mb-3  float-start" style="max-width: 120px"></div>
                                        <div class="col "><img src="<?= base_url('img/BLU-Speed.png') ?>" class="img-fluid mb-3  float-end" style="max-width: 120px;"></div>
                                        </div>

                                    </div>

                                    <form action="<?= url_to('login') ?>" method="post">
                                        <?= csrf_field() ?>

                                    <?php if ($config->validFields === ['email']): ?>
						            <div class="form-group">
							            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								            name="login" placeholder="<?=lang('Auth.email')?>">
							            <div class="invalid-feedback"><?= session('errors.login') ?></div>
						            </div>
                                    
                                    <?php else: ?>
						            <div class="form-group">
							            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								            name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							            <div class="invalid-feedback"><?= session('errors.login') ?></div>
						            </div>
                                    <?php endif; ?>
                                    
                                    <div class="form-group">
							            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							            <div class="invalid-feedback"><?= session('errors.password') ?></div>
						            </div>

                                    <?php if ($config->allowRemembering): ?>
						                <div class="form-check">
							            <label class="form-check-label">
								            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								                <?=lang('Auth.rememberMe')?>
							            </label>
						                </div>
                                    <?php endif; ?>
                                    <br>

                                    <button type="submit" class="btn btn-secondary btn-user btn-block"><?=lang('Auth.loginAction')?>
                                    </button>
                                   
                                    </form>
                                    <hr>
                                    

                                    <div class="text-center">
                                        <?php if ($config->activeResetter): ?>
					                    <a class="small" href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                                        <?php endif; ?>
                                    </div>
                                    
                                    
                                    <div class="text-center">
                                        <?php if ($config->allowRegistration) : ?>
					                    <a class="small" href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

 <?=$this->endSection(); ?>
  