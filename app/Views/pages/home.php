<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-5 text-center bg-image" style="
      background-color: #B8DDD9;
      height: 91vh;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h2 class="text-color" style="font-family: 'roboto'; font-size: 80px;">Welcome</h2>
                <?php if (logged_in()) : ?>
                    <a class="btn btn-outline-Secondary btn-lg" <?php if (in_groups('admin')) : ?> href="<?= base_url(); ?>/Admin" <?php else : ?>href="<?= base_url(); ?>/user" <?php endif; ?> role="button">MANAGE</a>
                <?php else : ?>
                    <a class="btn btn-outline-Secondary btn-lg" href="<?= base_url(); ?>/login" role="button">Log In</a>
                <?php endif; ?>
                <h5 class="mt-2 text-color" style="font-family: 'roboto'; font-size: 20px;">Sorry there's no sign up button, cause it'll make us frustated</h5>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>