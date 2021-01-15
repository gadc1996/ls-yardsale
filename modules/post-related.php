<?php
	include('card.php');
	$query = new WP_Query( ['category_name' => $category]);
?>
	<section class="relatedArticles">
		<h2>Articulos Relacionados</h2>
<?php
		cardRowRender($maxPosts = 4, $maxCardsPerRow= 4, $category);
		wp_reset_postdata();
?>
		</section>
			
