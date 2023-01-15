<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Anggota</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Anggota</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card">
		<div class="card-header">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-anggota">
				Tambah Data
			</button>
		</div>
		<?php echo $this->session->flashdata('pesan'); ?>
		<div class="card-body">

			<table id="table1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="20px">No</th>
						<th>Profile</th>
						<th>Nama</th>
						<th>No Anggota</th>
						<th>angkatan</th>
						<th>Jabatan</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($anggota as $ag) : ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td>
								<img width='50px' src="<?php echo base_url() . 'assets/upload/anggota/' . $ag->profile ?>">
							</td>
							<td><?php echo $ag->nama ?></td>
							<td><?php echo $ag->no_anggota ?></td>
							<td><?php echo $ag->angkatan ?></td>
							<td><?php echo $ag->jabatan ?></td>
							<td>
								<div class="row">
									<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#modal-edit<?php echo $ag->id_anggota ?>">
										<i class="fas fa-edit"> </i></button>
									<a href="<?php echo base_url('admin/data_anggota/delete_anggota/') . $ag->id_anggota ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus anggota <?php echo $ag->nama ?>');"><i class="fas fa-trash"></i></a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Tambah Modal -->
<div class="modal fade" id="modal-anggota">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Anggota</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/data_anggota/tambah_anggota') ?>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required="">
				</div>
				<div class="form-group">
					<label>No Anggota</label>
					<input type="text" class="form-control" name="no_anggota" placeholder="Masukkan Nama" required="">
				</div>
				<div class="form-group">
					<label>Angkatan</label>
					<input type="text" class="form-control" name="angkatan" placeholder="Masukkan Nama" required="">
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<select name="jabatan" class="form-control">
						<option value="">Masukkan Jabatan Anda</option>
						<?php foreach ($jabatan as $jb) : ?>
							<option value="<?php echo $jb->jenis_jbt ?>">
								<?php echo $jb->jenis_jbt ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="profile" class="form-control" size="20" required="">
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

<!-- Edit modal Abggita -->
<?php $no = 0;
foreach ($anggota as $ag) :  $no++; ?>
	<div class="modal fade" id="modal-edit<?php echo $ag->id_anggota; ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Form Anggota</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/data_anggota/edit_anggota/' . $ag->id_anggota) ?>
					<input type="text" name="id_anggota" value="<?php echo $ag->id_anggota ?>">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" required="" value="<?php echo $ag->nama ?>">
					</div>
					<div class="form-group">
						<label>No Anggota</label>
						<input type="text" class="form-control" name="no_anggota" required="" value="<?php echo $ag->no_anggota ?>">
					</div>
					<div class="form-group">
						<label>Angkatan</label>
						<input type="text" class="form-control" name="angkatan" required="" value="<?php echo $ag->angkatan ?>">
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<select name="jabatan" class="form-control">
							<option value="<?php echo $ag->jabatan ?>"><?php echo $ag->jabatan ?></option>
							<?php foreach ($jabatan as $jb) : ?>
								<option value="<?php echo $jb->jenis_jbt ?>">
									<?php echo $jb->jenis_jbt ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="profile" class="form-control" size="20"  value="<?php echo $ag->profile ?>">
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
<?php endforeach; ?>
<!-- end edit modal -->
