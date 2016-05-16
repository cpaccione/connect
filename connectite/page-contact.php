<?php

/*

Template Name: Contact

*/

?>

<?php get_header(); ?>

<section class="hero-image">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-image-copy">
					<img src="<?php bloginfo('template_directory'); ?>/images/pipes.png" alt="Connectite">
					<h1>Contact Us</h1>
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

<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 col-md-push-7">
				<div class="contact-form-sidebar">
					<p>Charlotte Pipe<br>
					and Foundry Company<br>
					2109 Randolph Road<br>
					Charlotte, NC 28207</p>
					<p>000-000-000<br>
					<a href="mailto:info@connectite.com">info@connectite.com</a></p>
					<p><a href="/store-locations/">Store Locations</a></p>
				</div>
			</div>
			<div class="col-sm-12 col-md-7 col-md-pull-5">
				<?php echo do_shortcode( '[contact-form-7 id="1234" title="Connectite Form"]' ); ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
