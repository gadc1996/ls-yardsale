<?php 
while(have_posts()){
	the_post();
	$category=the_category();	
	
?>
	<section class="article">
	<img class="articleImage" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
	  <div class="articleInfo">
			<h2 class="articleTitle"><?php echo the_title() ?></h2>
			<?php the_content();  ?>
		</div>
	</section>
<?php 
	}
	
?>

