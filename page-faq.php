<?php

/*

Template Name: FAQ

*/

?>

<?php get_header(); ?>

<section class="hero-image">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-image-copy">
					<img src="<?php bloginfo('template_directory'); ?>/images/pipes.png" alt="Connectite">
					<h1>FAQs</h1>
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

<section class="faq">
	<div class="container">
		<div class="row">
			<div id="accordion">

				<?php if( have_rows('faq') ): ?>

					<?php while( have_rows('faq') ): the_row(); ?>

						<h3><?php the_sub_field('question'); ?></h3>
						<div><?php the_sub_field('answer'); ?></div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
