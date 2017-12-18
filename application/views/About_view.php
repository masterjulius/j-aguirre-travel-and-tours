<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$about_msg = $config_metadatas != false ? $config_metadatas->conf_about : ''; 
?>
<!--About body-->
<div class="travel-about">
	<div class="card">
		<div class="card-block">
			
			<div class="container">
				<h1>About Us</h1>
				<p><?php echo $about_msg ?></p>
			</div>

			<div id="map"></div>
		</div>
	</div>
</div>