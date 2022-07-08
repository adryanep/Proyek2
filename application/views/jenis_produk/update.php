<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Form Update Jenis Produk</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index">Index</a></li>
                        <li class="breadcrumb-item active">Update Data <?= $mhsedit->id ?></li>
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
                <?php echo form_open('jenis_produk/save', '') ?>
                <input type="hidden" name="idedit" value="<?= $mhsedit->id ?>">
                <input type="hidden" name="id" value="<?= $mhsedit->id ?>">
                <div class="card-body">
                    <label for="nama" class="col-form-label">nama</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" value="<?= $mhsedit->id ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="card-body">
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