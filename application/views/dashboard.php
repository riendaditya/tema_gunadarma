<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
	<div class="container" data-aos="fade-up">

		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-8">
				<h1>Teather Mahasiswa Gunadarma</h1>

			</div>
		</div>

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<?php foreach ($about as $ab) : ?>
			<div class="container">
				<!-- data-aos="fade-up" -->
				<div class="section-header">
					<h2>About Us</h2>
				</div>

				<div class="row">

					<div class="col-lg-6 order-1 order-lg-4" data-aos="fade-left" data-aos-delay="100">
						<img src="<?php echo base_url() . 'assets/upload/about/' . $ab->file ?>" class="rounded mx-auto d-block" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
						<h3><?php echo $ab->title ?></h3>
						<p class="fst-italic">
							<?php echo $ab->isi ?>
						</p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</section><!-- End About Section -->

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">

			<div class="text-center">
				<h3>Ingin bergabung bersama kami?</p>
					<a class="cta-btn" href="https://linkr.bio/tema.gunadarma">Hubungi kami sekarang </a>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Team Section ======= -->
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Team</h2>
				<p>Check our Team</p>
			</div>

			<div class="row">
				<?php foreach ($anggota as $ag) : ?>
					<?php if ($ag->jabatan != 'Anggota') { ?>
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
	</section><!-- End Team Section -->

</main>
