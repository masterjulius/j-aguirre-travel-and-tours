<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$action = $this->uri->segment(3);
$user_id = $this->uri->segment(4);
switch ($action) {
	case 'delete':
		$msg_action = 'remove';
		break;
	case 'restore':
		$msg_action = 'restore';
		break;
	default:
		$msg_action = 'remove';
		break;
}
?>
<div id="content">
<?php
	if (is_numeric($user_id)):
?>
	<div class="row">
		<div class="col-sm-4">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Pause for a moment!</h4>
					<h6 class="card-subtitle mb-2 text-muted">Confirm Now</h6>
					<p class="card-text">Are you sure you want to <?php echo $msg_action; ?> this user?</p>
					<?php echo form_open('', '', array('user_id'=>$user_id)); ?>
					<input type="submit" name="<?php echo $action; ?>_yes" value="Yes" class="btn btn-lg btn-danger cursor-pointer" />
					<input type="submit" name="<?php echo $action; ?>_no" value="No" class="btn btn-lg btn-primary cursor-pointer" />
					<?php echo form_close(); ?>
				</div>
			</div>	
		</div>
	</div>
		
<?php		
	endif;	
?>	
</div>