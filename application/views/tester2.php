

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?php echo base_url('templates/AdminLTE') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Tema Gunadarma</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url('templates/AdminLTE') ?>/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Admin</a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/widgets.html" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Widgets
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Layout Options
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right">6</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/layout/top-nav.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Top Navigation</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Top Navigation + Sidebar</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/boxed.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Boxed</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/fixed-sidebar.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Fixed Sidebar</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Fixed Sidebar <small>+ Custom Area</small></p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/fixed-topnav.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Fixed Navbar</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/fixed-footer.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Fixed Footer</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Collapsed Sidebar</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
									Charts
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/charts/chartjs.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>ChartJS</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/flot.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Flot</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/inline.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Inline</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/uplot.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>uPlot</p>
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		



		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
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
	<!-- JQVMap -->
	<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url('templates/AdminLTE') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
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
	<script src="<?php echo base_url('templates/AdminLTE') ?>/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url('templates/AdminLTE') ?>/dist/js/pages/dashboard.js"></script>
</body>

</html>
