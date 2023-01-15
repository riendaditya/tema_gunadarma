<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Naskah</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Message</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="card ml-3 mr-3">
		<?php echo $this->session->flashdata('pesan'); ?>
		<div class="card-body">

			<div class="card-body">
				<div class="table-responsive">
					<table id="table1" class="table table-bordered table-md">
						<thead>
							<tr>
								<th width="20px">No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Subjek</th>
								<th>Pesan</th>
								<th>Tanggal</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($contact as $ck) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $ck->name ?></td>
									<td><?php echo $ck->email ?></td>
									<td><?php echo $ck->subject ?></td>
									<td><?php echo $ck->message ?></td>
									<td><?php echo $ck->tanggal ?></td>
									<td>
										<a href="<?php echo base_url('admin/contact/delete/') . $ck->id ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus message <?php echo $ck->name ?>');"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="card col-md-6 ml-3">
		<div class="card-body">
			<div class="table-responsive">
				<table id="table2" class="table table-bordered table-md">
					<thead>
						<tr>
							<th width="20px">No</th>
							<th>Email</th>
							<th>aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($subs as $sb) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $sb->email ?></td>
								<td>
									<a href="<?php echo base_url('admin/contact/delete_subs/') . $ck->id ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Anda yakin akan menghapus message <?php echo $ck->name ?>');"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>
