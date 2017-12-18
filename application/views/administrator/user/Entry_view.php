<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
	
	<div class="">

		<center>
			
			<input type="file" name="btn_upload_media" id="btn_upload_media" accept="image/*" hidden="hidden" />

			<div class="form-group img-uploaded-container"></div>

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
$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) );
echo form_open( '/users/save_user/', '', array( 'target_url' => $target_url ) );
?>

	<div class="form-group">
		<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="" />
	</div>
	<div class="form-group">
		<input type="text" name="username" id="username" class="form-control" placeholder="Type the username here..." autofocus="autofocus" />
	</div>

	<div class="form-group">
		<input type="password" name="password" id="password" class="form-control" placeholder="Type the password here..." />
	</div>

	<div class="form-group">
		<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Re-type the password here..." />
	</div>

	<div class="form-group">
		<select name="user_role" class="custom-select form-control">
			<option selected value="0">&mdash; Select Role &mdash;</option>
			<option value="0">Administrator</option>
			<option value="1">Author</option>
		</select>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-lg btn-primary" name="btnSave" value="SAVE">
	</div>

<?php echo form_close(); ?>
</div>