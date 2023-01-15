		<!-- Main Footer -->
		<footer class="main-footer">
			Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0
			</div>
		</footer>
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/sparklines/sparkline.js"></script>
		<!-- jquery -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/moment/moment.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<!-- <script src="/dist/js/demo.js"></script> -->
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<!-- <script src="/dist/js/pages/dashboard.js"></script> -->
		<!-- DataTables -->
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jszip/jszip.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


		<!-- active sidebar -->
		<script>
			$(function() {
				var url = window.location;
				// for single sidebar menu
				$('ul.nav-sidebar a').filter(function() {
					return this.href == url;
				}).addClass('active');

				// for treeview
				$('ul.nav-treeview a').filter(function() {
					return this.href == url;
				}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
			});
		</script>
		<!-- end of active sidebar -->
		<!-- DataTables -->
		<script>
			$(document).ready(function() {
				$('#table1').DataTable();
			});
			$(document).ready(function() {
				$('#table2').DataTable();
			});
			$(document).ready(function() {
				$('table.display').DataTable();
			});
		</script>

		</body>

		</html>
