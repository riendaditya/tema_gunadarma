<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Team</h2>
				<ol>
					<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
					<li>Daftar Anggota</li>
				</ol>
			</div>
		</div>
	</section>

	<section id="p_utama" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Pengurus Utama</p>
			</div>

			<div class="row gy-2">
				<?php foreach ($anggota as $ag) : ?>
					<?php if ($ag->jabatan != 'Anggota') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member member-slide swipe" data-aos="fade-up" data-aos-delay="100">

								<div class="swiper-slider">
									<div class="member-img">
										<img src="<?php echo base_url('assets/upload/anggota/' . $ag->profile) ?>" class="img-fluid" alt="">
										<div class="social">
											<a href=""><i class="bi bi-twitter"></i></a>
											<a href=""><i class="bi bi-facebook"></i></a>
											<a href=""><i class="bi bi-instagram"></i></a>
											<a href=""><i class="bi bi-linkedin"></i></a>
										</div>
									</div>
									<div class="member-info">
										<h4><?php echo $ag->nama ?></h4>
										<p><?php echo $ag->jabatan ?></p>
										<span>No Anggota : <?php echo $ag->no_anggota ?></span>
										<span>Angkatan : <?php echo $ag->angkatan ?></span>
									</div>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>

		</div>
	</section>
	<section id="anggota" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Anggota</p>
			</div>

			<div class="row">
				<?php foreach ($anggota as $ag) : ?>
					<?php if ($ag->jabatan == 'Anggota') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/anggota/' . $ag->profile) ?>" class="img-fluid bordered" alt="">
									<div class="social">
										<a href=""><i class="bi bi-twitter"></i></a>
										<a href=""><i class="bi bi-facebook"></i></a>
										<a href=""><i class="bi bi-instagram"></i></a>
										<a href=""><i class="bi bi-linkedin"></i></a>
									</div>
								</div>
								<div class="member-info">
									<h4><?php echo $ag->nama ?></h4>
									<p><?php echo $ag->jabatan ?></p>
									<span>No Anggota : <?php echo $ag->no_anggota ?></span>
									<span>Angkatan : <?php echo $ag->angkatan ?></span>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>

		</div>
	</section>
</main>
