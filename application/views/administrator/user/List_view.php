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
				<th scope="col">Username</th>
				<th scope="col">Role</th>
				<th scope="col">Date Created</th>
				<th scope="col">Created By</th>
				<th scope="col">Options</th>
			</tr>
		</thead>
		<tbody>
	<?php
		foreach ($data_lists as $value):
			$user_id = $value->user_id;
			$getUser = $this->usr_mdl->get_user_by_id( $value->user_created_by, 'user_name' );
			$creator = $getUser != false ? $getUser->user_name : 'System Default';
	?>	
			<tr>
				<th scope="row"><?php echo $user_id ?></th>
				<td><?php echo $value->user_name ?></td>
				<td><?php echo $value->user_role ?></td>
				<td><?php echo date( "F d, Y g:i:s A", strtotime( $value->user_created_date ) ) ?></td>
				<td><?php echo $creator ?></td>
				<td><a href="./delete/<?php echo $user_id ?>/" class="text-danger">Delete</a></td>
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