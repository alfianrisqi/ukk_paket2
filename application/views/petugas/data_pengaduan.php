<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengaduan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Pelapor</th>
                            <th>Isi Pengaduan</th>
                            <th style="width: 100px;">Foto</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Status Verifikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pengaduan as $pdn) { ?>
                            <tr>
                                <td><?= $no++; ?>.</td>
                                <td><?= $pdn['nama'] ?></td>
                                <td><?= $pdn['isi_laporan']; ?></td>
                                <td><img width="100px" src="<?= base_url('image/') . $pdn['foto'] ?>"></td>
                                <td><?= $pdn['tgl_pengaduan'] ?></td>
                                <td><?php
                                    if ($pdn['status'] == 'selesai') {
                                        echo '<span class="badge bg-success">SELESAI</span>';
                                    } elseif ($pdn['status'] == 'proses') {
                                        echo '<span class="badge bg-warning">PROSES</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">MENUNGGU</span>';
                                    } ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-detail<?= $pdn['id_pengaduan'] ?>">
                                        <i class="fas fa-search"> Detail</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php foreach ($pengaduan as $pdn) : ?>
    <!-- modal -->
    <div class="modal fade" id="modal-detail<?= $pdn['id_pengaduan'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/tanggapi') ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="id_pengaduan" id="id_pengaduan" value="<?= $pdn['id_pengaduan'] ?>" hidden>
                            <input type="text" name="id_petugas" id="id_petugas" value="<?= $petugas['id_petugas'] ?>" hidden>
                            <input type="text" name="nik" id="nik" value="<?= $pdn['nik'] ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pengadu</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $pdn['nama'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="isi_laporan">Isi Pengaduan</label>
                            <input type="text" name="isi_laporan" id="isi_laporan" class="form-control" value="<?= $pdn['isi_laporan'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <div>
                                <img src="<?= base_url('image/') . $pdn['foto'] ?>" width="100px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <?php foreach ($tanggapan as $t) : ?>
                                <?php if ($t['id_pengaduan'] == $pdn['id_pengaduan']) : ?>
                                    <input type="text" class="form-control" placeholder="Belum Ditanggapi" value="<?= $t['tanggapan'] ?>" readonly>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Status : </label>
                            <?php
                            if ($pdn['status'] == 'selesai') {
                                echo '<span class="badge bg-success">SELESAI</span>';
                            } elseif ($pdn['status'] == 'proses') {
                                echo '<span class="badge bg-warning">PROSES</span>';
                            } else {
                                echo '<span class="badge bg-danger">MENUNGGU</span>';
                            } ?>
                        </div>
                        <?php if ($pdn['status'] != 'selesai') : ?>
                            <div class="form-group">
                                <label for="tanggapi">Isi Tanggapan</label>
                                <input type="text" class="form-control" name="tanggapan" id="tanggapan" placeholder="Tanggapi Pengaduan">
                            </div>
                            <div class="form-group">
                                <label>Verifikasi</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach; ?>