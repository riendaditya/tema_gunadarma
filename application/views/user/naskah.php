<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Bank Naskah</h2>
				<ol>
					<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
					<li>Daftar Naskah</li>
				</ol>
			</div>
		</div>
	</section><!-- End Breadcrumbs -->
	<div class="card">
		<div class="card-body">
			<table id="table1" class="table table-bordered table-striped">
				<thead>

					<tr>
						<th width="20px">No</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th>Content</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($naskah as $nk) : ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $nk->judul ?></td>
							<td><?php echo $nk->kategori ?></td>
							<td><a class="btn btn-sm btn-success" href="<?php echo base_url('admin/data_naskah/download/' . $nk->id_naskah) ?>"><i class='fas fa-download'> </i> Download File </a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

</main>
