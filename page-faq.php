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

		<h3>How long do I have to wait after installing ConnecTite fittings to use my plumbing system?</h3>
		  <div>
		    <p>Because there are no solvent cements or adhesives, ConnecTite fittings do not have any cure time. As a result, you can begin using your plumbing system immediately after installing ConnecTite fittings..</p>
		  </div>

		  <h3>What must I do to prepare the end of the pipe before connecting it to a ConnecTite fitting?</h3>
		  <div>
		    <p>After cutting the pipe square, you should sand the outside end of the pipe with the provided sponge in order to remove any burrs and to create a bevel to make insertion easier.</p>
		  </div>

		  <h3>What are the benefits of not using primer and solvent cement?</h3>
		  <div>
		  		<ul>
		  			<li>Eliminates the use of volatile organic compounds (VOCs)</li>
		  			<li>Eliminates exposure to fumes from solvent cement</li>
		  			<li>Eliminates confusion over which solvent cement to use</li>
		  			<li>Eliminates the hazardous waste disposal of out-of-date cans of cement and primer</li>
		  			<li>Eliminates the waste of buying more primer or solvent cement than you need</li>
		  			<li>Eliminates the mess from spilling purple primer</li>
		  		</ul>
		  </div>

		<h3>What happens if you install a ConnecTite fitting and it is not properly aligned or does not have proper pitch?</h3>
		  <div>
		    <p>With a ConnecTite fitting, you can simply twist the fitting into proper alignment. This is helpful when you are using a fitting with a bend (90° Elbow, 45° Elbow or Sanitary Tee). If you have a misaligned fitting with solvent cement, the only option you have is to cut out the joint and start completely over.</p>
		  </div>

		 <h3>What happens if you realize that the pipe you use with a ConnecTite fitting is too long after you make the connection?</h3>
		 <div>If pipe is cut too short or too long, you can remove the pipe from the ConnecTite fitting, cut your pipe to the correct length and then reuse the same ConnecTite fitting up to three times. Again, with solvent cement your only option is to cut out the joint and start completely over.</div>

		 <h3>Can I use ConnecTite fittings with ABS pipe?</h3>
		 <div>Yes. ConnecTite fittings are compatible with both ABS and PVC pipe.</div>

		 <h3>Can ConnecTite joints be taken apart?</h3>
		 <div>Yes. All you have to do is simultaneously twist and pull the pipe and fitting apart. Unlike push-fit pressure fittings, ConnecTite fittings do not require a tool for reversal.</div>

		 <h3>Are ConnecTite fittings made in the USA?</h3>
		 <div>Yes. Like all Charlotte Pipe products, ConnecTite fittings are made in the USA.</div>

		 <h3>What keeps pipe from coming out of a ConnecTite fitting?</h3>
		 <div>The metal lock ring in the ConnecTite fitting bites into the pipe and prevents it from backing out of a ConnecTite fitting.</div>

		 <h3>Can ConnecTite fittings be installed in pressure applications?</h3>
		 <div>No. ConnecTite fittings can only be used in Drain, Waste and Vent (DWV) applications. They should never be used for any pressure applications.</div>

		 <h3>How can I be sure that ConnecTite fittings are reliable?</h3>
		 <div>ConnecTite fittings have been certified by NSF as meeting all of the requirements of NSF SE 14974, the only standard in the US for Push-Fit DWV Fittings.</div>

		 <h3>How can plumbing professionals and DIYers confirm that a push-fit DWV fitting has met the requirements of NSF SE 14974?</h3>
		 <div>Check the engraving on the fitting for “NSF® dwv SE”.  Also, search for NSF Certified Plumbing and Related Products at http://info.nsf.org/Certified/Plumbing/. In the “Product Standard” drop-down box, click on “SE” and search. Then, look under “Product Standard” on the far right for “SE 14974”.</div>

		 <h3>Do ConnecTite fittings meet relevant plumbing code requirements?</h3>
		 <div>Yes. ConnecTite fittings meet all applicable code requirements. The fittings are permitted to be used at the discretion of the code official. All of the model plumbing codes have provisions for approval of new products that are not yet specifically referenced in the codes (UPC Section 301.2; IPC Section 105.2).</div>
</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
