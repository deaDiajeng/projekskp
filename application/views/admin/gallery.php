    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" class="p-4">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-gray-800">Galeri</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#galleryModal">Tambah Galeri</button>
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
                                        <th class="text-center">Kegiatan</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($gallery)) : ?>
                                        <?php 
                                        $no = 1;
                                        foreach ($gallery as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $row->event ?></td>
                                                <td class="">
                                                    <div style="width: 50px; height: 50px; display: inline-block; background: #f8f9fa; border: 1px solid #ddd; padding: 4px;">
                                                        <img src="<?= base_url('uploads/galeri/' . $row->image) ?>" alt="<?= $row->event ?>"
                                                            style="width: 100%; height: 100%; object-fit: contain;">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-warning btn-edit"
                                                        data-id="<?= $row->id_gallery ?>"
                                                        data-event="<?= htmlspecialchars($row->event, ENT_QUOTES) ?>"
                                                        data-image="<?= $row->image ?>"
                                                        data-toggle="modal" data-target="#galleryModal">
                                                        Edit
                                                    </a>

                                                    <a href="<?= base_url('gallery/delete/' . $row->id_gallery) ?>"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus gallery ini?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">Tidak ada data galeri.</td>
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

    <!-- Modal: Tambah / Edit Agenda -->
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('Gallery/save') ?>" method="post" enctype="multipart/form-data" id="form-gallery">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel">Tambah Galeri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_gallery" id="id_gallery">

                        <div class="form-group">
                            <label for="title">Kegiatan</label>
                            <input type="text" class="form-control" name="event" id="event" required>
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