<?php

/* 
 * This page will render only pages, without posts
 */

get_header(); ?>

<div id="primary" class="content-area">
    
    <?php
    
     while (have_posts()) : the_post();
     
     // we're including the template part
     get_template_part('content', 'page');
     
     if (comments_open() or get_comments_number()) : comments_template();
     
         comments_template();
     
     endif;
    
     endwhile;
    ?>
    
        
</div><!-- .content-area -->

<?php

// we're not including sidebar

get_footer();