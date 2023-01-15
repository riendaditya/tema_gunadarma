<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">About Us</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Aboust Us</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="card-header">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
			Edit Data
		</button>
		<?php echo $this->session->flashdata('pesan'); ?>
	</div>
	<div class="row">
		<?php foreach ($about as $ab) : ?>
			<div class="col-md-12 ml-3">
				<div class="card mb-3">
					<img class="rounded mx-auto d-block" src="<?php echo base_url() . 'assets/upload/about/' . $ab->file ?>" >
					<div class="card-body">
						<h5 class="card-title"><strong><?php echo $ab->title ?></strong></h5>
						<p class="card-text"><?php echo $ab->isi ?></p>
						<p class="card-text"></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<?php foreach ($about as $ab): ?>
<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Data</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/about/edit') ?>
				<input type="hidden" name="id" value="<?php echo $ab->id; ?>">
				<div class="form-group">
					<label>title</label>
					<input type="text" class="form-control" name="title" placeholder="Masukkan title"value="<?php echo $ab->title ?>" required="">
				</div>
				<div class="mb-3">
					<label class="form-label">Isi</label>
					<textarea class="form-control"name="isi" rows="3"value="<?php echo $ab->isi ?>"></textarea>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="file" class="form-control" size="20" required="">
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
<!-- end modal tambah -->
<!-- <div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Large Modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div> -->
