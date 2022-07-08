 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Detail Produk</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?= base_url() ?>produk/index">Index</a></li>
                         <li class="breadcrumb-item active"><?= $produk->kode ?></li>
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
                 <h3 class="card-title"><b>produk, <?= ucwords($produk->nama) ?></b></h3>
             </div>

             <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                         <h2>Detail Produk</h2>
                     </div>
                     <div class="col-8 table-responsive">
                         <table class="table table-hover table-bordered">
                             <tr>
                                 <td><b>Kode</b></td>
                                 <td><?= $produk->kode ?></td>
                             </tr>
                             <tr>
                                 <td><b>Nama</b></td>
                                 <td><?= ucwords($produk->nama) ?></td>
                             </tr>
                             <tr>
                                 <td><b>Stok</b></td>
                                 <td><?= $produk->stok ?></td>
                             </tr>
                             <tr>
                                 <td><b>Harga Beli</b></td>
                                 <td><?= ucwords($produk->harga_beli) ?></td>
                             </tr>
                             <tr>
                                 <td><b>Harga Jual</b></td>
                                 <td><?= $produk->harga_jual ?></td>
                             </tr>
                             <tr>
                                 <td><b>Jenis ID</b></td>
                                 <td><?= $produk->jenis_id ?></td>
                             </tr>
                             <tr>
                                 <td><b>Deskripsi</b></td>
                                 <td><?= '<b>' . $produk->deskripsi . '</b>' ?></td>
                             </tr>
                         </table>
                     </div>
                     <div class="col-4 text-center">
                         <?php echo form_open_multipart('produk/upload') ?>

                         <input type="hidden" name="kode" value="<?= $produk->kode ?>">

                         <?php
                            $img = base_url('/uploads/' . $produk->foto);
                            // $array = get_headers($img);
                            // $string = $array[0];

                            // if (strpos($string, "200")) {
                            //    echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                            // } else {
                            //    echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto" width="100%"/>';
                            // }
                            if ($produk->foto == null) {
                                echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto" width="100%"/>';
                                echo '<input type="file" name="fotomhs" class="btn btn-info mt-2">';
                                echo '<button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button>';
                            } else {
                                echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                            }
                            ?>
                         <!-- <br> -->
                         <!-- Nama File <?= $produk->foto ?> -->
                         <!-- <br> -->
                         <!-- <input type="file" name="fotomhs" class="btn btn-info"> -->
                         <!-- <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button> -->

                         <?php echo form_close() ?>
                     </div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->