<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$images_dir = $third_party_URL . '/img/media/';
$static_path = $third_party_URL . '/img/static';
?>
<div class="travel-promos">
	<!--Travel body-->

	<div id="main-content" class="main">
		<div id="sidebar" class="sidebar">
			<div class="sidebar__inner">
				<ul>
					<a href="#domestic-promos"><li>Domestic Promos</li></a>
					<a href="#international-promos"><li>International Promos</li></a>
					<a href="#land-trip-promos"><li>Land Trip Promos</li></a>
				</ul>
			</div>
		</div>
		<div id="content" class="content">

			<div class="container">

	<!-- DOMESTIC GROUP -->

<?php
if ($domestic_promo_lists):
	echo '<div id="domestic-promos">';
	$index = 1;
	foreach ($domestic_promo_lists as $value):
		$promo_id = $value->promo_id;
		$cat_arr = array('Domestic Promos', 'International Promos', 'Land Trip Promos');
		$promo_cat = $value->promo_category;
		$thumbnail_id = $value->promo_thumbnail_id;
		$thumbnail_meta = $this->media_mdl->get_thumbnail_by_id($thumbnail_id);
		$thumbnail_img = $thumbnail_meta != false ? $images_dir . $thumbnail_meta->media_name : $static_path . '/destination/1.jpg';

		if ( $index === 1 ) {
			echo '<div class="row">';
		}
?>

			<div class="col">
				<div class="row active-with-click grid">
					<div class="grid-item">
						<article class="material-card Blue">
							<h2>
								<span><?php echo $value->promo_title ?></span>
								<strong>
									<i class="fa fa-fw fa-star"></i> <?php echo $cat_arr[$promo_cat-1] ?>
								</strong>
							</h2>
							<div class="mc-content">
								<div class="img-container">
									<img class="img-responsive" src="<?php echo $thumbnail_img ?>">
								</div>
								<div class="mc-description"><?php echo $value->promo_content ?></div>
							</div>
							<a class="mc-btn-action">
								<i class="fa fa-bars"></i>
							</a>
							<div class="mc-footer">
								<h4>Social</h4>
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
	echo '</div>';
endif;
?>

	<!-- INTERNATIONAL PROMOS -->
<?php
if ($international_promo_lists):
	echo '<div id="international-promos">';
	$index = 1;
	foreach ($international_promo_lists as $value):
		$promo_id = $value->promo_id;
		$cat_arr = array('Domestic Promos', 'International Promos', 'Land Trip Promos');
		$promo_cat = $value->promo_category;
		$thumbnail_id = $value->promo_thumbnail_id;
		$thumbnail_meta = $this->media_mdl->get_thumbnail_by_id($thumbnail_id);
		$thumbnail_img = $thumbnail_meta != false ? $images_dir . $thumbnail_meta->media_name : $static_path . '/destination/1.jpg';

		if ( $index === 1 ) {
			echo '<div class="row">';
		}
?>

			<div class="col">
				<div class="row active-with-click grid">
					<div class="grid-item">
						<article class="material-card Blue">
							<h2>
								<span><?php echo $value->promo_title ?></span>
								<strong>
									<i class="fa fa-fw fa-star"></i> <?php echo $cat_arr[$promo_cat-1] ?>
								</strong>
							</h2>
							<div class="mc-content">
								<div class="img-container">
									<img class="img-responsive" src="<?php echo $thumbnail_img ?>">
								</div>
								<div class="mc-description"><?php echo $value->promo_content ?></div>
							</div>
							<a class="mc-btn-action">
								<i class="fa fa-bars"></i>
							</a>
							<div class="mc-footer">
								<h4>Social</h4>
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
	echo '</div>';
endif;
?>

	<!-- LAND TRIP PROMOS -->
<?php
if ($land_trips_promo_lists):
	echo '<div id="land-trip-promos">';
	$index = 1;
	foreach ($land_trips_promo_lists as $value):
		$promo_id = $value->promo_id;
		$cat_arr = array('Domestic Promos', 'International Promos', 'Land Trip Promos');
		$promo_cat = $value->promo_category;
		$thumbnail_id = $value->promo_thumbnail_id;
		$thumbnail_meta = $this->media_mdl->get_thumbnail_by_id($thumbnail_id);
		$thumbnail_img = $thumbnail_meta != false ? $images_dir . $thumbnail_meta->media_name : $static_path . '/destination/1.jpg';

		if ( $index === 1 ) {
			echo '<div class="row">';
		}
?>

			<div class="col">
				<div class="row active-with-click grid">
					<div class="grid-item">
						<article class="material-card Blue">
							<h2>
								<span><?php echo $value->promo_title ?></span>
								<strong>
									<i class="fa fa-fw fa-star"></i> <?php echo $cat_arr[$promo_cat-1] ?>
								</strong>
							</h2>
							<div class="mc-content">
								<div class="img-container">
									<img class="img-responsive" src="<?php echo $thumbnail_img ?>">
								</div>
								<div class="mc-description"><?php echo $value->promo_content ?></div>
							</div>
							<a class="mc-btn-action">
								<i class="fa fa-bars"></i>
							</a>
							<div class="mc-footer">
								<h4>Social</h4>
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
	echo '</div>';
endif;
?>


				</div>
			</div>
		</div>

	</div>
</div>