
<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Log Book.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url('public/') ?>libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?= base_url('public/') ?>libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="<?= base_url('public/') ?>libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="<?= base_url('public/') ?>libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <script src="<?= base_url('public/') ?>js/pages/allchart.js"></script>
        <!-- dashboard init -->
        <script src="<?= base_url('public/') ?>js/pages/dashboard.init.js"></script>

        <script src="<?= base_url('public/') ?>js/app.js"></script>

		<?php if (isset($dataTables)) { ?>
		<!-- Required datatable js -->
		<script src="<?= base_url('public/') ?>libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url('public/') ?>libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/jszip/jszip.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?= base_url('public/') ?>libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('public/') ?>js/pages/datatables.init.js"></script>    
		<?php }?>

    </body>

</html>
