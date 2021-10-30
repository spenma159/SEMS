<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <?= user()->username; ?> Selamat Bekerja</h1>


    <div class="row">
        <div class="col-lg-8">
            <a href="/admin/adduser" class="btn btn-primary mb-4">+ Tambah</a>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->fullname; ?></td>
                            <td><?= $user->name; ?></td>
                            <td>
                                <a href="<?= base_url('Admin/' . $user->userid); ?>" class="btn btn-info">Detail</a>
                                <a href="<?= base_url('Admin/edit/' . $user->userid); ?>" class="btn btn-success">Edit</a>
                                <form action="<?= base_url('Admin/' . $user->userid); ?>" method="post" class="d-inline">
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