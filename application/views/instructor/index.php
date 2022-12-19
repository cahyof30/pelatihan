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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMaterialModal">Add New Material</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Title</th>
                        <th scope="col">URL</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($material as $mat) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $mat['course']; ?></td>
                            <td><?= $mat['title']; ?></td>
                            <td><?= $mat['url']; ?></td>
                            <td>
                                <a href="<?= base_url('instructor/deleteUser/') . $mat['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus ?')" class="badge badge-danger">Delete</a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="newMaterialModal" tabindex="-1" role="dialog" aria-labelledby="newMaterialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="newMaterialModalLabel">Add New Material</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('instructor'); ?> " method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="course_id" id="course_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($material as $mat) : ?>
                                <option value="<?= $mat['id'] ?>"><?= $mat['course'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Material Title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="URL to Meeting">
                    </div>
                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>