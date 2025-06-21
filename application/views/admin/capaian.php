    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" class="p-4">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-gray-800">Capaian</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#capaianModal">Tambah Capaian</button>
                </div>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-primary"><?= $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                <?php endif; ?>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Capaian</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($achievement)) : ?>
                                        <?php 
                                        $no = 1;
                                        foreach ($achievement as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $row->name ?></td>
                                                <td><?= $row->achievement ?></td>
                                                <td class="">
                                                    <div style="width: 50px; height: 50px; display: inline-block; background: #f8f9fa; border: 1px solid #ddd; padding: 4px;">
                                                        <img src="<?= base_url('uploads/capaian/' . $row->image) ?>" alt="<?= $row->name ?>"
                                                            style="width: 100%; height: 100%; object-fit: contain;">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-warning btn-edit"
                                                        data-id="<?= $row->id_achievement ?>"
                                                        data-name="<?= htmlspecialchars($row->name, ENT_QUOTES) ?>"
                                                        data-achievement="<?= htmlspecialchars($row->achievement, ENT_QUOTES) ?>"
                                                        data-image="<?= $row->image ?>"
                                                        data-toggle="modal" data-target="#capaianModal">
                                                        Edit
                                                    </a>

                                                    <a href="<?= base_url('Capaian/delete/' . $row->id_achievement) ?>"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus Capaian ini?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">Tidak ada data capaian.</td>
                                        </tr>
                                    <?php endif; ?>                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

    <!-- Modal: Tambah / Edit capaian -->
    <div class="modal fade" id="capaianModal" tabindex="-1" role="dialog" aria-labelledby="capaianModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" enctype="multipart/form-data" id="form-capaian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="capaianModalLabel">Tambah Capaian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_achievement" id="id_achievement">

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="achievement">Capaian Hafalan</label>
                            <input type="text" class="form-control" name="achievement" id="achievement" required>
                        </div>
                        <input type="hidden" name="old_image" id="old_image">

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" name="image" id="image">
                            <br>
                            <img id="preview-old-image" src="" alt="Gambar lama" width="120" class="mt-2" style="display: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- End of Page Wrapper -->