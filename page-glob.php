<?php
/*
 * Template Name: Glob
 * Description: A Page Template with a darker design.
 */

//

?>
<?php get_header(); ?>

	<!-- body -->
	<body class="blog">
	


<!-- content -->
<div class="content">

	<!-- post list -->
	<ul id="post-list">
	
<?php query_posts('cat=10'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->
							
				
		<!-- article -->
<li id="article-119" class="post-119 post type-post status-publish format-standard hentry category-experiments category-uncategorized tag-envato tag-themeforest has-featured">
		
		
	<!-- figure -->
	<a href="<?php the_permalink(); ?>" class="post-figure">
	
		<!-- image -->		
		 <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail();
                } 
                ?>
	</a>
	<!-- end: figure -->
	
		
	<!-- info -->
	<div class="post-info">
		
		<!-- title -->
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
				
		<!-- excerpt -->
		<p><?php the_excerpt(); ?></p>
	
		
				
		<!-- meta -->
		<ul class="meta">
			
			<!-- time -->
			<li><time datetime="2013-06-24T10:24:12+00:00">June 24, 2013</time></li>
			
			
		</ul>
		<!-- end: meta -->
<?php endwhile; ?>

<?php else : ?>
    <p>Whoops! We are working on it.</p>

<?php endif; ?> <!-- end loop -->	
	</div>
	<!-- end: info -->

</li>
<!-- end: article -->	
							
				
	</ul>
	<!-- end: post list -->
	
	
</div>
<!-- end: content -->



<!-- bottombar -->


		

<?php get_footer(); ?>