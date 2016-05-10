<?php

/*

Template Name: Locations

*/

?>

<?php get_header(); ?>

<section class="hero-image">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-image-copy">
					<img src="<?php bloginfo('template_directory'); ?>/images/pipes.png" alt="Connectite">
					<h1>Store Locations</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tag-line">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="call-out">
          <p>Connects Right. Seals Tight. Every Time.<sup>&#174;</sup></p>  
        </div>
      </div>
    </div>
  </div>
</section>

<section class="locations">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="location-intro">
					<h2>Find the Store Nearest You.</h2>	
				</div>
			</div>	
		</div>

			
				<?php if( have_rows('stores') ): ?>

						<?php while( have_rows('stores') ): the_row(); 

						//variables

						$store = get_sub_field('store_name');
						$store_location = get_sub_field('store_location');
						$store_address = get_sub_field('store_address');
						$web_link = get_sub_field('website_link');
						$google_link = get_sub_field('directions_link');


						?>

						<?php if($counter % 2 === 0) : echo '<div class="row">'; endif; ?>

							<div class="col-sm-6">
								<div class="location-wrap">
									<h3><?php echo $store; ?></h3>
									<p><?php echo $store_location; ?></p>
									<p><?php echo $store_address; ?></p>

									<div class="directions">
										<ul class="direction-list">
											<a href="<?php echo $web_link; ?>" target="_blank"><li><i class="fa fa-globe fa-3x" aria-hidden="true"></i><p>Website</p></li></a>
											<a href="<?php echo $google_link; ?>" target="_blank"><li><i class="fa fa-map-marker fa-3x" aria-hidden="true"></i><p>Directions</p></li></a>
										</ul>
									</div>
								</div>
							</div>

						<?php $counter++;  if($counter % 2 === 0) :  echo '</div>'; endif; ?>

					<?php endwhile; ?>
				<?php endif; ?>



	</div> <!-- container end -->
</section> <!-- locations section end -->


<?php get_footer(); ?>
