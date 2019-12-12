<?php $this->load->view('header.php');?>
<?php $this->load->view('sidebar.php');?>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title"> Selamat Datang, Admin. </h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Sales Cards  -->
                    <!-- ============================================================== -->
                    <div class="row">
                      
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="<?= base_url('laporan');?>">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                    <h6 class="text-white">Laporan</h6>
                                </div>
                            </div>
                        </a>
                        </div>
                       
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?= base_url('data');?>">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                    <h6 class="text-white">Data Pegawai</h6>
                                </div>
                            </div>
                        </a>
                        </div>
                      
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="<?= base_url('tambah');?>">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Tambah Pegawai</h6>
                                </div>
                            </div>
                        </a>
                        </div>
                       
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?= base_url('calendar');?>">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                    <h6 class="text-white">Calendar</h6>
                                </div>
                            </div>
                        </a>
                        </div>
                       
                    </div>
                    <!-- ============================================================== -->
                    <!-- Sales chart -->
                    <!-- ============================================================== -->
                    <!-- row -->
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Dashboard hari <?= longdate_indo(date('Y-m-d')); ?></h5>
                                </div>
                                <table class="table table-responsive-lg table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Nomor HP</th>
                                            <th scope="col">Jam</th>
                                            <th scope="col">Ket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($t_pegawai as $p){ 
                                    ?>
                                        <tr>
                                             <td><?= $no++; ?></td>
                                            <td><?= $p->nama ?></td>
                                            <td><?= $p->jabatan ?></td>
                                            <td><?= $p->no_hp ?></td>
                                            <td>
                                            <? 
                                            $data = $p->time; //mengambil timestamp database current date
                                            $jam = date("H:i", strtotime($data)); //mengambil jamnya saja
                                            
                                                echo $jam;
                                           
                                            ?>
                                           
                                            </td>
                                            <td>
                                            <? 
                                            if ($jam >'06:00' && $jam < '08:00') {
                                                echo "<div class='text-primary'>Datang</div>";
                                            }
                                            elseif ($jam >'15:00' && $jam < '18:00') {
                                                echo "<div class='text-danger'>Pulang</div>";
                                            }
                                            ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                <div class="col"><b>Keterangan</b><br/>
                - Jam datang : 06:00 sampai 08:00 WIB <br/>
                - Jam pulang : 15:00 sampai 18:00 WIB
                </div>
                </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <?php $this->load->view('footer.php');?>   