 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Form Update users</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="index">Index</a></li>
                         <li class="breadcrumb-item active">Update Data <?= $mhsedit->username ?></li>
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
                 <h3 class="card-title"><b>Input Your users</b></h3>
             </div>
             <div class="card-body">
                 <?php $hidden = ['idedit' => $mhsedit->id] ?>
                 <?php echo form_open('users/save', '', $hidden) ?>
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
                     <label for="username" class="col-form-label">username</label>
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-address-book"></i>
                             </div>
                         </div>
                         <input id="username" name="username" value="<?= $mhsedit->username ?>" type="text"
                             class="form-control">
                     </div>
                 </div>

                 <div class="card-body">
                     <?php $hidden = ['idedit' => $mhsedit->password] ?>
                     <?php echo form_open('users/save', '', $hidden) ?>
                     <div class="card-body">
                         <label for="password" class="col-form-label">password</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-id-card"></i>
                                 </div>
                             </div>
                             <input id="password" name="password" value="<?= $mhsedit->password ?>" type="text"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="email" class="col-form-label">email</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa-city"></i>
                                 </div>
                             </div>
                             <input id="email" name="email" value="<?= $mhsedit->email ?>" type="text"
                                 class="form-control">
                         </div>

                     </div>
                     <div class="card-body">
                         <label for="created_at" class="col-form-label">created_at</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa fa-calendar"></i>
                                 </div>
                             </div>
                             <input id="created_at" name="created_at" value="<?= $mhsedit->created_at ?>" type="date"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="last_login" class="col-form-label">last_login</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa fa-paragraph"></i>
                                 </div>
                             </div>
                             <input id="last_login" name="last_login" value="<?= $mhsedit->last_login ?>" type="time"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="status" class="col-form-label">status</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa fa-paragraph"></i>
                                 </div>
                             </div>
                             <input id="status" name="status" value="<?= $mhsedit->status ?>" type="number"
                                 class="form-control">
                         </div>
                     </div>

                     <div class="card-body">
                         <label for="role" class="col-form-label">role</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">
                                     <i class="fa-solid fa fa-paragraph"></i>
                                 </div>
                             </div>
                             <input id="role" name="role" value="<?= $mhsedit->role ?>" type="text"
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