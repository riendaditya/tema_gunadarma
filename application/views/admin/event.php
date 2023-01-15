<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Event</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data event</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card">
		<div class="card-header">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-event">
				Tambah Data
			</button>
		</div>
		<?php echo $this->session->flashdata('pesan'); ?>
		<div class="card-body">

			<table id="table1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="20px">No</th>
						<th>Poster</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Lokasi</th>
						<th>Deskripsi</th>
						<th>link</th>
						<th>Status</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($event as $ev) : ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td>
								<img width='50px' src="<?php echo base_url() . 'assets/upload/event/' . $ev->poster ?>">
							</td>
							<td><?php echo $ev->judul ?></td>
							<td><?php echo $ev->tanggal ?></td>
							<td><?php echo $ev->lokasi ?></td>
							<td><?php echo $ev->deskripsi ?></td>
							<td><?php echo $ev->link ?></td>
							<td><?php if ($ev->status == 1) {
									echo 'Next Event';
								} else {
									echo 'Event';
								} ?></td>
							<td>
								<div class="row">
									<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#modal-edit<?php echo $ev->id ?>">
										<i class="fas fa-edit"> </i></button>
									<a href="<?php echo base_url('admin/event/delete/') . $ev->id ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus event <?php echo $ev->judul ?>');"><i class="fas fa-trash"></i></a>
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
<div class="modal fade" id="modal-event">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Event</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/event/tambah') ?>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required="">
				</div>
				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" required="">
				</div>
				<div class="mb-3">
					<label>Deskripsi</label>
					<textarea class="form-control" name="deskripsi" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label>link</label>
					<input type="text" class="form-control" name="link" placeholder="Masukkan link" required="">
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="status" class="form-control">
						<option value="">Jenis Event</option>
						<option value="1">Next Event</option>
						<option value="2">Event</option>
					</select>
				</div>
				<div class="form-group">
					<label>File Input</label>
					<input type="file" name="poster" class="form-control" size="20" required="">
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

<!-- Edit Modal -->
<?php $no = 0;
foreach ($event as $ev) :  $no++; ?>
	<div class="modal fade" id="modal-edit<?php echo $ev->id ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<?php echo form_open_multipart('admin/event/edit_event/' . $ev->id) ?>
					<input type="hidden" name="id" value="<?php echo $ev->id ?>">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="<?php echo $ev->judul ?>" required="">
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo $ev->tanggal ?>" required="">
					</div>
					<div class="mb-3">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi" rows="3"><?php echo $ev->deskripsi ?></textarea>
					</div>
					<div class="form-group">
						<label>Link</label>
						<input type="text" class="form-control" name="link" placeholder="Masukkan link" value="<?php echo $ev->link ?>" required="">
					</div>
					<div class="form-group">
						<label>Status</label>
						<select name="status" class="form-control">
							<option value="<?php echo $ev->status ?>">
								<?php if ($ev->status == 1) {
									echo 'Next Event';
								} else {
									echo 'Event';
								} ?>
							</option>
							<option value="1">Next Event</option>
							<option value="2">Event</option>
						</select>
					</div>
					<div class="form-group">
						<label>File Input</label>
						<input type="file" name="poster" class="form-control" size="20">
					</div>
				</div>

				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>

			</div>
		</div>
	</div>
<?php endforeach; ?>
