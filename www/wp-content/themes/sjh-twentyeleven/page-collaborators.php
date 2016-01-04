<?php
/*
Template Name: collaborate
*/
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						
						
						<?php if (!is_page ('1926')) { ?>
							<?php if (is_tree('1926')) { ?>
						<!-- Begin MailChimp Signup Form -->
						
						<div id="mc_embed_signup">
						<img class="img-border" src="/wp-content/uploads/2015/10/story-tree-content.jpg" alt="Sign Up for Leo's newsletter - 'The Story Tree'" />
						<?php if (is_page('1841')) /* insight bird */ echo '<form action="//palaceofstories.us2.list-manage.com/subscribe/post?u=ac240678e7f9769631f2e8ed7&amp;id=09ac552b6a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>'; 
							elseif (is_page('1922')) /* queen of the sea/wisdom rx */ echo '<form action="//palaceofstories.us2.list-manage.com/subscribe/post?u=ac240678e7f9769631f2e8ed7&amp;id=9d7f26f887" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>';
							elseif (is_page('1988')) /* song of the land/garliq */ echo '<form action="//palaceofstories.us2.list-manage.com/subscribe/post?u=ac240678e7f9769631f2e8ed7&amp;id=de9d87e487" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>';
							 ?>
						    <div id="mc_embed_signup_scroll">
							<h3 class="underline">Get <em><?php if (is_page('1841')) echo '"The Insight Bird"'; elseif (is_page('1922')) echo '"The Queen of the Sea"'; elseif (is_page('1988')) echo '"The Song of the Land"'; ?></em> Now</h3>
							<p>You will also receive more free stories and insights from Leo through The Story Tree, his regular newsletter. You can unsubscribe at any time.</p>
						
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">First Name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Last Name </label>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
						</div>
						
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;">
							<?php if (is_page('1841')) /* insight bird/holistic coaching */ echo '<input type="text" name="b_ac240678e7f9769631f2e8ed7_09ac552b6a" tabindex="-1" value="">'; 
							elseif (is_page('1922')) /* queen of the sea/wisdom rx */ echo '<input type="text" name="b_ac240678e7f9769631f2e8ed7_9d7f26f887" tabindex="-1" value="">';
							elseif (is_page('1988')) /* song of the land/garliq */ echo '<input type="text" name="b_ac240678e7f9769631f2e8ed7_de9d87e487" tabindex="-1" value="">';
							 ?></div>
						    <div class="clear"><input type="submit" value="Get the free story" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
							
							
						<p>Thank you!</p>
						</form>
						
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!--End mc_embed_signup-->
						<?php } } ?>
						
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				
<?php endwhile; ?>

			</div><!-- #content -->
			

		</div><!-- #container -->

<?php get_footer(); ?>
