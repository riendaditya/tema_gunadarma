<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>About Us</h2>
				<ol>
					<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
					<li>About Us</li>
				</ol>
			</div>
		</div>
	</section>


	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container" data-aos="fade-up">
			<div class="section-header">

				<h2>About Us</h2>

			</div>
			<div class="row">
				<?php foreach ($about as $ab) : ?>
					<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
						<img src="<?php echo base_url() . 'assets/upload/about/' . $ab->file ?>" class="rounded mx-auto d-block" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
						<h3><?php echo $ab->title ?></h3>
						<p class="fst-italic">
							<?php echo $ab->isi ?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>

		</div>
	</section>
</main>
