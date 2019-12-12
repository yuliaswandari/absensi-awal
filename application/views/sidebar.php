
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->uri->segment(1)=="dashboard"){echo "";}else {echo base_url()."dashboard";}?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->uri->segment(1)=="laporan"){echo "";}else {echo base_url()."laporan";}?>" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Laporan</span></a></li>
                            
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->uri->segment(1)=="data"){echo "";}else {echo base_url('data');}?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Data Pegawai</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->uri->segment(1)=="tambah"){echo "";}else {echo base_url()."tambah";}?>" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Tambah Pegawai</span></a></li>
                           
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php if($this->uri->segment(1)=="calendar"){echo "";}else {echo base_url()."calendar";}?>" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">Calendar </span></a></li>
                           
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->