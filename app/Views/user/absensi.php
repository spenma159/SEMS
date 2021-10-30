<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Detail Event</h4>
            <div class="row">
                <div class="col-lg-3">
                    <p>Nama Event : </p>
                </div>
                <div class="col-lg-9">
                    <p><?= $event->nama_event; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p>Tipe Event : </p>
                </div>
                <div class="col-lg-9">
                    <p><?= $event->tipe_event; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p>Deskripsi: </p>
                </div>
                <div class="col-lg-9">
                    <p><?= $event->deskripsi; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p>Tanggal Mulai : </p>
                </div>
                <div class="col-lg-9">
                    <p><?= $event->start_date; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p>Tanggal selesai : </p>
                </div>
                <div class="col-lg-9">
                    <p><?= $event->end_date; ?></p>
                </div>
            </div>




            <form action="<?= base_url('user/tambahabsensi/' . $event->id); ?>" method="post" class="user">

                <?= csrf_field() ?>
                <h4 class="mt-5 text-center">Absensi</h4>

                <?php foreach ($entry as $entry) : ?>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="lead"><?= $entry->nama; ?> :</p>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <select class="form-control" name="absensi">
                                    <option value="hadir">
                                        Hadir
                                    </option>
                                    <option value="tidak hadir">
                                        Tidak Hadir
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>