<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$authorized_msg = isset($err_msg) ? $err_msg : 'You are Unauthorized for this operation';
?>
<div id="content">
	<div class="alert alert-danger" role="alert">
		<strong>Oh snap!</strong> <?php echo $authorized_msg ?>
	</div>
</div>