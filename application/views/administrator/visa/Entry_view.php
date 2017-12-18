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
$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) . 'edit/' );
echo form_open( '/visa/save_visa/', '', array( 'target_url' => $target_url ) );
?>

	<div class="form-group">
		<input type="hidden" name="thumbnail_id" id="thumbnail_id" value="" />
	</div>

	<div class="form-group">
		<input type="text" name="visa_title" id="visa_title" class="form-control" placeholder="Type the title here..." />
	</div>

	<div class="form-group">
		<input type="number" name="visa_price" value="visa_price" id="visa_price" class="form-control" placeholder="Set the price here..." />
	</div>

	<div class="form-group">
		<textarea name="visa_content" id="visa_content" class="form-control" placeholder="type the content here..."></textarea>
	</div>

	<div class="form-group">
		<input type="submit" name="btnSave" class="btn btn-lg btn-primary" value="SAVE">
	</div>
<?php echo form_close(); ?>
</div>