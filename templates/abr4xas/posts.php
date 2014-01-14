	<section class="blank">
		<div class="item-featured">
			<div class="item-info">
				<h1><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h1>
				<p>Written by <?php echo($post_author); ?> @ <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></p>
			    <?php echo($post_intro); ?>
			    <a href="<?php echo($post_link); ?>" class="button button-small">Read more &raquo;</a>
			    <?php if ($category) { ?>
			        <a href="<?php echo($blog_url); ?>" class="button button-small">Back </a>
			    <?php } ?> 
			</div>
			<br class="clear">
		</div>
	</section>	