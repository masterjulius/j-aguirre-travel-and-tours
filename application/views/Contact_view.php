<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_info = $config_metadatas != false ? $config_metadatas->conf_contact_info : 'xxxxxxxxxxx'; 
?>
<!--About contact-->
<div class="travel-contact">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<h1>Contact</h1>
				<ul>
					<i class="icon-adult"></i><li><?php echo $contact_info ?></li><!-- 
					<i class="icon-phone-squared"></i><li>sample</li>
					<i class="icon-globe"></i><li>sample</li>
					<i class="icon-location"></i><li>sample</li> -->
				</ul>
			</div>
		</div>
	</div>
</div>