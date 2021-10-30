<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Jangan lupa <?= $users->username; ?> Untuk tetap tersenyum :)</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><?= $users->fullname; ?></b></h5>
                    <p class="card-title mt-4"><b>No Handphone :</b><?= $users->nohp; ?></p>
                    <p class="card-text"><b>Username :</b> <?= $users->username; ?></p>
                    <p class="card-text"><b>Email :</b> <?= $users->email; ?></p>
                    <p class="card-text"><b>Role :</b> <?= $users->name; ?></p>
                    <a href="<?= base_url(); ?>/Admin" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>