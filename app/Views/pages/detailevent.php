<?= $this->extend('layout/template'); ?>
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
                        <a href="<?= base_url(); ?>/Events" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Siswa yang ikut</b></h5>
                        <?php foreach ($events as $events) : ?>
                            <p><?= $events->entryid; ?>. <?= $events->nama; ?> (<?= $events->nis; ?>) = <?= $events->absensi; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Hasil dari Event</b></h5>
                        <p>Juara 1 : siswa dengan id -> <?= $event->juara1; ?></p>
                        <p>Juara 2 : siswa dengan id -> <?= $event->juara2; ?></p>
                        <p>Juara 3 : siswa dengan id -> <?= $event->juara3; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>