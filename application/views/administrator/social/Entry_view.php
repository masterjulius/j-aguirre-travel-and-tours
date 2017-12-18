<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
<?php
	$social_id = $social_details != false ? $social_details->social_id : '';
	$facebook_url = $social_details != false ? $social_details->social_facebook : '';
	$twitter_url = $social_details != false ? $social_details->social_twitter : '';
	$linkedin_url = $social_details != false ? $social_details->social_linkedin : '';
	$google_plus_url = $social_details != false ? $social_details->social_google_plus : '';
	$target_url = site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) );
	echo form_open( '/social/save_accounts/' . ($social_id), '', array( 'target_url' => $target_url ) );
?>

		<div class="form-group row">
			<label for="facebook" class="col-2 col-form-label">Facebook</label>
			<div class="col-10">
				<input type="url" name="facebook" id="facebook" value="<?php echo $facebook_url ?>" class="form-control" autofocus="autofocus" />
			</div>
		</div>

		<div class="form-group row">
			<label for="twitter" class="col-2 col-form-label">Twitter</label>
			<div class="col-10">
				<input type="url" name="twitter" id="twitter" value="<?php echo $twitter_url ?>" class="form-control" />
			</div>
		</div>

		<div class="form-group row">
			<label for="linkedin" class="col-2 col-form-label">LinkedIn</label>
			<div class="col-10">
				<input type="url" name="linkedin" id="linkedin" value="<?php echo $linkedin_url ?>" class="form-control" />
			</div>
		</div>

		<div class="form-group row">
			<label for="googleplus" class="col-2 col-form-label">Google Plus</label>
			<div class="col-10">
				<input type="url" name="googleplus" id="googleplus" value="<?php echo $google_plus_url ?>" class="form-control" />
			</div>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-primary" name="btnSave" value="SAVE">
		</div>

<?php
	echo form_close();	
?>
</div>