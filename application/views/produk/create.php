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
                 <h3 class="card-title"><b>Input Your Produk</b></h3>
             </div>
             <div class="card-body">
                 <?php echo form_open('Produk/save') ?>
                 <div class="form-group row">
                     <label for="kode" class="col-form-label">Kode</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-id-card"></i>
                             </div>
                         </div>
                         <input id="kode" name="kode" placeholder="Masukkan kode Anda" type="text" class="form-control"
                             required>
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
                         <label for="stok" class="col-form-label">Stok</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-id-card"></i>
                                 </div>
                             </div>
                             <input id="stok" name="stok" placeholder="Masukkan jumlah stok" type="number"
                                 class="form-control">
                         </div>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="harga_beli" class="col-form-label">Harga Beli</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa-solid fa-city"></i>
                             </div>
                         </div>
                         <input id="harga_beli" name="harga_beli" placeholder="Masukkan Harga Beli" type="number"
                             class="form-control">
                     </div>

                 </div>
                 <div class="form-group row">
                     <label for="harga_jual" class="col-form-label">Harga Jual</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-calendar"></i>
                             </div>
                         </div>
                         <input id="harga_jual" name="harga_jual" placeholder="Masukkan Harga Jual" type="number"
                             class="form-control">
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="jenis_id" class="col-form-label">Jenis Produk</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-graduation-cap"></i>
                             </div>
                         </div>
                         <select id="jenis_id" name="jenis_id" class="custom-select">
                             <option value="Silahkan pilih jenis_id Anda">Silahkan pilih Jenis Produk Anda</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                         </select>
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="deskripsi" class="col-form-label">Deskripsi</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa-solid fa fa-paragraph"></i>
                             </div>
                         </div>
                         <input id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi Produk" type="text"
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