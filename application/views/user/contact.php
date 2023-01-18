<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Contact Us</h2>
				<ol>
					<li><a href="<?php echo base_url('user/achievment') ?>">Home</a></li>
					<li>Contact Us</li>
				</ol>
			</div>
		</div>
	</section>

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<p>Contact Us</p>
			</div>

			<!-- <div>
				<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
			</div> -->
			<div class="mapouter">
				<div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=universitas gunadarma kampus e&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div>
				<style>
					.mapouter {
						position: relative;
						text-align: right;
						width: 100%;
						height: 400px;
					}

					.gmap_canvas {
						overflow: hidden;
						background: none !important;
						width: 100%;
						height: 400px;
					}

					.gmap_iframe {
						height: 400px !important;
					}
				</style>
			</div>

			<div class="row mt-5">

				<div class="col-lg-4">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Location:</h4>
							<p>Jl. Komjen.Pol.M.Jasin No.9, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451
							</p>
						</div>

						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Email:</h4>
							<p>Temagunadarma1992@gmail.com</p>
						</div>

						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Call:</h4>
							<p>+6285173307051</p>
						</div>

					</div>

				</div>

				<div class="col-lg-8 mt-5 mt-lg-0">
					<?php echo $this->session->flashdata('pesan'); ?>
					<form action="<?php echo base_url('user/contact/send') ?>" method="post">
						<div class="row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
						</div>

						<div class="text-center"><button type="submit">Send Message</button></div>
					</form>

				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
</main>
