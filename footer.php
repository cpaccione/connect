<!-- <section class="black-section"></section>
 --><section class="footer-copy">
	<div class="container">

		<div class="row">
			<div class="col-md-12">

          <?php wp_nav_menu( array( 
          	'menu' => 'footer',
          	'theme_location' => 'footer', 
          	'container_class' => 'footer' ) 
          	); 
          ?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
<!-- 				<ul class="social-icons">
					<li><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></li>
				</ul> -->
								<ul class="social-icons">
					<a href="https://www.facebook.com/CharlottePipe" target="_blank"><li><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></li></a>
					<a href="https://www.youtube.com/user/charlottepipefoundry" target="_blank"><li><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></li></a>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="small-copy-wrap">
					<p>Copyright &copy; <?php echo date("Y") ?> All rights reserved. Charlotte Pipe and Foundry Co., 2109 Randolph Road, Charlotte, NC 28207</p>
<!-- 					<p><a href="http://www.charlottepipe.com/privacy_policy.aspx" target="_blank">Privacy Policy</a> | <a href="http://www.charlottepipe.com/terms_of_use.aspx" target="_blank">Terms of Use</a></p> -->
				</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="small-copy-wrap">
					<p><a href="http://www.charlottepipe.com/privacy_policy.aspx" target="_blank">Privacy Policy</a> <a href="http://www.charlottepipe.com/terms_of_use.aspx" target="_blank">Terms of Use</a></p>
				</div>
			</div>
		</div> 	
			<!-- <div class="col-sm-3"> -->


		<!-- 	<div class="col-sm-4">
				<ul class="social-icons">
					<a href="https://www.facebook.com/CharlottePipe" target="_blank"><li><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></li></a>
					<a href="https://www.youtube.com/user/charlottepipefoundry" target="_blank"><li><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></li></a>
				</ul>
			</div> -->
		<!-- </div> -->
	</div>
</section>

  <?php wp_footer(); ?>
  </body>
    
</html>
