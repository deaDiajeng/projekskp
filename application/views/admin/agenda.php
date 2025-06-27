    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" class="p-4">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-gray-800">Agenda</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#agendaModal">Tambah Agenda</button>
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
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($agenda)) : ?>
                                        <?php
                                        $no = 1;
                                        foreach ($agenda as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $row->title ?></td>
                                                <td><?= character_limiter(strip_tags($row->descript), 20) ?></td>
                                                <td class="text-center"><?= date('d M Y', strtotime($row->date)) ?></td>
                                                <td class="">
                                                    <div style="width: 50px; height: 50px; display: inline-block; background: #f8f9fa; border: 1px solid #ddd; padding: 4px;">
                                                        <img src="<?= base_url('uploads/agenda/' . $row->image) ?>" alt="<?= $row->title ?>"
                                                            style="width: 100%; height: 100%; object-fit: contain;">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-warning btn-edit"
                                                        data-id="<?= $row->id_agenda ?>"
                                                        data-title="<?= htmlspecialchars($row->title, ENT_QUOTES) ?>"
                                                        data-descript="<?= htmlspecialchars($row->descript ?? '', ENT_QUOTES) ?>"
                                                        data-date="<?= $row->date ?>"
                                                        data-image="<?= $row->image ?>"
                                                        data-toggle="modal" data-target="#agendaModal">
                                                        Edit
                                                    </a>

                                                    <a href="<?= base_url('Agenda/delete/' . $row->id_agenda) ?>"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus agenda ini?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">Tidak ada data agenda.</td>
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
    <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('Agenda/save') ?>" method="post" enctype="multipart/form-data" id="form-agenda">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agendaModalLabel">Tambah Agenda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_agenda" id="id_agenda">

                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    <div class="form-group">
                        <label for="descript">Keterangan</label>
                        <textarea class="form-control" name="descript" id="descript" rows="4"></textarea>
                    </div>
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" class="form-control" name="date" id="date" required>
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