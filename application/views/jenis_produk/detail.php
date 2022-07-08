<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Detail Jenis Produk</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?= base_url() ?>jenis_produk/index">Index</a></li>
                         <li class="breadcrumb-item active"><?= $jenis_produk->nama ?></li>
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
                 <h3 class="card-title"><b>Jenis Produk, <?= ucwords($jenis_produk->nama) ?></b></h3>
             </div>

             <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                         <h2>Detail Produk</h2>
                     </div>
                     <div class="col-8 table-responsive">
                         <table class="table table-hover table-bordered">
                             <tr>
                                 <td><b>id</b></td>
                                 <td><?= $jenis_produk->id ?></td>
                             </tr>
                             <tr>
                                 <td><b>nama</b></td>
                                 <td><?= $jenis_produk->nama ?></td>
                             </tr>
                         </table>
                     </div>
                     <div class="col-4 text-center">
                         <?php echo form_open_multipart('jenis_produk/upload') ?>

                         <input type="hidden" name="nama" value="<?= $jenis_produk->id ?>">
                     </div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->