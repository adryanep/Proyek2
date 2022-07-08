<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Form Produk</b></h1>
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
                <h3 class="card-title"><b>Input Your Jenis Produk</b></h3>
            </div>
            <div class="card-body">
                <?php echo form_open('jenis_produk/save') ?>
                <div class="form-group row">
                    <label for="kode" class="col-form-label">id</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card"></i>
                            </div>
                        </div>
                        <input id="id" name="id" placeholder="Masukkan kode Anda" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php echo form_open('jenis_produk/save') ?>
                <div class="form-group row">
                    <label for="kode" class="col-form-label">nama jenis produk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukkan Nama Jenis Produk" type="text"
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