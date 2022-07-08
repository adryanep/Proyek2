 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Data Suplier</b></h1>
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
                 <h3 class="card-title"><b>List Suplier</b></h3>
             </div>
             <div class="card-body">
                 id : <?= '<b>' . $mhs->id . '</b>' ?>
                 <br>
                 Nama Lengkap : <?= '<b>' . ucwords($mhs->nama) . '</b>' ?>
                 <br>
                 kota : <?= $mhs->kota ?>
                 <br>
                 kontak : <?= ucwords($mhs->kontak) ?>
                 <br>
                 Alamat : <?= $mhs->alamat ?>
                 <br>
                 Telpon : <?= $mhs->telpon ?>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

         <!-- Default box -->
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h3 class="card-title"><b>Tabel Suplier</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">id</th>
                                     <th style="vertical-align: middle;">Nama Lengkap</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <th style="vertical-align: middle;">kontak</th>
                                     <th style="vertical-align: middle;">Alamat</th>
                                     <th style="vertical-align: middle;">Telpon</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <tr>
                                     <td><?= $nomor ?></td>
                                     <td><?= $mhs->id ?></td>
                                     <td><?= ucwords($mhs->nama) ?></td>
                                     Suplier<td class="text-center"><?= $mhs->kota ?></td>
                                     <td><?= ucwords($mhs->kontak) ?></td>
                                     <td><?= $mhs->alamat ?></td>
                                     <td><?= $mhs->telpon ?></td>
                                 </tr>
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