<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$thumbnail_id = set_value('thumbnail_id');
$third_party_URL = base_url( '/public');
$images_dir = $third_party_URL . '/img/media/';
$get_media_result = $this->media_mdl->get_thumbnail_by_id( $thumbnail_id );
$thumbnail_img = ($get_media_result != false) ? $images_dir . $get_media_result->media_name : '';
?>
<div id="content">
	
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
$visa_id = $this->uri->segment(4);
$target_url = site_url( '/administrator/' . $this->uri->segment(1) . 's/' . 'edit/' . $visa_id );
echo form_open( $this->uri->uri_string(), '', array( 'target_url' => $target_url ) );
?>
	<div class="form-group">
		<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="<?php echo set_value('thumbnail_id'); ?>" />
	</div>

	<div class="form-group">
		<input type="text" name="visa_title" value="<?php echo set_value('visa_title'); ?>" id="visa_title" class="form-control" placeholder="Type the title here..." />
	</div>
	<?php echo form_error('visa_title') ?>

	<div class="form-group">
		<input type="number" name="visa_price" value="<?php echo set_value('visa_price'); ?>" id="visa_price" class="form-control" placeholder="Set the price here..." />
	</div>
	<?php echo form_error('visa_price') ?>

	<div class="form-group">
		<textarea name="visa_content" id="visa_content" class="form-control" placeholder="type the content here..."><?php echo set_value('visa_content'); ?></textarea>
	</div>
	<?php echo form_error('visa_content') ?>

	<div class="form-group">
		<input type="submit" name="btnSave" class="btn btn-lg btn-primary" value="SAVE">
	</div>
<?php echo form_close(); ?>
</div>