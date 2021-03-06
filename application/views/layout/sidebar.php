  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('index.php" class="brand-link') ?>">
          <img src="<?= base_url('public/dist/img/CodeIgniter.png') ?>" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">CodeIgniter X LTE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">
                      <?php
                        if ($this->session->has_userdata('USERNAME')) {
                            echo $this->session->userdata('USERNAME');
                            echo ' - ' . $this->session->userdata('ROLE');
                        }
                        ?>
                  </a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url() ?>index.php" class="nav-link">
                                  <i class="far fa-circle nav-icon text-danger"></i>
                                  <p>CodeIgniter 3.1.13</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url() ?>dashboard/adminlte" class="nav-link">
                                  <i class="far fa-circle nav-icon text-danger"></i>
                                  <p>AdminLTE 3.1.0</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-box"></i>
                          <p>
                              Produk
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url() ?>produk/index" class="nav-link">
                                  <i class="far fa-solid fa-database nav-icon text-info"></i>
                                  <p>Produk</p>
                              </a>
                          </li>
                          <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                          <li class="nav-item">
                              <a href="<?= base_url() ?>produk/create" class="nav-link">
                                  <i class="far fa-circle nav-icon text-warning"></i>
                                  <p>Form Produk</p>
                              </a>
                          </li>
                          <?php } ?>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-box"></i>
                          <p>
                              Jenis Produk
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url() ?>jenis_produk/index" class="nav-link">
                                  <i class="far fa-solid fa-database nav-icon text-info"></i>
                                  <p>Jenis Produk</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-user"></i>
                          <p>
                              users
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url() ?>users/index" class="nav-link">
                                  <i class="far fa-solid fa-database nav-icon text-info"></i>
                                  <p>users</p>
                              </a>
                          </li>
                          <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                          <li class="nav-item">
                              <a href="<?= base_url() ?>users/create" class="nav-link">
                                  <i class="far fa-circle nav-icon text-warning"></i>
                                  <p>Form users</p>
                              </a>
                          </li>
                          <?php } ?>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-user"></i>
                          <p>
                              Data Suplier
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url() ?>suplier/index" class="nav-link">
                                  <i class="far fa-solid fa-database nav-icon text-info"></i>
                                  <p>Suplier</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-user"></i>
                          <p>
                              My Info Profile
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="https://github.com/adryanep" class="nav-link">
                                  <i class="nav-icon fa-brands fa-github"></i>
                                  <p>
                                      GitHub
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>