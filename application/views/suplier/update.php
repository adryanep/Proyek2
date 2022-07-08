 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Form Update suplier</b></h1>
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
                 <h3 class="card-title"><b>Input Your suplier</b></h3>
             </div>
             <div class="card-body">
                 <?php $hidden = ['idedit' => $mhsedit->id] ?>
                 <?php echo form_open('suplier/save', '', $hidden) ?>
                 <div class="card-body">
                     <label for="id" class="col-form-label">id</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-id-card"></i>
                             </div>
                         </div>
                         <input id="id" name="id" value="<?= $mhsedit->id ?>" type="number" class="form-control">
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
                     <?php $hidden = ['idedit' => $mhsedit->kota] ?>
                     <?php echo form_open('suplier/save', '', $hidden) ?>
                     <div class="card-body">
                         <label for="kota" class="col-form-label">kota</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-id-card"></i>
                                 </div>
                             </div>
                             <input id="kota" name="kota" value="<?= $mhsedit->kota ?>" type="text"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="kontak" class="col-form-label">kontak</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa-city"></i>
                                 </div>
                             </div>
                             <input id="kontak" name="kontak" value="<?= $mhsedit->kontak ?>" type="text"
                                 class="form-control">
                         </div>

                     </div>
                     <div class="card-body">
                         <label for="alamat" class="col-form-label">alamat</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-calendar"></i>
                                 </div>
                             </div>
                             <input id="alamat" name="alamat" value="<?= $mhsedit->alamat ?>" type="text"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="telpon" class="col-form-label">telpon</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa fa-paragraph"></i>
                                 </div>
                             </div>
                             <input id="telpon" name="telpon" value="<?= $mhsedit->telpon ?>" type="number"
                                 class="form-control">
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