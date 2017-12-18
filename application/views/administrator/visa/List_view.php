<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content">
<?php
if($data_lists):
?>
	<table class="table table-striped table-responsive-sm">
		<thead class="thead-inverse">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Visa Type</th>
				<th scope="col">Date Created</th>
				<th scope="col">Created By</th>
				<th scope="col">Options</th>
			</tr>
		</thead>
		<tbody>
	<?php
		foreach ($data_lists as $value):
			$visa_id = $value->visa_id;
	?>	
			<tr>
				<th scope="row"><?php echo $visa_id ?></th>
				<td><?php echo substr($value->visa_title, 0, 50) ?></td>
				<td><?php echo date( "F d, Y g:i:s A", strtotime( $value->visa_created_date ) ) ?></td>
				<td><?php echo $this->usr_mdl->get_user_by_id( $value->visa_created_by, 'user_name' )->user_name ?></td>
				<td><a href="./edit/<?php echo $visa_id ?>/" class="text-primary">Edit</a> | <a href="./delete/<?php echo $visa_id ?>/" class="text-danger">Delete</a></td>
			</tr>
	<?php
		endforeach;
	?>		
		</tbody>
	</table>
<?php
endif;
?>
</div>