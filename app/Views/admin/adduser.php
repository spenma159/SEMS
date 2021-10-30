<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Register akun</h4>
            <form action="<?= route_to('register') ?>" method="post" class="user">

                <?= csrf_field() ?>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user " name="fullname" placeholder="Fullname" value="<?= old('fullname') ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" name="nohp" placeholder="No HP" value="<?= old('nohp') ?>">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">

                    <?= lang('Auth.register') ?>
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>