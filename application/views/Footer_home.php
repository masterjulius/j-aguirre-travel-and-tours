<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public' );
$copyright_message = $config_metadatas != false ? $config_metadatas->conf_copyright_message : '© Copyright 2017 - J.AGUIRRE All rights reserved.';
$contact_info = $config_metadatas != false ? $config_metadatas->conf_contact_info : 'xxxxxxxxxxx'; 
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
												Centro 06<br>
												Aguinaldo Street<br>
												Tuguegarao City<br>
												Cagayan<br>
											</li>
											<li>
												Mobile: <?php echo $contact_info ?>
											</li>
											<li>
												Telephone: 377-2075
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
										<li><a href="#">Loading Station</a></li>
										<li><a href="#">Ticketing</a></li>
										<li><a href="#">Visa Assistance</a></li>
										<li><a href="#">Passporting Assistance</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Website Information</h4>
									<ul class="list-unstyled">
										<li><a href="#">Home</a></li>
										<li><a href="#">Promos</a></li>
										<li><a href="#">Visas</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!--Column1-->
								<div class="footer-pad">
									<h4>Popular Aviations</h4>
									<ul class="list-unstyled">
										<li><a href="#">Philippine Airline</a></li>
										<li><a href="#">Cebu Pacific</a></li>
										<li><a href="#">Emirates</a></li>
										<li><a href="#">Jet Star</a></li>
										<li><a href="#">Etihad</a></li>
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