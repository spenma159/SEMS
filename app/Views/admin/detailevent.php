<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b><?= $event->nama_event; ?></b></h5>
                        <h6 class="card-title"><b>Penanggung Jawab :</b> <?= $event->fullname; ?></h6>
                        <hr>
                        <p class="card-title mt-4"><b>Tipe Event :</b><?= $event->tipe_event; ?></p>
                        <p class="card-text"><b>Deskripsi :</b> <?= $event->deskripsi; ?></p>
                        <p class="card-text"><b>Tanggal Mulai :</b> <?= $event->start_date; ?></p>
                        <p class="card-text"><b>Tanggal Selesai :</b> <?= $event->end_date; ?></p>
                        <a href="<?= base_url(); ?>/Admin/tables" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Yang Ikut Dalam Event Dengan Nama Berikut</b></h5>
                        <?php foreach ($entry as $entry) : ?>
                            <p class="card-text">(<?= $entry->nis; ?>) <?= $entry->nama; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>