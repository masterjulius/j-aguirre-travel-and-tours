<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
<?php
if ($config_details):
	$config_id = $config_details->conf_id;
	$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) );
	echo form_open( '/config/save_settings/' . ($config_id) . '/', '', array( 'target_url' => $target_url ) );
?>

		<div class="form-group row">
			<label for="site_title" class="col-2 col-form-label">Site Title</label>
			<div class="col-10">
				<input type="text" name="site_title" id="site_title" value="<?php echo $config_details->conf_site_name ?>" class="form-control" autofocus="autofocus" />
			</div>
		</div>

		<div class="form-group row">
			<label for="site_description" class="col-2 col-form-label">Site Description</label>
			<div class="col-10">
				<textarea name="site_description" id="site_description" class="form-control"><?php echo $config_details->conf_site_description ?></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="featured_message" class="col-2 col-form-label">Featured Message</label>
			<div class="col-10">
				<textarea name="featured_message" id="featured_message" class="form-control"><?php echo $config_details->conf_featured_message ?></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="about" class="col-2 col-form-label">About</label>
			<div class="col-10">
				<textarea name="about" id="about" class="form-control"><?php echo $config_details->conf_about ?></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="contact_info" class="col-2 col-form-label">Contact Informations</label>
			<div class="col-10">
				<input type="text" name="contact_info" id="contact_info" value="<?php echo $config_details->conf_contact_info ?>" class="form-control" />
			</div>
		</div>

		<div class="form-group row">
			<label for="copyright_message" class="col-2 col-form-label">Copyright Message</label>
			<div class="col-10">
				<textarea name="copyright_message" id="copyright_message" class="form-control"><?php echo $config_details->conf_copyright_message ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-primary" name="btnSave" value="SAVE">
		</div>

<?php
	echo form_close();
endif;	
?>
</div>