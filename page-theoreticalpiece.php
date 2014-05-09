<?php
/*
 * Template Name: Theoretical Piece
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>

	<!-- body -->
	<body class="blog">
	


<!-- content -->
<div class="content">


<div class="intro-text">
<h1><?php single_cat_title(''); ?></h1>
<div class="liner"></div>
<p><?php echo category_description( $category_id ); ?> </p>
</div>





<div class="columns clear half">

<?php query_posts('cat=8'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->


<div class="half project">
	<div class="half project-image">
		<?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail();
                } 
                ?>
		<div class="project-type"><p><?php single_cat_title(''); ?></p></div>		
	</div>
<h2><?php the_title(); ?></h2>
<p><?php the_excerpt(); ?><br /></p>
<div class="linker">
	<p><a href="<?php the_permalink() ?>">↪</a></p>
</div>	
</div>

<?php endwhile; ?>

<?php else : ?>
    <p>Whoops! We are working on it.</p>

<?php endif; ?> <!-- end loop -->
</div>
	
	
</div>
<!-- end: content -->





<?php get_footer(); ?>
