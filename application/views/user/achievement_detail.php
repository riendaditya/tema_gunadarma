<main id="main">
	<!--=======Breadcrumbs=======-->
	<section class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Achievement</h2>
				<ol>
					<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
					<li>Achievement</li>
				</ol>
			</div>
		</div>
	</section>

	<section id="ac1" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Group Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Group Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="ac2" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Sutradara Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Sutradara Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid bordered" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="ac3" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Naskah, Poster & Trailer Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Naskah, Poster & Trailer Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid bordered" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="ac4" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Aktor Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Aktor Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid bordered" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="ac5" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Aktris Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Aktris Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid bordered" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="ac6" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Artistik Terbaik</p>
			</div>

			<div class="row">
				<?php foreach ($achievement as $ac) : ?>
					<?php if ($ac->kat_ach == 'Artistik Terbaik') { ?>
						<div class="col-6 col-md-2 d-flex align-items-stretch">
							<div class="member" data-aos="fade-up" data-aos-delay="100">
								<div class="member-img">
									<img src="<?php echo base_url('assets/upload/achiev/' . $ac->file) ?>" class="img-fluid bordered" alt="">
								</div>
								<div class="member-info">
									<h4><?php echo $ac->judul ?></h4>
									<p><?php echo $ac->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
