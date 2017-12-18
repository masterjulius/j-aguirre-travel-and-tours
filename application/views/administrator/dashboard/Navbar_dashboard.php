<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$current_controller = $this->uri->segment(1);
$current_method = $this->uri->segment(2);
?>
<div class="content-navbar">
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?php echo site_url($current_controller . '/'); ?>">Dashboard</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo site_url($current_method . '/') ?>">/ <?php echo ucfirst($current_method) ?> / <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="btn btn-primary" href="<?php echo site_url($current_controller . '/' . $current_method . '/new/') ?>">Add New</a>
				</li>
			</ul>
			<!-- <form action="<?php //echo site_url( $current_controller . '/' . $current_method . '/search/' ) ?>" method="post" class="form-inline my-2 my-lg-0">
				<input type="text" name="search" class="form-control mr-sm-2" placeholder="Search here...">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form> -->
		</div>
	</nav>
</div>