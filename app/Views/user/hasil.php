<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h3 class="text-center">Hasil dari Event</h3>
    <div class="row">
        <div class="col-lg-2">
            <h5>Event :</h5>
        </div>
        <div class="col-lg-5">
            <h5><?= $event->nama_event; ?></h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <form action="<?= base_url(); ?>/user/tambahhasil" method="post" class="user">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="hidden" class="form-control" name="id_event" value="<?= $event->id; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <p class="lead">Juara satu :</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <select class="form-control" name="juara1">
                                <?php foreach ($events as $event) : ?>
                                    <option>
                                        <?= $event->entryid; ?><p>. <?= $event->nama; ?></p>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <p class="lead">Juara dua :</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <select class="form-control" name="juara2">
                                <?php foreach ($events as $event) : ?>
                                    <option>
                                        <?= $event->entryid; ?><p>. <?= $event->nama; ?></p>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <p class="lead">Juara tiga :</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <select class="form-control" name="juara3">
                                <?php foreach ($events as $event) : ?>
                                    <option>
                                        <?= $event->entryid; ?><p>. <?= $event->nama; ?></p>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>

            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>