<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Admin</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">User</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card">
		<div class="card-header">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-user">
				Tambah Data
			</button>
		</div>
		<?php echo $this->session->flashdata('pesan'); ?>
		<div class="card-body">

			<table id="table1" class="table table-bordered table-striped">
				<thead>

					<tr>
						<th width="20px">No</th>
						<th>Username</th>
						<th>nama</th>
						<th>Password</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($admin as $as) : ?>
						<?php if ($as->level == 2) { ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $as->username ?></td>
								<td><?php echo $as->nama ?></td>
								<td class="disabled"><?php echo $as->password ?></td>
								<td>
									<div class="row">
										<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#modal-edit<?php echo $as->id_user ?>">
											<i class="fas fa-edit"> </i></button>
										<a href="<?php echo base_url('auth/delete_admin/') . $as->id_user ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus admin <?php echo $as->nama ?>');"><i class="fas fa-trash"></i></a>
									</div>
								</td>
							</tr>
						<?php } ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-user">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('register') ?>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Masukkan password" required>
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


<!-- Edit Modal -->
<?php $no = 0;
foreach ($admin as $as) :  $no++; ?>
	<div class="modal fade" id="modal-edit<?php echo $as->id_user ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit admin</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<<div class="modal-body">
					<?php echo form_open_multipart('admin/user/ch_pass_aksi') ?>
					<input type="hidden" name="id_user" value="<?php echo base_url('admin/user/ch_pass') . $as->id_user ?>">
					<div class="form-group">
						<label>New Password</label>
						<input type="text" class="form-control" name="password" placeholder="Masukkan password" required>
					</div>
			</div>

			<div class=" modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
<?php endforeach; ?>
