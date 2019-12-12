 <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    All Rights Reserved. Teknik Informatika UJB
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        
        <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js')?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url('assets/libs/popper.js/dist/umd/popper.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')?>"></script>
        <script src="<?= base_url('assets/extra-libs/sparkline/sparkline.js')?>"></script>
        <!--Wave Effects -->
        <script src="<?= base_url('dist/js/waves.js')?>"></script>
        <!--Menu sidebar -->
        <script src="<?= base_url('dist/js/sidebarmenu.js')?>"></script>
        <!--JavaScript Dashboard custom-->
        <script src="<?= base_url('dist/js/custom.min.js')?>"></script>
        <!-- Charts js Files -->
        <script src="<?= base_url('assets/libs/flot/excanvas.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot/jquery.flot.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot/jquery.flot.pie.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot/jquery.flot.time.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot/jquery.flot.stack.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot/jquery.flot.crosshair.js')?>"></script>
        <script src="<?= base_url('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')?>"></script>
        <script src="<?= base_url('dist/js/pages/chart/chart-page-init.js')?>"></script>
         <!-- calendar page js -->
        <script src="<?= base_url('assets/libs/moment/min/moment.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/fullcalendar/dist/fullcalendar.min.js')?>"></script>
        <script src="<?= base_url('dist/js/pages/calendar/cal-init.js')?>"></script>
        <!-- DataTables -->
        <script src="<?= base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
        <script src="<?= base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'?>"></script>
        <script>
            var tabel = null;
            $(document).ready(function() {
               
                tabel = $('#tabel-data').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ordering": true, // Set true agar bisa di sorting
                    "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
                    "ajax":
                    {
                        "url": "<?= base_url('index.php/data/view') ?>", // URL file untuk proses select datanya
                        "type": "POST"
                    },
                    "deferRender": true,
                    "aLengthMenu": [[10, 15, 50],[ 10, 15, 50]], 
                    "columns": [
                        { "data": "id_pegawai" }, 
                        { "data": "nama" }, 
                        { "data": "no_hp" }, 
                        { "data": "jabatan" }, 
                        { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                            
                                var html  = "<a href='<?= base_url('data/edit/"+row.id_pegawai+"') ?>' class='btn btn-primary btn-sm' ><span class='icon fas fa-edit'></span> Edit</a>&nbsp;"
                                html += "<a href='<?= base_url('data/hapus/"+row.id_pegawai+"') ?>' class='btn btn-info btn-sm' onclick=\"return confirm('Apakah Anda yakin akan menghapus ini?')\"><span class='icon fas fa-trash-alt' ></span> Hapus</a>"

                                return html; 
                            }
                            
                        },
                    ],
                });
            });
        </script> 
        <!-- Tambah Page JS -->
        <script src="<?= base_url('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')?>"></script>
        <script src="<?= base_url('dist/js/pages/mask/mask.init.js')?>"></script>
        <script src="<?= base_url('assets/libs/select2/dist/js/select2.full.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/select2/dist/js/select2.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/jquery-asColor/dist/jquery-asColor.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/jquery-asGradient/dist/jquery-asGradient.js')?>"></script>
        <script src="<?= base_url('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/jquery-minicolors/jquery.minicolors.min.js')?>"></script>
        <script src="<?= base_url('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
    </body>
</html>