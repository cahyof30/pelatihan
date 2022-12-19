<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Title</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dashboard as $ds) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $ds['name']; ?></td>
                            <td><?= $ds['email']; ?></td>
                            <td><?= $ds['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/deleteUser/') . $ds['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus ?')" class="badge badge-danger">Delete</a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>