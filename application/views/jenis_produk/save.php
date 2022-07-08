 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Data Jenis Produk</b></h1>
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
                 <h3 class="card-title"><b>List Jenis Produk</b></h3>
             </div>
             <div class="card-body">
                 id : <?= '<b>' . $mhs->id . '</b>' ?>
                 <br>
                 Nama : <?= '<b>' . ucwords($mhs->nama) . '</b>' ?>
                 <br>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

         <!-- Default box -->
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h3 class="card-title"><b>Tabel Jenis Produk</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">nama</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <tr>
                                     <td><?= $nomor ?></td>
                                     <td><?= $mhs->id ?></td>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->