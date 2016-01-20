<?php
/**
 * Template Name: Sidebar Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
					
				<div class="story-tree-signup newsletter-signup">
					<img src="/images/story-tree-signup.jpg" alt="Sign Up for Leo's newsletter - 'The Story Tree'" title="Sign Up for Leo's newsletter - 'The Story Tree'" />
					<h3>Sign Up for Leo's newsletter - The Story Tree</h3>
					
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//palaceofstories.us2.list-manage.com/subscribe/post?u=ac240678e7f9769631f2e8ed7&amp;id=2c8f55799b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email </label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-MMERGE2">Last Name </label>
						<input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ac240678e7f9769631f2e8ed7_2c8f55799b" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div><!-- end #mc_embed_signup -->
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!-- End mc_embed_signup code -->
				</div><!-- end .story-tree-signup -->

	
					
				
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>