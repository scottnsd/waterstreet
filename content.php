<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Waterstreet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">

	<header class="article-header">

		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="byline vcard"><?php
		printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
		?></p>

	</header> <?php // end article header ?>

	<section class="entry-content group">
		<?php the_content(); ?>
	</section> <?php // end article section ?>

	<footer class="article-footer">
		<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

	</footer> <?php // end article footer ?>

	<?php // comments_template(); // uncomment if you want to use them ?>

</article> <?php // end article ?>