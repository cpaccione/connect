  <section class="footer">
  	<div class="container">
      <div class="footer-wrap">
  		  <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <?php dynamic_sidebar( 'first-column' ); ?>
          </div>
          <div class="col-md-2">
            <?php dynamic_sidebar( 'second-column' ); ?>
          </div>
          <div class="col-md-2">  
            <?php dynamic_sidebar( 'third-column' ); ?>
          </div> 
          <div class="col-md-2">
            <?php dynamic_sidebar( 'fourth-column' ); ?>
          </div>
          <div class="col-md-2">
            <?php dynamic_sidebar( 'fifth-column' ); ?>
          </div>
          <div class="col-md-1"></div>
  		  </div>
      </div>

  		<div class="row">
  			<div class="col-md-12">
  				<div class="copyright">
					<small>&copy; 2015 - <?php echo date("Y") ?> ThermFlo. All rights reserved.</small>
  				</div>
  			</div>
  		</div>

  	</div> <!-- container close --> 
  </section> <!-- footer section close -->

  <?php wp_footer(); ?>
  </body>
  
    <!-- sticky footer start --> 

    <div class="visible-xs" id="footer">
      <div class="container">
        <div class="row mobile-sticky-row">
          <div class="col-md-12">
            <div class="sticky-footer-copy text-center">
              <p><span><i class="fa fa-phone fa-1x"></i></span> (847) 541-0029</p>
            </div>
          </div>
        </div> <!-- row END --> 
      </div> <!-- content-wrap END -->
    </div> <!-- Footer END -->
    
</html>
