<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <td>Nama Event</td>
                <td>Ruangan</td>
                <td>Penanggung jawab</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $user->nama_event; ?></td>
                    <td><?= $user->tipe_event; ?></td>
                    <td><?= $user->fullname; ?></td>
                    <td><a href="/Events/<?= $user->eventid; ?>" class="btn btn-success">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endsection(); ?>