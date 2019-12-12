<?php $this->load->view('header.php');?>
<?php $this->load->view('sidebar.php');?>
          <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="height:590px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah Data Pegawai</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah data pegawai</li>
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
                <div class="row" style="margin-bottom:150px;">
                    <div class="col">
                        <div class="card">
                            <form class="form-horizontal" action="<?= base_url('tambah/save'); ?>" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Data untuk Absensi</h4>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap pegawai">
                                            <span class="text-danger"><?= form_error('nama'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">No Handphone</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" data-toggle="tooltip" title="format: 6287654321904" placeholder="No HP pegawai">
                                            <span class="text-danger"><?= form_error('no_hp'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                        <div class="col-sm-4">
                                        <select class="form-control" id="jabatan" name="jabatan" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                                <option value="CEO">CEO</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Leader">Leader</option>
                                                <option value="Agent">Agent</option>
                                                <option value="Security">Security</option>
                                                <option value="Office Boy">Office Boy</option>
                                        </select>
                                        <span class="text-danger"><?= form_error('jabatan'); ?></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>
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