<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Tambah Event</h4>
            <form action="<?= base_url(); ?>/Admin/tambahsiswa" method="post" class="user">

                <?= csrf_field() ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Nis : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="nis" placeholder="Nomor Induk Siswa">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Nama lengkap siswa : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user " name="nama" placeholder="Nama lengkap siswa" value="<?= old('nama') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Kelas : </h6>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-user" name="kelas" placeholder="Kelas" value="<?= old('kelas') ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <h6 class="display-6 mt-3">Kontak (No Handphone) : </h6>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="kontak" placeholder="No Handphone" value="<?= old('kontak') ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Event yang akan diikuti oleh siswa</h6>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <select class="form-control" name="id">
                                    <?php foreach ($events as $event) : ?>
                                        <option>
                                            <?= $event['id']; ?>
                                            <p>. <?= $event['nama_event']; ?></p>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Tambah Siswa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>