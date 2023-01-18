<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Naskah</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Data Naskah</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card">
		<div class="card-header">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
				Tambah Data
			</button>
		</div>
		<?php echo $this->session->flashdata('pesan'); ?>
		<div class="card-body">

			<table id="table1" class="table table-bordered table-striped">
				<thead>

					<tr>
						<th width="20px">No</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Kategori</th>
						<th>Content</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($naskah as $nk) : ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $nk->judul ?></td>
							<td><?php echo $nk->tanggal ?></td>
							<td><?php echo $nk->kategori ?></td>
							<td><a class="btn btn-sm btn-success" href="<?php echo base_url('admin/data_naskah/download/' . $nk->id_naskah) ?>"><i class='fas fa-download'> </i> Download File </a></td>
							<td>
								<div class="row">
									<button type="button" class="btn btn-primary btn-sm ml-3 mr-2" data-toggle="modal" data-target="#modal-edit<?php echo $nk->id_naskah ?>">
										<i class="fas fa-edit"> </i></button>
									<a href="<?php echo base_url('admin/data_naskah/delete_naskah/') . $nk->id_naskah ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus naskah <?php echo $nk->judul ?>');"><i class="fas fa-trash"></i></a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Tambah Modal -->
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Naskah</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('admin/data_naskah/tambah_naskah') ?>
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required="">
					</div>
					<div class="form-group">
						<label>Password</label>
						<select name="kategori" class="form-control" required="">
							<option value="">Kategori Naskah</option>
							<?php foreach ($kategori as $kt) : ?>
								<option value="<?php echo $kt->jenis_ktg ?>">
									<?php echo $kt->jenis_ktg ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>File Input</label>
						<input type="file" name="content" class="form-control" size="20" required="">
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
	foreach ($naskah as $nk) :  $no++; ?>
		<div class="modal fade" id="modal-edit<?php echo $nk->id_naskah ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Naskah</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<?php echo form_open_multipart('admin/data_naskah/edit_naskah/' . $nk->id_naskah) ?>
						<input type="text" name="id_naskah" value="<?php echo $nk->id_naskah ?>">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="<?php echo $nk->judul ?>">
						</div>
						<div class="form-group">
							<label>Password</label>
							<select name="kategori" class="form-control">
								<option value="<?php echo $nk->kategori ?>"><?php echo $nk->kategori ?></option>
								<?php foreach ($kategori as $kt) : ?>
									<option value="<?php echo $kt->jenis_ktg ?>">
										<?php echo $kt->jenis_ktg ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>File Input</label>
							<input type="file" name="content" class="form-control" size="20" value="<?php echo $nk->content ?>">
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
