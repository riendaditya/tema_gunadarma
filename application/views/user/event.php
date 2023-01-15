<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Event</h2>
				<ol>
					<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
					<li>Event</li>
				</ol>
			</div>

		</div>
	</section>
	<section id="blog" class="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<p>Next Event......</p>
			</div>
			<div class="row gy-4 posts-list">
				<?php foreach ($event as $ev) : ?>
					<?php if ($ev->status == false) {
						echo "See you next event.....";
					} elseif ($ev->status == 1) { ?>
						<div class="col-lg-3 col-md-3">
							<article>

								<div class="post-img">
									<img src="<?php echo base_url('assets/upload/event/' . $ev->poster) ?>" class="img-fluid">
								</div>
								<h2 class="title">
									<a href="<?php echo base_url('user/event/detail/') . $ev->id ?>"><?php echo $ev->judul ?></a>
								</h2>
								<div class="post-meta">
									<p clas="lokasi">Lokasi : <?php echo $ev->lokasi ?></p>
									<p class="post-date">Tanggal
										<time datetime="2022-01-01"><?php echo $ev->tanggal ?></time>
									</p>
								</div>

							</article>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	
	<section id="blog" class="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<p>Event yang sudah berlangsung</p>
			</div>
			<div class="row gy-4 posts-list">
				<?php foreach ($event as $ev) : ?>
					<?php if ($ev->status == 2) { ?>
						<div class="col-xl-3 col-md-3">
							<article>
							<div class="post-img">
									<img src="<?php echo base_url('assets/upload/event/' . $ev->poster) ?>" class="img-fluid">
								</div>
								<h2 class="title">
									<a href="<?php echo base_url('user/event/detail/') . $ev->id ?>"><?php echo $ev->judul ?></a>
								</h2>
								<div class="post-meta">
									<p clas="lokasi">Lokasi : <?php echo $ev->lokasi ?></p>
									<p class="post-date">Tanggal
										<time datetime="2022-01-01"><?php echo $ev->tanggal ?></time>
									</p>
								</div>
							</article>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div><!-- End blog posts list -->

			<!-- <div class="blog-pagination">
				<ul class="justify-content-center">
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</div>End blog pagination -->

		</div>
	</section><!-- End Blog Section -->
</main>
