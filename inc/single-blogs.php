<?php 
get_header();
?>
	<div class="bcpt-container margin">
		<main class="bcpt-inner">

<?php 
		while(have_posts()): the_post();
	?>
			<div class="bcpt-content blog-post hentry item-post">
				<h1 class="bcpt-title"><?php the_title();?></h1>
				<div class="bcpt-meta">
					<div class="bcpt-updated meta-box"> Updated on: </div>
					<div class="bcpt-category meta-box"> Posted in: <a href="#">Best Restaurant</a></div>
					<div class="bcpt-views meta-box">Viewed: 400 Times</div>
				</div>
				<div class="post-cover">
					<div class="post-cover-overlay"></div>
						<?php echo the_post_thumbnail('full',array('class'=>'img-fluid img-responsive'));?>
				</div>
				<div class="bcpt-post-content">
					<?php the_content(); ?>
				</div>
				
				<div class="bcpt-comments">
				<?php
			
		if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
			</div>
			
			<div class="bcpt-related">
				<?php //get_template_part('templates/post-meta/post-meta-style',1);?>	
				</div>
				
			</div>
			
			
			<div class="bcpt-sidebar">
				<?php dynamic_sidebar('bcptsidebar');?>			
			</div>
	<?php endwhile; ?>
		</main>
	</div>

<?php
get_footer();