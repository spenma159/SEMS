<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-color">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width: 20%;"><b>SEMS</b></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                <a class="nav-link text-light" href="/Events">Events</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card o-hidden border-0 shadow-lg my-5 ">
                <div class="card-body p-0 bg-color">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class=" mb-5 text-color mt-4">Login dulu yuk !</h1>
                                </div>
                                <form class="user" action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>



                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?= lang('Auth.rememberMe') ?>
                                            </label>
                                        </div>
                                    <?php endif; ?>

                                    <br>
                                    <button type="submit" class="btn btn-user btn-block" style="background-color: #4e6c78; color : #d9e1e2;">
                                        <?= lang('Auth.loginAction') ?>
                                    </button>
                                </form>
                                <hr>
                                <p class="text-center text-color">Punten ga bisa Lupa password, hehe</p>
                                <?php if ($config->allowRegistration) : ?>
                                    <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                <?php endif; ?>
                                <?php if ($config->activeResetter) : ?>
                                    <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>