 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><b>Detail users</b></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?= base_url() ?>users/index">Index</a></li>
                         <li class="breadcrumb-item active"><?= $users->id ?></li>
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
                 <h3 class="card-title"><b>users </b></h3>
             </div>

             <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                         <h2>Detail users</h2>
                     </div>
                     <div class="col-8 table-responsive">
                         <table class="table table-hover table-bordered">
                             <tr>
                                 <td><b>id</b></td>
                                 <td><?= $users->id ?></td>
                             </tr>
                             <tr>
                                 <td><b>Nama</b></td>
                                 <td><?= ucwords($users->username) ?></td>
                             </tr>
                             <tr>
                                 <td><b>password</b></td>
                                 <td><?= $users->password ?></td>
                             </tr>
                             <tr>
                                 <td><b>email</b></td>
                                 <td><?= ucwords($users->email) ?></td>
                             </tr>
                             <tr>
                                 <td><b>created_at</b></td>
                                 <td><?= $users->created_at ?></td>
                             </tr>
                             <tr>
                                 <td><b>last_login</b></td>
                                 <td><?= $users->last_login ?></td>
                             </tr>
                             <tr>
                                 <td><b>status</b></td>
                                 <td><?= $users->status ?></td>
                             </tr>
                             <tr>
                                 <td><b>role</b></td>
                                 <td><?= $users->role ?></td>
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