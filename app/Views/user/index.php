<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Event yang ditangani</h1>

    <div class="row">
        <div class="col-lg-12">
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Tipe Event</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->nama_event; ?></td>
                            <td><?= $user->tipe_event; ?></td>
                            <td><?= $user->deskripsi; ?></td>
                            <td>
                                <a href="<?= base_url('user/absensi/' . $user->eventid); ?>" class="btn btn-info">Absen</a>
                                <a href="<?= base_url('user/hasil/' . $user->eventid); ?>" class="btn btn-success">Hasil</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>