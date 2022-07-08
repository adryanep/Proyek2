 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Data Produk</b></h1>
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
                 <h3 class="card-title"><b>List Produk</b></h3>
             </div>
             <div class="card-body">
                 Kode : <?= '<b>' . $mhs->kode . '</b>' ?>
                 <br>
                 Nama Lengkap : <?= '<b>' . ucwords($mhs->nama) . '</b>' ?>
                 <br>
                 Stok : <?= $mhs->stok ?>
                 <br>
                 Harga Beli : <?= ucwords($mhs->harga_beli) ?>
                 <br>
                 Harga Jual : <?= $mhs->harga_jual ?>
                 <br>
                 Jenis ID Produk : <?= $mhs->jenis_id ?>
                 <br>
                 deskripsi : <?= '<b>' . $mhs->deskripsi . '</b>' ?>
                 <br>
                 Predikat : <?= '<b>' . $mhs->predikat() . '</b>' ?>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

         <!-- Default box -->
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h3 class="card-title"><b>Tabel Produk</b></h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-12 table-responsive">
                         <table class="table table-striped table-hover table-bordered">
                             <thead class="thead-dark align-center">
                                 <tr>
                                     <th style="vertical-align: middle;">No</th>
                                     <th style="vertical-align: middle;">kode</th>
                                     <th style="vertical-align: middle;">Nama Lengkap</th>
                                     <th style="vertical-align: middle;">Jenis Kelamin</th>
                                     <th style="vertical-align: middle;">Harga Beli</th>
                                     <th style="vertical-align: middle;">Harga Jual</th>
                                     <th style="vertical-align: middle;">Jenis ID Produk</th>
                                     <th style="vertical-align: middle;">deskripsi</th>
                                     <th style="vertical-align: middle;">Predikat</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $nomor = 1; ?>
                                 <tr>
                                     <td><?= $nomor ?></td>
                                     <td><?= $mhs->kode ?></td>
                                     <td><?= ucwords($mhs->nama) ?></td>
                                     Produk<td class="text-center"><?= $mhs->stok ?></td>
                                     <td><?= ucwords($mhs->harga_beli) ?></td>
                                     <td><?= $mhs->harga_jual ?></td>
                                     <td><?= $mhs->jenis_id ?></td>
                                     <td><?= '<b>' . $mhs->deskripsi . '</b>' ?></td>
                                     <td><?= '<b>' . $mhs->predikat() . '</b>' ?></td>
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