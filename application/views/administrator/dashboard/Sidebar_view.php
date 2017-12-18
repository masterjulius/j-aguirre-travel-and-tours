<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$current_controller = $this->uri->segment(1);
?>
<!-- Sidebar Holder -->
<nav id="sidebar">
	<div class="sidebar-header">
		<h3>J. Aguirre</h3>
	</div>

	<ul class="list-unstyled components">
		<li>
			<a href="<?php echo base_url('/') ?>">Home</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/promos/') ?>">Promos</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/visas/') ?>">Visa Assistance</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/social/') ?>">Social</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/users/') ?>">Users</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/account/') ?>">Account</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/settings/') ?>">Settings</a>
		</li>
		<li>
			<a href="<?php echo site_url( '/administrator/logout/') ?>">Sign Out</a>
		</li>
	</ul>

</nav>