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
                        <h4 class="page-title">Data Laporan</h4>
                        <a href="<?= base_url('laporan/rekaplaporan')?>" class="btn"> Rekap Laporan</a>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Bulanan </h5>
                                <form>
                                <div class="row">
                                <div class="col">
                                <select class="form-control" id="jabatan" name="jabatan">
                                            <option value="">Pilih Bulan</option>
                                                <option value="CEO">Januari</option>
                                                <option value="Manager">Februari</option>
                                                <option value="Supervisor">Maret</option>
                                                <option value="Leader">April</option>
                                                <option value="Agent">Mei</option>
                                                <option value="Security">Juni</option>
                                                <option value="Office Boy">Juli</option>
                                                <option value="Supervisor">Agustus</option>
                                                <option value="Leader">September</option>
                                                <option value="Agent">Oktober</option>
                                                <option value="Security">November</option>
                                                <option value="Office Boy">Desember</option>
                                </select>
                                </div>
                                <div class="col">
                                <button type="submit" class="btn btn-primary">Lihat</button>
                                </div>
                                </div>
                                </form>
                            </div> <!-- /card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Harian</h5>
                                <form>
                                <div class="row">
                                <div class="col">
                                <select class="form-control" id="jabatan" name="jabatan">
                                            <option value="">Pilih Bulan</option>
                                                <option value="CEO">Januari</option>
                                                <option value="Manager">Februari</option>
                                                <option value="Supervisor">Maret</option>
                                                <option value="Leader">April</option>
                                                <option value="Agent">Mei</option>
                                                <option value="Security">Juni</option>
                                                <option value="Office Boy">Juli</option>
                                                <option value="Supervisor">Agustus</option>
                                                <option value="Leader">September</option>
                                                <option value="Agent">Oktober</option>
                                                <option value="Security">November</option>
                                                <option value="Office Boy">Desember</option>
                                </select>
                                </div>
                                <div class="col">
                                <select class="form-control" id="tanggal" name="tanggal">
                                            <option value="">Pilih Tanggal</option>
                                            <?php 
                                      for ($i=1; $i <=31; $i++)
                                      {
                                    ?>
                                            <option value=""><?= $i; ?></option>
                                            <?php } ?>
                                </select>
                                </div>
                                <div class="col">
                                <button type="submit" class="btn btn-primary">Lihat</button>
                                </div>
                                </div>
                                </form>
                            </div> <!-- /card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Laporan Berdasarkan Nama</h5>
                                <form action="<?= base_url('laporan/nama'); ?>" method="post">
                                <div class="row">
                                <div class="col-md-4" style="margin-left:350px;">
                                <select class="form-control" id="nama" name="nama">
                                <option value="">Pilih Nama</option>
                                <?php 
                                        foreach($t_pegawai as $p){ 
                                ?>
                                <option value="<?= $p->nama?>"><?= $p->nama?></option>
                                <?php } ?> 
                                </select>
                                </div>
                                <div class="col">
                                <button type="submit" class="btn btn-primary">Lihat</button>
                                </div>
                                </div>
                                </form>
                            </div> <!-- /card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php $this->load->view('footer.php');?>   