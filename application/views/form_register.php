<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="login-brand">
							<img src="<?php echo base_url('assets/upload') ?>/logo.jpeg" alt="logo" width="100" class="shadow-light rounded-circle">
						</div>

						<div class="card card-primary">
							<div class="card-header">
								<h4>Register</h4>
							</div>

							<div class="card-body">
								<form method="POST" action="<?php echo base_url('register') ?>">

									<div class="form-group">
										<label for="nama">Nama</label>
										<input id="nama" type="text" class="form-control" name="nama" autofocus placeholder="Nama">
										<?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
									</div>


									<div class="form-group">
										<label for="username">Username</label>
										<input id="username" type="text" class="form-control" name="username" placeholder="username">
										<?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
									</div>


									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="password">
										<?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
									</div>
									
									<div class="row">
										<div class="form-group col-6">
											<label for="gender" class="d-block">Gender</label>
											<select class="form-control selectric" name="level">
												<option value="">---Jenis---</option>
												<option value="1">SupAdmin</option>
												<option value="2">Admin</option>
											</select>
											<?php echo form_error('level', '<div class="text-small text-danger">', '</div>') ?>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											Register
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; Stisla 2018
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
