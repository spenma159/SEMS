<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="align-center text-center mb-4 mt-4">Tambah Event</h4>
            <form action="<?= base_url(); ?>/Admin/tambahsiswaevent" method="post" class="user">

                <?= csrf_field() ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h6 class="display-6 mt-3">Siswa yang ingin dimasukan</h6>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <select class="form-control" name="identry">
                                    <?php foreach ($entries as $entry) : ?>
                                        <option>
                                            <?= $entry['id']; ?>
                                            <p>. <?= $entry['nama']; ?></p>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
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
        </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>