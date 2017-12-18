<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
<?php
if ($meta_datas):
	$third_party_URL = base_url( '/public');
	$images_dir = $third_party_URL . '/img/media/';

	$promo_id = $this->uri->segment(4);
	$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) . 'edit/' . $promo_id );
	$get_media_result = $this->media_mdl->get_thumbnail_by_id( $meta_datas->promo_thumbnail_id );
	$thumbnail_img = ($get_media_result != false) ? $images_dir . $get_media_result->media_name : '';
	$category = $meta_datas->promo_category;
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
	echo form_open( '/promo/save_promo/' . ($promo_id), '', array( 'target_url' => $target_url ) );
?>
		<div class="form-group">
			<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="<?php echo $meta_datas->promo_thumbnail_id ?>" />
		</div>

		<div class="form-group">
			<input type="text" name="promo_title" value="<?php echo $meta_datas->promo_title ?>" id="promo_title" class="form-control" placeholder="Type the title here..." />
		</div>

		<div class="form-group">
			<select name="promo_category" class="custom-select form-control">
				<option value="1">&mdash; Select Promo Type &mdash;</option>
				<option value="1" <?php echo $category == 1 ? 'selected' : '' ?>>Domestic Promos</option>
				<option value="2" <?php echo $category == 2 ? 'selected' : '' ?>>International Promos</option>
				<option value="3" <?php echo $category == 3 ? 'selected' : '' ?>>Land Trip Promos</option>
			</select>
		</div>

		<div class="form-group">
			<textarea name="promo_content" id="promo_content" class="form-control" placeholder="type the content here..."><?php echo $meta_datas->promo_content ?></textarea>
		</div>

		<div class="form-group">
			<input type="submit" name="btnSave" class="btn btn-lg btn-primary" value="SAVE">
		</div>
<?php
	echo form_close();
endif;	
?>
</div>