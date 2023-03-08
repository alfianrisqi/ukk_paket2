<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Buat Pengaduan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid 
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">

                    <form>
                        <div class="card-body">
                            <div class="form-group col-lg-6">
                                <label for="isi_laporan">Buat Laporan</label>
                                <input type="text" class="form-control" name="isi_laporan" id="isi_laporan" placeholder="Masukan Pengaduan">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="file" class="form-control between" id="foto" name="foto">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" name="nik" id="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>