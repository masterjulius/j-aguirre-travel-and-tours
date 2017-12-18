<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public' );
?>
<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/css/login-form.css">
<div class="container">

	<div class="card"></div>
	<div class="card">
		<h1 class="title">Login</h1>
		<form action="<?php echo site_url( 'users/login/' ) ?>" method="post">
			<input type="hidden" name="target_url" value="<?php echo $this->uri->uri_string() ?>">
<?php
		if (isset($invalid)):
?>	
			<div class="input-container">
				<div class="alert alert-danger" role="alert">
					<strong>Oh snap!</strong> <?php echo $invalid ?>
				</div>
			</div>
<?php
		endif;
?>			

			<div class="input-container">
				<input type="text" name="username" id="username" autofocus="autofocus" required="required" />
				<label for="username">Username</label>
				<div class="bar"></div>
			</div>
			<div class="input-container">
				<input type="password" name="password" id="password" required="required" />
				<label for="password">Password</label>
				<div class="bar"></div>
			</div>
			<div class="button-container">
				<button><span>Go</span></button>
			</div>
			<div class="footer"><a href="<?php echo base_url('/') ?>"><span>&larr;</span> Go to home</a></div>
		</form>
	</div>
</div>	
