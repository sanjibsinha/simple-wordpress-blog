<h1 class="blog-post-title"><?php the_title(); ?></h1>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_content(); ?>       

        <?php 
        $expression = get_bloginfo('template_directory');
        var_dump($expression);