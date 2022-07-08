<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Form users</b></h1>
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
                <h3 class="card-title"><b>Input Your users</b></h3>
            </div>
            <div class="card-body">
                <?php echo form_open('users/save') ?>
                <div class="form-group row">
                    <label for="id" class="col-form-label">ID</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card"></i>
                            </div>
                        </div>
                        <input id="id" name="id" placeholder="Masukkan id Anda" type="number" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-form-label">username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="username" name="username" placeholder="Masukkan username Anda" type="text"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <label for="password" class="col-form-label">password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-id-card"></i>
                                </div>
                            </div>
                            <input id="password" name="password" placeholder="Masukkan password" type="text"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-form-label">email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa-city"></i>
                            </div>
                        </div>
                        <input id="email" name="email" placeholder="Masukkan email anda" type="text"
                            class="form-control">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="cread_at" class="col-form-label">cread_at</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <input id="cread_at" name="cread_at" placeholder="cread_at" type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="last_login" class="col-form-label">Last Login</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa fa-paragraph"></i>
                            </div>
                        </div>
                        <input id="last_login" name="last_login" placeholder="last_login " type="time"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-form-label">status</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa fa-paragraph"></i>
                            </div>
                        </div>
                        <input id="status" name="status" placeholder="status " type="number" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-form-label">role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-solid fa fa-paragraph"></i>
                            </div>
                        </div>
                        <input id="role" name="role" placeholder="role " type="text" class="form-control">
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