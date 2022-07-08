 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Form Update Produk</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="index">Index</a></li>
                         <li class="breadcrumb-item active">Update Data <?= $mhsedit->nama ?></li>
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
                 <h3 class="card-title"><b>Input Your Produk</b></h3>
             </div>
             <div class="card-body">
                 <?php $hidden = ['idedit' => $mhsedit->kode] ?>
                 <?php echo form_open('Produk/save', '', $hidden) ?>
                 <div class="card-body">
                     <label for="kode" class="col-form-label">Kode</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-id-card"></i>
                             </div>
                         </div>
                         <input id="kode" name="kode" value="<?= $mhsedit->kode ?>" type="text" class="form-control">
                     </div>
                 </div>

                 <div class="card-body">
                     <label for="nama" class="col-form-label">Nama</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-address-book"></i>
                             </div>
                         </div>
                         <input id="nama" name="nama" value="<?= $mhsedit->nama ?>" type="text" class="form-control">
                     </div>
                 </div>

                 <div class="card-body">
                     <?php $hidden = ['idedit' => $mhsedit->stok] ?>
                     <?php echo form_open('produk/save', '', $hidden) ?>
                     <div class="card-body">
                         <label for="stok" class="col-form-label">Stok</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-id-card"></i>
                                 </div>
                             </div>
                             <input id="stok" name="stok" value="<?= $mhsedit->stok ?>" type="number"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="harga_beli" class="col-form-label">Harga Beli</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa-city"></i>
                                 </div>
                             </div>
                             <input id="harga_beli" name="harga_beli" value="<?= $mhsedit->harga_beli ?>" type="number"
                                 class="form-control">
                         </div>

                     </div>
                     <div class="card-body">
                         <label for="harga_jual" class="col-form-label">Harga Jual</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-calendar"></i>
                                 </div>
                             </div>
                             <input id="harga_jual" name="harga_jual" value="<?= $mhsedit->harga_jual ?>" type="number"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="jenis_id" class="col-form-label">Jenis ID</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-graduation-cap"></i>
                                 </div>
                             </div>
                             <select id="jenis_id" name="jenis_id" class="custom-select">
                                 <option value="Silahkan pilih jenis id Produk Anda">Silahkan pilih Jenis ID Produk
                                 </option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                             </select>
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="deskripsi" class="col-form-label">Deskripsi</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa fa-paragraph"></i>
                                 </div>
                             </div>
                             <input id="deskripsi" name="deskripsi" value="<?= $mhsedit->deskripsi ?>" type="text"
                                 class="form-control"
                                 onchange="this.value = (this.value > 4.00) ? 4.00 : ((this.value < 0) ? 0 : this.value);">
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