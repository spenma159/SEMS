<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selalu ingat untuk bersyukur :)</h1>
    <a href="/Admin/addevent" class="btn btn-primary mb-4">+ Tambah Event</a>
    <a href="/Admin/addsiswa" class="btn btn-primary mb-4">+ Tambah Peserta</a>

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
                                <a href="<?= base_url('Admin/tables/' . $user->eventid); ?>" class="btn btn-info">Detail</a>
                                <a href="<?= base_url('Admin/editevent/' . $user->eventid); ?>" class="btn btn-success">Edit</a>
                                <form action="<?= base_url('Admin/tables/' . $user->eventid); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>