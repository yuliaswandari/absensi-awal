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
                            <h4 class="page-title"> Laporan Absensi </h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Rekap Laporan</li>
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
                    
                    <!-- row -->
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                
                                    <h5 class="card-title m-b-0">Absensi valid </h5>
                                </div>
                                <table class="table table-responsive-lg table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($rekap as $p){ 
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $p->nama ?></td>
                                            <td>
                                            <? 
                                            $data = $p->time; //mengambil timestamp database current date
                                            $tanggal = date("d F Y", strtotime($data)); //mengambil tanggalnya saja
                                            echo $tanggal;
                                            ?>
                                            </td>
                                            <td>
                                            <? 
                                            $data = $p->time; //mengambil timestamp database current date
                                            $jam = date("H:i", strtotime($data)); //mengambil jamnya saja
                                            
                                                echo $jam;
                                            
                                            ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <?php $this->load->view('footer.php');?>   