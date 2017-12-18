<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$static_path = $third_party_URL . '/img/static';
$segment = $this->uri->segment(2);
function is_active( $method, $uri_segment ) {
	if ( $uri_segment == $method ) {
		return 'active';
	}
	return '';
}
?>
<div class="travel-body">

	<!--carousel-->
	<div class="travel-carousel">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="<?php echo $static_path ?>/destination/1.jpg" width="100%" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo $static_path ?>/destination/1.jpg" width="100%" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="<?php echo $static_path ?>/destination/1.jpg" width="100%" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>


	<!--Navbar-->
	<div class="travel-nav fixed-top">

		<nav class="navbar navbar-toggleable-lg navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('/') ?>">Home</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?php echo is_active('promos', $segment) ?>">
						<a class="nav-link" href="<?php echo site_url('/index/promos/') ?>">Promos <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php echo is_active('visas', $segment) ?>">
						<a class="nav-link" href="<?php echo site_url('/index/visas/') ?>">Visa Assistance</a>
					</li>
					<li class="nav-item <?php echo is_active('about', $segment) ?>">
						<a class="nav-link" href="<?php echo site_url('/index/about/') ?>">About us</a>
					</li>
					<li class="nav-item <?php echo is_active('contact', $segment) ?>">
						<a class="nav-link" href="<?php echo site_url('/index/contact/') ?>">Contact us</a>
					</li>
			<?php
				if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ):
			?>	
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('/administrator/') ?>">Dashboard</a>
					</li>
			<?php
				else:
			?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('/index/login/') ?>">Login</a>
					</li>
			<?php		
				endif;
			?>

				</ul>

			</div>
		</nav>

	</div>

	<div class="travel-logo">
		<img src="<?php echo $static_path ?>/logo/rr.png" class="img-fluid" alt="Responsive image">
	</div>
