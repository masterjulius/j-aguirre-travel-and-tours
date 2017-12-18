<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$images_dir = $third_party_URL . '/img/media/';
?>
<div class="modal fade bd-example-modal-lg" id="modalMediaBox" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Media Library</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row media-body-container">
			<?php
				if ($media_lists):
					foreach( $media_lists as $value ):
						$media_id = $value->media_id;
						$img_src = $images_dir . $value->media_name;
			?>		
						<div class="media-img-selection-container col-md-3">
							<img src="<?php echo $img_src ?>" alt="" data-id="<?php echo $media_id ?>" class="media-img-selection img img-thumbnail" />
						</div>
			<?php
					endforeach;
				endif;
			?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>