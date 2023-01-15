<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 f">
					<div class="footer-info">
						<a><img src="<?php echo base_url('') ?>/assets/upload/logo.png" alt="" class="img-fluid"></a>
						<p><strong>Tema Gunadarma</strong></p>
						<p> Jl. Komjen.Pol.M.Jasin No.9, Tugu,<br>
							Kec. Cimanggis, Kota Depok, Jawa Barat 16451<br><br>
							<strong>Phone:</strong> +6285173307051<br>
							<strong>Email:</strong> info@example.com<br>
						</p>
						<div class="social-links mt-3">
							<a href="https://twitter.com/temagunadarma" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="https://www.facebook.com/TemaGunadarma/" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="https://instagram.com/temagunadarma" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="https://www.youtube.com/@temagunadarma4373" class="youtube"><i class="bx bxl-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-links">
					<div class="footer-info">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('user/about'); ?>">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('user/achievement'); ?>">Achievement</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('user/naskah'); ?>">Daftar Naskah</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('user/team'); ?>">Team</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 footer-newsletter">
					<h4>Our Newsletter</h4>
					<p>Send your email for new info</p>
					<form action="<?php echo base_url('user/contact/subs') ?>" method="post">
						<input type="email" name="email"><input type="submit" value="Subscribe">
					</form>
				</div>

			</div>
		</div>
	</div>

	<!-- <div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
		All the links in the footer should remain intact.
		You can delete the links only if you purchased the pro version.
		Licensing information: https://bootstrapmade.com/license/
		Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
		Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</div> -->
</footer><!-- End Footer -->

<!-- <div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

<!-- Vendor JS Files -->
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url('templates/Gp') ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#table1').DataTable();
	});
</script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('templates/Gp') ?>/assets/js/main.js"></script>

</body>

</html>
