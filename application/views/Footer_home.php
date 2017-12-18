<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public' );
$copyright_message = $config_metadatas != false ? $config_metadatas->conf_copyright_message : '© Copyright 2017 - J.AGUIRRE All rights reserved.';
?>
		<!--Footer-->
		<div class="travel-footer">

			<footer class="mainfooter" role="contentinfo">

				<div class="footer-middle">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Address</h4>
									<address>
										<ul class="list-unstyled">
											<li>
												City Hall<br>
												212  Street<br>
												Lawoma<br>
												735<br>
											</li>
											<li>
												Phone: 0
											</li>
										</ul>
									</address>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Popular Services</h4>
									<ul class="list-unstyled">
										<li><a href="#"></a></li>
										<li><a href="#">Payment Center</a></li>
										<li><a href="#">Contact Directory</a></li>
										<li><a href="#">Forms</a></li>
										<li><a href="#">News and Updates</a></li>
										<li><a href="#">FAQs</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Website Information</h4>
									<ul class="list-unstyled">
										<li><a href="#">Website Tutorial</a></li>
										<li><a href="#">Accessibility</a></li>
										<li><a href="#">Disclaimer</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">FAQs</a></li>
										<li><a href="#">Webmaster</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Popular Departments</h4>
									<ul class="list-unstyled">
										<li><a href="#">Parks and Recreation</a></li>
										<li><a href="#">Public Works</a></li>
										<li><a href="#">Police Department</a></li>
										<li><a href="#">Fire</a></li>
										<li><a href="#">Mayor and City Council</a></li>
										<li>
											<a href="#"></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!--Footer Bottom-->
								<p class="text-xs-center"><?php echo $copyright_message ?></p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

	<!-- !!!!!!!!!!!!!!!! -->
	</div>

	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/bootstrap.min.js"></script>

	<!--Import slick js-->
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/third_party/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/jquery-migrate-1.2.1.min.js"></script>
	<!--Import material card-->
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/third_party/materialcard/js/jquery.material-cards.min.js"></script>
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo $third_party_URL ?>/js/init.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn7L_sd-9IDcqJwdDFf4bgNJ7d0Q6cNTc&callback=initMap"></script>

</body>
</html>