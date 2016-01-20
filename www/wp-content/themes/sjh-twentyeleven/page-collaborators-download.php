<?php
/*
Template Name: collaborators download
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
						
						
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				
<?php endwhile; ?>

			</div><!-- #content -->
			

		</div><!-- #container -->

<?php get_footer(); ?>
