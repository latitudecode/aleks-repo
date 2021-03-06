<?php
/*
 * Template Name: Laboratory
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
<h1>Laboratory</h1>

<div class="liner"></div>
<p><?php the_content( 'index.php?page_id=6' ); ?></p>
</div>


<div class="columns clear half">

<?php $loop = new WP_Query( array( 'post_type' => 'acme_laboratory', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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

<?php endwhile; wp_reset_query(); ?>

</div>
	



</div>
<!-- end: content -->





<?php get_footer(); ?>
