<section id="<?php echo($post_status); ?>">
    <h1><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h1>
    <p>Written by <?php echo($post_author); ?> @ <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></p>
    <?php echo($post_intro); ?>
    <a href="<?php echo($post_link); ?>" class="button-read-more">Read more &raquo;</a>
    <?php if ($category) { ?>
        <a href="<?php echo($blog_url); ?>" class="button-read-more">Back </a>
    <?php } ?>        
</section>
