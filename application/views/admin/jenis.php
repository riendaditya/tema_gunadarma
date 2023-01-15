<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Jenis</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Jenis</li>
					</ol>
				</div>
				<!-- /.col -->
			</div>
			<?php echo $this->session->flashdata('pesan'); ?><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- table kategori -->
	<div class="card">
		<div class="row">
			<!-- Table Jabatan -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3>Jabatan</h3>
						<button type="button" class="btn btn-sm btn-primary mb-3 mt-3" data-toggle="modal" data-target="#modal-jabat">
							Tambah Data
						</button>
						<table id="jabatan" class="display table table-striped table-bordered">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>Jenis</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($jabatan as $jb) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $jb->jenis_jbt ?></td>
										<td>
											<div class="row">
												<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#editjabat<?php echo $jb->id_jabatan ?>">
													<i class="fas fa-edit"> </i></button>
												<a href="<?php echo base_url('admin/jenis/del_jabat/') . $jb->id_jabatan ?>" class="btn btn-sm btn-danger" onclick=""><i class="fas fa-trash-alt"></i></a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end table jabatan -->

			<!-- table kategori -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3>Kategori</h3>
						<button type="button" class="btn btn-sm btn-primary mb-3 mt-3" data-toggle="modal" data-target="#modal-kateg">
							Tambah Data
						</button>
						<table id="kategori" class="display table table-striped table-bordered">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>Jenis</th>
									<th>Aksi</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kategori as $kt) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $kt->jenis_ktg ?></td>
										<td>
											<div class="row">
												<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#editkateg<?php echo $kt->id_kategori ?>">
													<i class="fas fa-edit"> </i></button>
												<a href="<?php echo base_url('admin/jenis/del_kateg/') . $kt->id_kategori ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end table kategori -->

			<!-- Table Jabatan -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3>Keterangan Achievment</h3>
						<button type="button" class="btn btn-sm btn-primary mb-3 mt-3" data-toggle="modal" data-target="#modal-achiev">
							Tambah Data
						</button>
						<table id="achiev" class="display table table-striped table-bordered">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>Jenis</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kat_ach as $ka) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $ka->jenis ?></td>
										<td>
											<div class="row">
												<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#editach<?php echo $ka->id ?>">
													<i class="fas fa-edit"> </i></button>
												<a href="<?php echo base_url('admin/jenis/del_ach/') . $ka->id ?>" class="btn btn-sm btn-danger" onclick=""><i class="fas fa-trash-alt"></i></a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end table jabatan -->
		</div>
	</div>

	<!-- Tambah Modal Kategori -->
	<div class="modal fade" id="modal-kateg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Naskah</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/jenis/tbh_kateg') ?>
					<div class="form-group">
						<label>Jenis</label>
						<input type="text" class="form-control" name="jenis_ktg" placeholder="Masukkan jenis" required>
					</div>
				</div>

				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- end tambah Modal -->

	<!-- Tambah Modal Jabatan -->
	<div class="modal fade" id="modal-jabat">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Jabatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/jenis/tbh_jabat') ?>
					<div class="form-group">
						<label>Jenis</label>
						<input type="text" class="form-control" name="jenis_jbt" placeholder="Masukkan jenis" required>
					</div>
				</div>

				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- end modal tambah -->

	<!-- Tambah Modal Kategori -->
	<div class="modal fade" id="modal-achiev">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Achievment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/jenis/tbh_achiev') ?>
					<div class="form-group">
						<label>Jenis</label>
						<input type="text" class="form-control" name="jenis" placeholder="Masukkan jenis" required>
					</div>
				</div>

				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- end tambah Modal -->

	<!-- Edit Modal Kategori -->
	<?php $no = 0;
	foreach ($kategori as $kt) : $no++; ?>
		<div class="modal fade" id="editkateg<?php echo $kt->id_kategori; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Kategori</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/jenis/upd_kateg/<?php echo $kt->id_kategori; ?>">

							<div class="form-group">
								<label>Jenis</label>
								<input type="hidden" name="id_kategori" value="<?php echo $kt->id_kategori; ?>" />
								<input type="text" class="form-control" name="jenis_ktg" value="<?php echo $kt->jenis_ktg; ?>">
							</div>
					</div>

					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<!-- End Modal Kategori -->

	<!-- Edit Modal Jabatan -->
	<?php $no = 0;
	foreach ($jabatan as $jb) : $no++; ?>
		<div class="modal fade" id="editjabat<?php echo $jb->id_jabatan; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Jabatan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/jenis/upd_jabat/<?php echo $jb->id_jabatan; ?>">

							<div class="form-group">
								<label>Jenis</label>
								<input type="hidden" name="id_jabatan" value="<?php echo $jb->id_jabatan; ?>" />
								<input type="text" class="form-control" name="jenis_ktg" value="<?php echo $jb->jenis_jbt; ?>">
							</div>
					</div>

					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<!-- End edit Modal Jabatan -->

		<!-- Edit Modal Achievment -->
		<?php $no = 0;
	foreach ($kat_ach as $ka) : $no++; ?>
		<div class="modal fade" id="editach<?php echo $ka->id; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Achievment</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/jenis/upd_ach/<?php echo $ka->id; ?>">

							<div class="form-group">
								<label>Jenis</label>
								<input type="hidden" name="id" value="<?php echo $ka->id; ?>" />
								<input type="text" class="form-control" name="jenis" value="<?php echo $ka->jenis?>">
							</div>
					</div>

					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<!-- End edit Modal Achievment -->
