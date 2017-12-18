<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
<?php
if ($meta_datas):
	$third_party_URL = base_url( '/public');
	$images_dir = $third_party_URL . '/img/media/';

	$visa_id = $this->uri->segment(4);
	$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) . 'edit/' . $visa_id );
	$get_media_result = $this->media_mdl->get_thumbnail_by_id( $meta_datas->visa_thumbnail_id );
	$thumbnail_img = ($get_media_result != false) ? $images_dir . $get_media_result->media_name : '';
?>

	<div class="">

		<center>
		
			<input type="file" name="btn_upload_media" id="btn_upload_media" accept="image/*" hidden="hidden" />

			<div class="form-group img-uploaded-container">
				<img src="<?php echo $thumbnail_img ?>" height="200" width="200" class="img-thumbnail" alt="">
			</div>

			<div class="form-group">
				<a href="!#" class="btn btn-info" id="btn_click_upload_media">Upload</a>
			</div>

			<div class="form-group">
				or
			</div>

			<div class="form-group">
				<button class="btn btn-secondary" id="btn_select_media" data-toggle="modal" data-target="#modalMediaBox">Choose</button>
			</div>

		</center>

	</div>

<?php
	echo form_open( '/visa/save_visa/' . ($visa_id), '', array( 'target_url' => $target_url ) );
?>
		<div class="form-group">
			<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="<?php echo $meta_datas->visa_thumbnail_id ?>" />
		</div>

		<div class="form-group">
			<input type="text" name="visa_title" value="<?php echo $meta_datas->visa_title ?>" class="form-control" id="visa_title" placeholder="Type the title here..." />
		</div>

		<div class="form-group">
			<input type="number" name="visa_price" value="<?php echo $meta_datas->visa_price ?>" class="form-control" id="visa_price" placeholder="Set the price here..." />
		</div>

		<div class="form-group">
			<textarea name="visa_content" id="visa_content" class="form-control" placeholder="type the content here..."><?php echo $meta_datas->visa_content ?></textarea>
		</div>

		<div class="form-group">
			<input type="submit" name="btnSave" class="btn btn-lg btn-primary" value="SAVE">
		</div>
<?php
	echo form_close();
endif;	
?>
</div>