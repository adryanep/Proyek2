 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Detail suplier</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?= base_url() ?>suplier/index">Index</a></li>
                         <li class="breadcrumb-item active"><?= $suplier->id ?></li>
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
                 <h3 class="card-title"><b>suplier, <?= ucwords($suplier->nama) ?></b></h3>
             </div>

             <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                         <h2>Detail suplier</h2>
                     </div>
                     <div class="col-8 table-responsive">
                         <table class="table table-hover table-bordered">
                             <tr>
                                 <td><b>id</b></td>
                                 <td><?= $suplier->id ?></td>
                             </tr>
                             <tr>
                                 <td><b>Nama</b></td>
                                 <td><?= ucwords($suplier->nama) ?></td>
                             </tr>
                             <tr>
                                 <td><b>Kota</b></td>
                                 <td><?= $suplier->kota ?></td>
                             </tr>
                             <tr>
                                 <td><b>Kontak</b></td>
                                 <td><?= ucwords($suplier->kontak) ?></td>
                             </tr>
                             <tr>
                                 <td><b>Alamat</b></td>
                                 <td><?= $suplier->alamat ?></td>
                             </tr>
                             <tr>
                                 <td><b>Telpon</b></td>
                                 <td><?= $suplier->telpon ?></td>
                             </tr>
                         </table>
                     </div>

                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->