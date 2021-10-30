<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Edit Event</h4>
            <form action="<?= base_url(); ?>/Admin/updateevent/<?= $event['id']; ?>" method="post" class="user">

                <?= csrf_field() ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Nama Event : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="nama_event" placeholder="Nama Event" value="<?= $event['nama_event']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Tipe Event : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user " name="tipe_event" placeholder="Tipe Event" value="<?= $event['tipe_event']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Deskripsi : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="deskripsi" placeholder="deskripsi" value="<?= $event['deskripsi']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <h6 class="display-6 mt-3">Tanggal dan Waktu Mulai : </h6>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" name="start_date" placeholder="Tanggal dan Waktu mulai Event" value="<?= $event['start_date']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Tanggal dan Waktu Selesai : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" class="form-control form-control-user" name="end_date" placeholder="Tanggal dan Waktu Selesai Event" value="<?= $event['end_date']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Penanggung Jawab yang Baru:</h6>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <select class="form-control" name="id">
                                    <?php foreach ($eventsuser as $eventsuser) : ?>
                                        <option><?= $eventsuser['id']; ?><p>. <?= $eventsuser['fullname']; ?></p>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Edit Event
                    </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>