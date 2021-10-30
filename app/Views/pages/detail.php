<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="mt-5">Detail Event</h2>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $event['nama_event']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $event['tipe_event']; ?></h6>
            <p class="card-text"><?= $event['deskripsi']; ?></p>
            <p class="card-text small"><b>tanggal mulai : </b><?= $event['start_date']; ?></p>
            <p class="card-text small"><b>tanggal selesai : </b><?= $event['end_date']; ?></p>
            <a href="/events" class="card-link">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>