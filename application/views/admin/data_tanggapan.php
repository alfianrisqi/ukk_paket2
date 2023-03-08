<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Tanggapan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('admin/generate_laporan') ?>" class="btn btn-primary mb-3"><i class="fas fa-print"> Print</i></a>
                    <!-- cari  -->
                    <form action="<?= base_url('admin/cari') ?>" class="col-md-4">
                        <div class="input-group mb-3">
                            <select class="form-control" name="status" id="status">
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Pelapor</th>
                            <th>Isi Pengaduan</th>
                            <th style="width: 100px;">Foto</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Username Penanggap</th>
                            <th>Tanggal Tanggapan</th>
                            <th>Tanggapan</th>
                            <th>Status Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($petugas as $pdn) { ?>
                            <tr>
                                <td><?= $no++; ?>.</td>
                                <td><?= $pdn['nama'] ?></td>
                                <td><?= $pdn['isi_laporan']; ?></td>
                                <td><img width="100px" src="<?= base_url('image/') . $pdn['foto'] ?>"></td>
                                <td><?= $pdn['tgl_pengaduan'] ?></td>
                                <td><?= $pdn['nama_petugas'] ?></td>
                                <td><?= $pdn['tgl_tanggapan'] ?></td>
                                <td><?= $pdn['tanggapan'] ?></td>
                                <td><?php
                                    if ($pdn['status'] == 'selesai') {
                                        echo '<span class="badge bg-success">SELESAI</span>';
                                    } elseif ($pdn['status'] == 'proses') {
                                        echo '<span class="badge bg-warning">PROSES</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">MENUNGGU</span>';
                                    } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>