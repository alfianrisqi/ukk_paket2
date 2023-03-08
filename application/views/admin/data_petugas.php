<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Petugas</h1>
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
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>No. Telepon</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($petugas as $pdn) { ?>
                            <tr>
                                <td><?= $no++; ?>.</td>
                                <td><?= $pdn['nama_petugas'] ?></td>
                                <td><?= $pdn['username']; ?></td>
                                <td><?= $pdn['telp'] ?></td>
                                <td><?= $pdn['level'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>