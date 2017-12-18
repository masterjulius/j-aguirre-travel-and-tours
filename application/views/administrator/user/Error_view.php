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
$user_id = $this->uri->segment(4);
$target_url = site_url( '/administrator/' . $this->uri->segment(1) . 's/' . 'edit/' . $user_id );
echo form_open( $this->uri->uri_string(), '', array( 'target_url' => $target_url ) );
?>

	<div class="form-group">
		<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="<?php echo $thumbnail_id ?>" />
	</div>
	<div class="form-group">
		<input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username') ?>" placeholder="Type the username here..." autofocus="autofocus" />
	</div>
	<?php echo form_error('username') ?>

	<div class="form-group">
		<input type="password" name="password" id="password" class="form-control" placeholder="Type the password here..." />
	</div>
	<?php echo form_error('password') ?>
<?php if ( isset($err_msg) ): ?>
	<div class="alert alert-danger" role="alert">
		<strong>Oh snap!</strong> <?php echo $err_msg ?>
	</div>
<?php endif; ?>	

	<div class="form-group">
		<input type="cpassword" name="cpassword" id="cpassword" class="form-control" placeholder="Re-type the password here..." />
	</div>
	<?php echo form_error('cpassword') ?>

	<div class="form-group">
		<select name="user_role" class="custom-select form-control">
			<option value="0">&mdash; Select Role &mdash;</option>
			<option value="0" <?php echo set_value('user_role') == 0 ? 'selected' : ''; ?>>Administrator</option>
			<option value="1" <?php echo set_value('user_role') == 1 ? 'selected' : ''; ?>>Author</option>
		</select>
	</div>
	<?php echo form_error('user_role') ?>

	<div class="form-group">
		<input type="submit" class="btn btn-lg btn-primary" name="btnSave" value="SAVE">
	</div>

<?php echo form_close(); ?>
</div>