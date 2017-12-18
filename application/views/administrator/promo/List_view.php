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
				<th scope="col">Title</th>
				<th scope="col">Date Created</th>
				<th scope="col">Created By</th>
				<th scope="col">Options</th>
			</tr>
		</thead>
		<tbody>
	<?php
		foreach ($data_lists as $value):
			$promo_id = $value->promo_id;
			$getUser = $this->usr_mdl->get_user_by_id( $value->promo_created_by, 'user_name' );
			$creator = $getUser != false ? $getUser->user_name : 'System Default'; 
	?>	
			<tr>
				<th scope="row"><?php echo $promo_id ?></th>
				<td><?php echo substr($value->promo_title, 0, 50) ?></td>
				<td><?php echo date( "F d, Y g:i:s A", strtotime( $value->promo_created_date ) ) ?></td>
				<td><?php echo $creator ?></td>
				<td><a href="./edit/<?php echo $promo_id ?>/" class="text-primary">Edit</a> | <a href="./delete/<?php echo $promo_id ?>/" class="text-danger">Delete</a></td>
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