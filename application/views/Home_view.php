<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$images_dir = $third_party_URL . '/img/media/';
$static_path = $third_party_URL . '/img/static';
$featured_message = $config_metadatas != false ? $config_metadatas->conf_featured_message : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim, porro aut dolores accusamus sequi modi, aliquid qui magnam voluptate voluptatum quo perspiciatis ut natus ullam reiciendis, cupiditate praesentium tenetur.';
?>
<!-- Content One -->
<!--Featured tours-->
<div class="travel-featuredTours">

	<div class="container">
		<h3><b>Featured Tours</b></h3>
<?php
if ($promo_lists):
	$index = 1;
	foreach ($promo_lists as $value):
		$promo_id = $value->promo_id;
		$thumbnail_id = $value->promo_thumbnail_id;
		$thumbnail_meta = $this->media_mdl->get_thumbnail_by_id($thumbnail_id);
		$thumbnail_img = $thumbnail_meta != false ? $images_dir . $thumbnail_meta->media_name : $static_path . '/destination/1.jpg';
		if ( $index === 1 ) {
			echo '<div class="row">';
		}
?>
			<div class="col" data-index="<?php echo $index; ?>">
				<div class="row active-with-click grid">
					<div class="grid-item">
						<article class="material-card Blue">
							<h2>
								<span><?php echo $value->promo_title; ?></span>
								<!-- <strong>
									<i class="fa fa-fw fa-star"></i>
									The Deer Hunter
								</strong> -->
							</h2>
							<div class="mc-content">
								<div class="img-container">
									<img class="img-responsive" src="<?php echo $thumbnail_img ?>">
								</div>
								<div class="mc-description"><?php echo $value->promo_content; ?></div>
							</div>
							<a class="mc-btn-action">
								<i class="fa fa-bars"></i>
							</a>
							<div class="mc-footer">
								<h4>
									Social
								</h4>
								<a href="<?php echo $social_links['facebook'] ?>" class="fa fa-fw fa-facebook"></a>
								<a href="<?php echo $social_links['twitter'] ?>" class="fa fa-fw fa-twitter"></a>
								<a href="<?php echo $social_links['linkedin'] ?>" class="fa fa-fw fa-linkedin"></a>
								<a href="<?php echo $social_links['googleplus'] ?>" class="fa fa-fw fa-google-plus"></a>
							</div>
						</article>
					</div>

				</div>
			</div>
<?php
		$index++;
		if ( ($index%3) === 1 ) {
			echo '</div>';
			$index = 1;
		}	
	endforeach;
endif;
?>

	</div>

</div>

<!-- Content Two -->
<div class="travel-tagline" style="background-image: url('<?php echo $static_path ?>/destination/2.jpg');">
	<h1>Tagline</h1>
	<p><?php echo $featured_message ?></p>
	<button type="button" class="btn btn-primary">Primary</button>
</div>

<!-- Visa Assistance -->
<div class="travel-featured">
	
	<div class="container">
		<h3><b>Latest Promos</b></h3>
<?php
if ($visa_lists):
	$index = 1;
	foreach ($visa_lists as $value):
		$visa_id = $value->visa_id;
		$thumbnail_id = $value->visa_thumbnail_id;
		$thumbnail_meta = $this->media_mdl->get_thumbnail_by_id($thumbnail_id);
		$thumbnail_img = $thumbnail_meta != false ? $images_dir . $thumbnail_meta->media_name : $static_path . '/destination/1.jpg';
		if ( $index === 1 ) {
			echo '<div class="row">';
		}
?>			
		<div class="col" data-index="<?php echo $index ?>">
			<div class="row active-with-click grid">
				<div class="grid-item">
					<article class="material-card Blue">
						<h2>
							<span><?php echo $value->visa_title ?></span>
							<!-- <strong>
								<i class="fa fa-fw fa-star"></i>
								The Deer Hunter
							</strong> -->
						</h2>
						<div class="mc-content">
							<div class="img-container">
								<img class="img-responsive" src="<?php echo $thumbnail_img ?>">
							</div>
							<div class="mc-description"><?php echo $value->visa_content ?></div>
						</div>
						<a class="mc-btn-action">
							<i class="fa fa-bars"></i>
						</a>
						<div class="mc-footer">
							<h4>
								Social
							</h4>
							<a href="<?php echo $social_links['facebook'] ?>" class="fa fa-fw fa-facebook"></a>
							<a href="<?php echo $social_links['twitter'] ?>" class="fa fa-fw fa-twitter"></a>
							<a href="<?php echo $social_links['linkedin'] ?>" class="fa fa-fw fa-linkedin"></a>
							<a href="<?php echo $social_links['googleplus'] ?>" class="fa fa-fw fa-google-plus"></a>
						</div>
					</article>
				</div>

			</div>
		</div>
<?php
		$index++;
		if ( ($index%3) === 1 ) {
			echo '</div>';
			$index = 1;
		}
	endforeach;
endif;		
?>		
	</div>

</div>

<!-- Advertisement Carousel here... -->
<!--Slick slider airlines-->
<div class="travel-airlineslider container">

	<div class="travelairlineslidercontent">
<?php
	for( $i=1;$i<=9;$i++ ):
?>		
		<div>
			<img src="<?php echo $static_path ?>/logo/<?php echo $i ?>.png" class="img-fluid" alt="Responsive image">
		</div>
<?php
	endfor;
?>		
	</div>
</div>
