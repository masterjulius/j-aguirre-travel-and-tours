<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($user_credentials):
	$third_party_URL = base_url( '/public');
	$images_dir = $third_party_URL . '/img/media/';
	$get_media_result = $this->media_mdl->get_thumbnail_by_id( $user_credentials->user_img_id );
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
					<a href="!#" class="btn btn-secondary" id="btn_select_media">Choose</a>
				</div>

			</center>

		</div>
<?php
		$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) );
		echo form_open( '/users/save_user/' . ($this->current_user_session_id) . '/', '', array( 'target_url' => $target_url ) );
?>

			<div class="form-group">
				<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="<?php echo $user_credentials->user_img_id ?>" />
			</div>
			<div class="form-group">
				<input type="text" name="username" id="username" value="<?php echo $user_credentials->user_name ?>" class="form-control" placeholder="Type the username here..." autofocus="autofocus" />
			</div>

			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control" placeholder="Type the new password here..." />
			</div>

			<div class="form-group">
				<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Type your current password here..." />
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-lg btn-primary" name="btnSave" value="SAVE">
			</div>

<?php
		echo form_close();
?>
	</div>
<?php endif; ?>	