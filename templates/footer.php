<div id="ft">
<footer class="content-info container" role="contentinfo">
		<div id="footer-wrap">
			<div class="row">
				<div class="col-md-2">
					<div id="footer-1">
						<h3>SeedProd</h3>
						<ul class="list-unstyled">
							<li><a href="http://www.seedprod.com/about/" style="padding-left:0">About</a></li>
							<li><a href="http://www.seedprod.com/contact/">Contact</a></li>
							<li><a href="http://www.seedprod.com/testimonials/">Testimonials</a></li>
							<li><a href="http://www.seedprod.com/affiliates/">Affiliates</a></li>
							
						</ul>					
					</div>
				</div>
				<div class="col-md-2">
					<div id="footer-2">
						<ul class="list-unstyled">
							<li><a href="http://www.seedprod.com/terms/">Terms &amp; Conditions</a></li>
							<li><a href="http://www.seedprod.com/refunds/">Refund Policy</a></li>
							<li><a href="http://www.seedprod.com/privacy/">Privacy Policy</a></li>
							<li><a href="http://www.seedprod.com/press-kit/">Press Kit</a></li>
						</ul>							
					</div>
				</div>
				<div class="col-md-8">
					<div id="footer-3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-footer.png">
						<span>
							Copyright &copy; <?php echo date('Y') ?> SeedProd LLC
						</span>
						<a href="https://twitter.com/seedprod" class="twitter-follow-button" data-show-count="false">Follow @seedprod</a>
					</div>
				</div>
			</div>
	    </div><!-- #footer-wrap -->
</footer>
</div>

<!-- Twitter Platform -->
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript">

  jQuery(document).ready(function($){
    // Target your .container, .wrapper, .post, etc.
    $(".post").fitVids();
  });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<script>
jQuery( document ).ready(function() {
if(jQuery.cookie("idev") === undefined){jQuery.cookie("idev", '100----------http%3A%2F%2Fwww.seedprod.com%2Findex.php',{ expires : 90,path    : '/',domain  : '.seedprod.com', });}
});
</script>

<?php wp_footer(); ?>
