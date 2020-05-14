<?php

get_header();

//si il y a du contenu à afficher
if (have_posts()):
    //On boucle sur ce(s) contenu(s)
    while (have_posts()) : the_post();
        get_template_part( 'template-parts/article/article-detail'); 
    endwhile;
endif;

get_footer();

?>