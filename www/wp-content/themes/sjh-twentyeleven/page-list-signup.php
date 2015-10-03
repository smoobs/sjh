<?php
/*
Template Name: Page with Signup Form
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
				<div class="story-tree-signup"><img class="img-border" src="/images/story-tree-content.jpg" alt="" />
					<h3>The Story Tree Newsletter</h3>
					<form id="mc-embedded-subscribe-form" class="validate" action="//storiesofthejourneyhome.us2.list-manage.com/subscribe/post?u=ac240678e7f9769631f2e8ed7&amp;id=422d77c706" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
					<div class="mc-field-group"><input id="mce-FNAME" class="required name inputbox" name="FNAME" type="text" value="" placeholder="Name" /></div>
					<div class="mc-field-group"><input id="mce-EMAIL" class="required email inputbox" name="EMAIL" type="email" value="" placeholder="Email" /></div>
					<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_ac240678e7f9769631f2e8ed7_422d77c706" type="text" value="" /></div>
					</form></div>
					<p>Or, click here to read about <a href="http://www.storiesofthejourneyhome.com/">The Power of Stories</a> and how they help us navigate life.</p>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>