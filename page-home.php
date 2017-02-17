<?php

/*

Template Name: Connectite Home Page

*/

?>

<?php get_header(); ?>

<!-- Revolution Slider  -->
<section class="rev-wrap">
	
	<?php putRevSlider("connectite_slider") ?>


</section>

<section class="mobile-hero">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <img class="center-block" src="<?php bloginfo('template_directory');?>/images/push_fit_logo_updated.png" alt="Push-fit Connectite">
          </div>
      </div>
  </div>
</section>

  <section class="tag-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="call-out">
              <p>Connects Right. Seals Tight. Every Time. <sup><small>&#174;</small></sup></p>  
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="row">
          <h1>Features</h1>
        </div>
      </div>
    </section>

    <section class="modals">
      <div class="container">

        <div class="row">
          <div class="col-sm-12">
            <div class="modal-intro">
              <h2>Unique, Patented, Reliable Connection</h2>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-sm-6">
            <img src="<?php bloginfo('template_directory');?>/images/features_image.png" alt="">
          </div>

          <div class="col-sm-6">
            <section class="modal-box">

                <?php if( have_rows('modals') ): ?>

                  <?php while(have_rows('modals') ): the_row(); ?>


              
                <a data-toggle="modal" href="#<?php the_sub_field('modal_id'); ?>">
                  <div class="modal-wrap">    
                    <!-- Button trigger modal -->
                    <p><?php the_sub_field('modal_name'); ?></p>
                  </div>
                </a>

                  <!-- Modal -->
                  <div class="modal fade" id="<?php the_sub_field('modal_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><?php the_sub_field('modal_heading'); ?></h4>
                        </div>
                        <div class="modal-body">
                          <?php the_sub_field('modal_copy'); ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal close -->

                <?php endwhile; ?>

              <?php endif; ?>

            </section>
          </div>
          
        </div>

      </div>
    </section>

    <!-- <section class="black-section"></section> -->
    <section class="shaded-pipe-bg" id="design-technology">
      <div class="container">
        <div class="row">
          <h1>Design Technology</h1>
        </div>
      </div>
    </section>
    <section class="design-tech">
      <div class="container">
        
        <div class="row">
            <div class="sub-heading">
              <h3>Patented Lock Ring &amp; Seal</h3>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <img src="<?php bloginfo('template_directory');?>/images/design_technology_image.png" alt="Patented Lock Ring &amp; Seal.">
          </div>
          <div class="col-sm-6">
            <div class="lock-and-ring">

              <div class="flex-wrap">
                <div class="letter"><img src="<?php bloginfo('template_directory');?>/images/letter_a.png"></div>
                <div class="copy"><p>Patented lock ring ensures connection is secure</p></div>
              </div>
              <div class="flex-wrap">
                <div class="letter"><img src="<?php bloginfo('template_directory');?>/images/letter_b.png"></div>
                <div class="copy"><p>Rubber gasket creates a tight seal</p></div>
              </div>
              <div class="flex-wrap">
                <div class="letter"><img src="<?php bloginfo('template_directory');?>/images/letter_c.png"></div>
                <div class="copy"><p>High-quality molded Schedule 40 fitting body</p></div>
              </div>

              <ul class="lock-ring-list">
                <li>No tools</li>
                <li>Less downtime</li>
                <li>Reversible and reusable</li>
                <li>Compatible with both ABS and PVC pipe</li>
              </ul>
            </div> <!-- lock and ring close --> 
          </div>
        </div>

      </div>
    </section>

    <!-- <section class="black-section"></section> -->
    <section class="shaded-pipe-bg" id="applications">
      <div class="container">
        <div class="row">
          <h1>Applications</h1>
        </div>
      </div>
    </section>

    <!-- APPLICATIONS -->
    <section class="applications">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h3>For Drain, Waste and Vent Applications<sup>*</sup></h3>
                  <small><sup>*</sup>Not for pressure</small> 
                </div>
              </div>
          </div>

          <div class="row app-first-row">

              <div class="col-sm-4">

                <div class="circle-wrap">

                  <div class="circle-base">

                    <!-- image  -->
                    <img class="img-circle center-block" src="<?php bloginfo('template_directory');?>/images/abs.jpg" alt="Connectite ABS">

                    <!-- plus symbol -->
                    <a data-toggle="modal" href="#absdwv"><div class="circle-overlay">
                      <img src="<?php bloginfo('template_directory'); ?>/images/plus-12.svg" alt="Connectite">
                    </div></a>

                    <div class="modal fade" id="absdwv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ABS DWV</h4>
                          </div>
                          <div class="modal-body">
                            <p>Use ConnecTite fittings with ABS pipe for simple, fast and reliable installations with minimal downtime. As an added benefit, ConnecTite fittings can be used to transition from ABS to PVC without the need for special transition solvent cement.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>

                    </div> <!-- modal close -->

                  </div> <!-- circle-base close -->

                  <span class="circle-name"><p>ABS DWV</p></span>

                </div> <!-- circle-wrap close -->

              </div> <!-- col-sm-4 close -->


              <div class="col-sm-4">

                <div class="circle-wrap">

                  <div class="circle-base">

                    <img class="img-circle center-block" src="<?php bloginfo('template_directory');?>/images/pvc.jpg" alt="Connectite PVC">

                      <a data-toggle="modal" href="#pvcdwv"><div class="circle-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/plus-12.svg" alt="Connectite">
                      </div></a>

                    <div class="modal fade" id="pvcdwv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">PVC DWV</h4>
                          </div>
                          <div class="modal-body">
                            <p>ConnecTite fittings can be used in any PVC non-pressure line in your house or building. Using ConnecTite fittings will allow you to quickly complete a project while having the peace of mind knowing that the product is reliably made in the USA.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="circle-name"><p>PVC DWV</p></span>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="circle-wrap">

                  <div class="circle-base">

                    <img class="img-circle center-block" src="<?php bloginfo('template_directory');?>/images/remodel.jpg" alt="Connectite Remodel">

                      <a data-toggle="modal" href="#remodel"><div class="circle-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/plus-12.svg" alt="Connectite">
                      </div></a>

                      <div class="modal fade" id="remodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Remodel</h4>
                              </div>

                              <div class="modal-body">
                                <p>When doing remodel work, you have to work within some existing framework. ConnecTite fittings allow you to easily do this as they fit within the confines of a 2” x 4” stud wall and can be repositioned for proper alignment to existing drain lines.</p>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>

                      </div> <!-- modal close -->

                    </div> <!-- circle-base close -->

                    <span class="circle-name"><p>Remodel</p></span>
                    

              </div> <!-- circle-wrap close -->
              </div> <!-- col-sm-4 close -->

              <!-- first row close -->
              </div> 

           <div class="row">
              <div class="col-sm-offset-2 col-sm-4">
                <div class="circle-wrap">
                <div class="circle-base">

                  <img class="img-circle center-block" src="<?php bloginfo('template_directory');?>/images/repair.jpg" alt="Connectite Repair">

                  <a data-toggle="modal" href="#repair"><div class="circle-overlay">
                    <img src="<?php bloginfo('template_directory'); ?>/images/plus-12.svg" alt="Connectite">
                  </div></a>

                      <div class="modal fade" id="repair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Repair</h4>
                              </div>
                              <div class="modal-body">
                                <p>Traditional solvent cement connections do not allow any margin for error. However, ConnecTite fittings can be completely reversed without any tools. This feature allows you multiple opportunities to ensure your measurements are correct when taking on a repair project.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <span class="circle-name"><p>Repair</p></span>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="circle-wrap">
                  <div class="circle-base">

                  <img class="img-circle center-block" src="<?php bloginfo('template_directory');?>/images/venting.jpg" alt="Connectite Venting">

                  <a data-toggle="modal" href="#venting"><div class="circle-overlay">
                    <img src="<?php bloginfo('template_directory'); ?>/images/plus-12.svg" alt="Connectite">
                  </div></a>

                      <div class="modal fade" id="venting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Venting</h4>
                              </div>
                              <div class="modal-body">
                                <p>Properly functioning vents are critical to plumbing systems. Whether making a repair to an existing vent line or installing a new vent line, ConnecTite fittings allow you to make fast and reliable connections, even if the connection is in a hard-to-reach location.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                  </div>
                  <span class="circle-name"><p>Venting</p></span>
                </div>
              </div>
          </div>

      </div>
    </section>

    <!-- <section class="black-section"></section> -->

    <section class="shaded-pipe-bg" id="quick-installation">
      <div class="container">

        <div class="row">
          <h1>Quick Installation</h1>
        </div>

      </div>
    </section>

    <section class="installation">
      <div class="container">

        <div class="row">

            <div class="col-md-12">
              <div class="video-wrapper">
                <video width="100%" height="100%" controls poster="<?php bloginfo('template_directory') ?>/images/video_place_holder.png" alt="Connectite Video">
                  <source src="<?php bloginfo('template_directory')?>/video/ConnecTite_V8.mp4" type="video/mp4">
                  <p>Your browser does not support this video file.</p>
                </video>
              </div>
            </div>

            <div class="col-md-12">
              <p>Watch step-by-step installation instructions or <a href="<?php bloginfo('template_directory'); ?>/pdf/145189_connectite.pdf" target="_blank">download PDF of instructions</a></p>
            </div>

        </div>
      </div>
    </section>
    
    <!-- <section class="black-section"></section> -->
    <section class="shaded-pipe-bg" id="available-products">
      <div class="container">
        <div class="row">
          <h1>Available Products</h1>
        </div>
      </div>
    </section>

    <section class="available-products">
      <div class="container">

        <div class="row ap-row">

          <div class="col-sm-6">
            <div class="img-overlay">
            
              <img src="<?php bloginfo('template_directory');?>/images/product_1.png">

              <div class="tapover portfolio-overlay">

              <div class="overlay-copy">
                <p><b>Coupling</b></p>
                <p>1 1/2 inch</p>
                <p>2 inch</p>
                <p>3 inch</p>
              </div>

              </div><!-- /.portfolio-overlay -->
              </div> <!-- /.img-overlay -->
          </div> <!-- /.col-sm-6 -->

          <div class="col-sm-6">
              <div class="img-overlay">
              <img src="<?php bloginfo('template_directory');?>/images/product_2.jpg">

              <div class="portfolio-overlay">

                <div class="overlay-copy">
                  <p><b>90&deg; Elbow</b></p>
                  <p>1 1/2 inch</p>
                  <p>2 inch</p>
                  <p>3 inch</p>
                </div>

              </div>
            </div> <!-- /.img-overlay -->
          </div> <!-- /.col-sm-6 -->

        </div> <!-- /.ap-row -->

        <div class="row ap-row">

        <div class="col-sm-6">
            <div class="img-overlay">
              <img src="<?php bloginfo('template_directory');?>/images/product_3.png">

              <div class="portfolio-overlay">
                <div class="overlay-copy">
                  <p><b>45&deg; Elbow</b></p>
                  <p>1 1/2 inch</p>
                  <p>2 inch</p>
                  <p>3 inch</p>
                </div>
              </div>
              
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="img-overlay">
              <img src="<?php bloginfo('template_directory');?>/images/product_4.png">

              <div class="portfolio-overlay">
                <div class="overlay-copy">
                  <p><b>Sanitary Tee</b></p>
                  <p>1 1/2 inch</p>
                  <p>2 inch</p>
                  <p>3 inch</p>
                </div>
              </div>
              
            </div>
        </div>

      </div> <!-- /.ap-row -->
    </div> <!-- /.container -->
  </section> <!-- /.available-products -->



<?php get_footer(); ?>
