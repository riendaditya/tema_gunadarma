<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Achievement</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Achievement</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card">
		<div class="card-header">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-achiev">
				Tambah Data
			</button>
			<div class="mt-3">
				<?php echo $this->session->flashdata('pesan'); ?>
			</div>
		</div>
		<!-- Table Achievement -->
		<div class="col">
			<div class="card">
				<div class="card-body">
					<h3>Achievement</h3>
					<table id="kategori" class="display table table-striped table-bordered">
						<thead>
							<tr>
								<th width="20px">No</th>
								<th>Gambar</th>
								<th>Judul</th>
								<th>Jenis</th>
								<th>Keterangan</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($achievement as $ac) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td>
										<img width='50px' src="<?php echo base_url() . 'assets/upload/achiev/' . $ac->file ?>">
									</td>
									<td><?php echo $ac->judul ?></td>
									<td><?php echo $ac->kat_ach ?></td>
									<td><?php echo $ac->keterangan ?></td>
									<td>
										<div class="row">
											<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#editachiev<?php echo $ac->id ?>">
												<i class="fas fa-edit"> </i></button>
											<a href="<?php echo base_url('admin/achievement/delete/') . $ac->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- end table Achievement -->
	</div>
</div>

<!-- Tambah Modal -->
<div class="modal fade" id="modal-achiev">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Achievement</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/achievement/tambah') ?>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required="">
				</div>
				<div class="form-group">
					<label>Jenis</label>
					<select name="kat_ach" class="form-control">
						<option value="">Jenis Achievement</option>
						<?php foreach ($kat_ach as $ka) : ?>
							<option value="<?php echo $ka->jenis ?>">
								<?php echo $ka->jenis ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input type="text" class="form-control" name="keterangan" placeholder="Masukkan Judul" required="">
				</div>
				<div class="form-group">
					<label>File Input</label>
					<input type="file" name="file" class="form-control" size="20" required="">
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
<!-- end modal tambah -->

<!-- Edit modal Abggita -->
<?php $no = 0;
foreach ($achievement as $ac) :  $no++; ?>
	<div class="modal fade" id="editachiev<?php echo $ac->id; ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Form Achievement</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/achievement/edit/' . $ac->id) ?>
					<input type="hidden" name="id" value="<?php echo $ac->id ?>">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" value="<?php echo $ac->judul ?>" required="">
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<select name="kat_ach" class="form-control">
							<option value="<?php echo $ac->kat_ach ?>"><?php echo $ac->kat_ach ?></option>
							<?php foreach ($kat_ach as $ka) : ?>
								<option value="<?php echo $ka->jenis ?>">
									<?php echo $ka->jenis ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" class="form-control" name="keterangan" required="" value="<?php echo $ac->keterangan ?>">
					</div>

					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="file" class="form-control" size="20" value="<?php echo $ac->file ?>">
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
