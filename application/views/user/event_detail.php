<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2><strong>Event Detail</strong></h2>
				<ol>
					<li><a href="index.html">Home</a></li>
					<li>Event Detail</li>
				</ol>
			</div>

		</div>
	</section><!-- End Breadcrumbs -->

	<!-- ======= Event Detail Section ======= -->
	<section id="portfolio-details" class="portfolio-details">
		<div class="container">

			<div class="row gy-4">
				<?php foreach ($event as $ev) : ?>
					<div class="col-lg-8">
						<div class="portfolio-details-slider swiper">
							<div class="swiper-wrapper align-items-center">
								<div class="swiper-slide">
									<img src="<?php echo base_url('assets/upload/event/' . $ev->poster) ?>" alt="">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="portfolio-info">
							<h3><?php echo $ev->judul; ?></h3>
							<ul>
								<li><strong>Lokasi :</strong><?php echo $ev->lokasi?></li>
								<li><strong>Event date :</strong> <?php echo $ev->tanggal ?></li>
								<li><strong>Event URL :</strong> <a href="#"><?php echo $ev->link ?></a></li>
							</ul>
						</div>
						<div class="portfolio-description">
							<h2>Deskripsi</h2>
							<p>
								<?php echo $ev->deskripsi; ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

		</div>
	</section><!-- End Event Detail Section -->

</main><!-- End #main -->
