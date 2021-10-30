<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Tambah Event</h4>
            <form action="<?= base_url(); ?>/Admin/tambahevent" method="post" class="user">
                <?= csrf_field() ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Nama Event : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="nama_event" placeholder="Nama Event" value="<?= old('nama_event') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Tipe Event : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user " name="tipe_event" placeholder="Tipe Event" value="<?= old('tipe_event') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Deskripsi : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="deskripsi" placeholder="deskripsi" value="<?= old('deskripsi') ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <h6 class="display-6 mt-3">Tanggal dan Waktu Mulai : </h6>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" name="start_date" placeholder="Tanggal dan Waktu mulai Event" value="<?= old('start_date') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Tanggal dan Waktu Selesai : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" class="form-control form-control-user" name="end_date" placeholder="Tanggal dan Waktu Selesai Event" value="<?= old('end_date') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Penanggung Jawab</h6>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <select class="form-control" name="id">
                                    <?php foreach ($users as $user) : ?>
                                        <option><?= $user['id']; ?><p>. <?= $user['fullname']; ?></p>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Tambah Event
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>