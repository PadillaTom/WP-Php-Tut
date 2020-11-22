<?php 
get_header();
while(have_posts()) {
   the_post( ) ?>
    <h1>It is a PAGE</h1>
   <h2>    <?php the_title() ?> </h2>
   <?php the_content() ?>   
   <?php
};
get_footer();
?>