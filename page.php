<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap group">

		<div id="main" class="col8 first group" role="main">

			
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
 			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // end of the loop. ?>


	</div> <!-- #main -->

	<?php get_sidebar(); ?>

</div> <!-- #inner-content -->  

</div> <!-- #content -->  


<?php get_footer(); ?>
