<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Maps</li>
                        <li> <a href="<?php echo base_url(); ?>karyawan/dashboard" aria-expanded="false"><i class="fa fa-map"></i>Semua Lokasi</a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Lokasi Terkait</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>karyawan/dashboard/kepanjen">Kecematan Kepanjen</a></li>
                                <li><a href="<?php echo base_url(); ?>karyawan/dashboard/dampit">Kecamatan Dampit</a></li>
                                <li><a href="<?php echo base_url(); ?>karyawan/dashboard/turen">Kecamatan Turen</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Apps</li>
                        <li> <a class="has-arrow  " href="#" data-toggle="modal" data-target="#unvailable" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Pesan</span></a>
                        </li>
                        <li> <a href="#" data-toggle="modal" data-target="#unvailable" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                        </li>
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->