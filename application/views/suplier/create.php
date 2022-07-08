<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Form Suplier</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><b>Input Your Suplier</b></h3>
            </div>
            <div class="card-body">
                <?php echo form_open('Suplier/save') ?>
                <div class="form-group row">
                    <label for="id" class="col-form-label">ID</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card"></i>
                            </div>
                        </div>
                        <input id="id" name="id" placeholder="Masukkan id Anda" type="number" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-form-label">Nama</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label for="kota" class="col-form-label">Kota</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-id-card"></i>
                                </div>
                            </div>
                            <input id="kota" name="kota" placeholder="Masukkan kota" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kontak" class="col-form-label">Kontak</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa-city"></i>
                            </div>
                        </div>
                        <input id="kontak" name="kontak" placeholder="Masukkan Harga Beli" type="text"
                            class="form-control">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-form-label">Alamat</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telpon" class="col-form-label">Telpon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa fa-paragraph"></i>
                            </div>
                        </div>
                        <input id="telpon" name="telpon" placeholder="Masukkan nomor telpon " type="number"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->