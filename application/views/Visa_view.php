<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$images_dir = $third_party_URL . '/img/media/';
$static_path = $third_party_URL . '/img/static';
?>
<!--visa-->
<div class="travel-visa">
	<div class="card">
		<div class="card-block">
			<h3><b>Travel Assistance</b></h3>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim doloribus, debitis placeat provident nemo sit voluptatem nostrum! Id, amet rerum doloremque eligendi corrupti dolor veniam! Totam quo vitae modi. Aliquam.</p>

			<!--table-->
			<table class="table">
				<thead>
					<tr>
						<th>Country</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
<?php
			if ( $visa_lists ):
				$index = 1;
				foreach ($visa_lists as $value):
					$visa_id = $value->visa_id;
?>					
					<tr data-index="<?php echo $index ?>" data-id="<?php echo $visa_id ?>">
						<td><?php echo $value->visa_title ?></td>
						<td><?php echo $value->visa_price ?></td>
					</tr>
<?php
					$index++;
				endforeach;
			endif;
?>					
				</tbody>
			</table>
		</div>
	</div>
</div>