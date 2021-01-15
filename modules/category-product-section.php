<?php
	include('card.php');
	$category = single_cat_title('', false);
	$query = new WP_Query( ['category_name' => $category]);
	if($query -> have_posts()){
?>
		<section class="products">
		<h2><?php echo $category ?></h2>
<?php
		cardRowRender($maxPosts = 8, $maxCardsPerRow= 4, $category);
		}
		wp_reset_postdata();
?>	
		</section>

