            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="<?= base_url('/'); ?>">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">Navigation</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="user"></i>
                                    <span data-key="t-ecommerce">Pendaftaran</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo $this->session->userdata('siswa') == 1 ? base_url('siswa/profil') : base_url('siswa/registrasi_program'); ?>" key="t-products"><?php echo $this->session->userdata('siswa') == 1 ? 'Profil' : 'Registrasi Program'; ?></a></li>

                                    <li><a href="<?= base_url('pembimbing/daftar_logbook'); ?>" key="t-products">Daftar Log Book</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="check-square"></i>
                                    <span data-key="t-email">Pelaporan</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo $this->session->userdata('time') == 1 ? base_url('siswa/logbook/waktu/minggu') : base_url('siswa/logbook/waktu'); ?>" data-key="t-inbox"><?php echo $this->session->userdata('time') == 1 ? 'Log Book Harian' : 'Isi Waktu'; ?></a></li>
                                    <li><a href="<?= base_url('siswa/daftar_logbook'); ?>" data-key="t-read-email">Daftar Log Book</a></li>
                                </ul>
                            </li>

                            <li>
							<a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-contacts">Pengguna</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('admin/tambah_user'); ?>" data-key="t-user-list">Tambah Pengguna</a></li>
                                    <li><a href="<?= base_url('admin/daftar_user'); ?>" data-key="t-user-grid">Daftar Pengguna</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
