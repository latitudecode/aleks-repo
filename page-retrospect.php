<?php
/*
 * Template Name: Retrospect
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
<h1>Retrospect</h1>

<div class="liner"></div>
<p><?php the_content( 'index.php?page_id=6' ); ?></p>
</div>




<?php $loop = new WP_Query( array( 'post_type' => 'acme_retrospect', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>



<div class="columns clear half">
<div class="half project">
	<div class="half project-image">
		<?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
		<div class="project-type"><p>Video</p></div>		
	</div>
<h2><?php the_title(); ?></h2>
<p><?php the_excerpt(); ?><br /></p>
<div class="linker">
	<p><a href="#">↪</a></p>
</div>	
</div>
</div>
	

<?php endwhile; wp_reset_query(); ?>

</div>
<!-- end: content -->





<?php get_footer(); ?>
