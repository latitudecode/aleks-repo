<?php
/*
 * Template Name: Homepage
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>

	<!-- end: head -->
	<body class="blog">

<?php query_posts('showposts=1'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- content -->
<div style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover;" class="content"><?php endif; ?>
	<!-- picks -->
	<div class="fit">
		
				
		<div class="homepage-feature"> <!-- big project -->

			<h2><?php the_title(); ?></h2><!-- big project title -->

			<p class="project-blurb"><?php the_excerpt( 500); ?></p>

		</div> <!-- end big  project -->

		<?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->
		
	</div>
	<!-- end: picks -->
</div>
</div>

	<!-- body -->
	<body class="blog">
	





<!-- content -->
<div class="content">

 



		
		<?php query_posts('page_id=30'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->
			
		<div class="homepage-meta"> <!-- big project -->

			<h2><?php the_title(); ?></h2><!-- big project title -->

			<p class="project-blurb"><?php the_excerpt(); ?></p>

		</div> <!-- end big  project -->

				<?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->




	<!-- post list -->
	<ul id="post-list">
	
 <?php foreach (get_categories() as $cat) : ?>

				
		<!-- article -->
<li id="article-119" class="post-119 post type-post status-publish format-standard hentry category-experiments category-uncategorized tag-envato tag-themeforest has-featured">
		
		
	<!-- figure -->
	<a href="../right-now-here/index.html" class="post-figure">

 		<img width="480" height="318" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="attachment-post-thumbnail wp-post-image" />
		<!-- image -->		
		
	</a>
	<!-- end: figure -->
	
		
	<!-- info -->
	<div class="post-info">
		
		<!-- title -->
		<h2 class="post-title"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a></h2>
		
				<!-- meta -->
		<ul class="meta">
			
			<!-- number of posts -->
			<li>
				<?php
				$args=array(
				  'include' => 3,
				  'orderby' => 'name',
				  'order' => 'ASC'
				  );
				$categories=get_categories($args);
				  foreach($categories as $category) {
				    echo '<a href="' . get_category_link( $category->term_id ) . '' . sprintf( __( "View all posts in %s" )) . '" ' . '>' . ' '  . $category->count . ' project </a> </p> ';
				  }
				?>
			</li>
			
			
		</ul>
		<!-- end: meta -->
	
	</div>
	<!-- end: info -->

</li>
<!-- end: article -->	


	<?php endforeach; ?>			
</ul>
	<!-- end: post list -->
	
	

	
	
</div>
<!-- end: content -->





<?php get_footer(); ?>