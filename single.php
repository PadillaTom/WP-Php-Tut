<?php 
get_header();

while(have_posts()) {
   the_post( ) ?>

<!-- BANNER -->
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg") ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
        Welcome yo our BLOG
      </h1>
      <div class="page-banner__intro">
        <p>Latest News :::: </p>
      </div>
    </div>  
  </div>
  <!-- Main Content -->
<div class="container container--narrow page-section">

 <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href=" <?php echo site_url("/blog");  ?> "><i class="fa fa-home" aria-hidden="true"></i> Blog Home </a> <span class="metabox__main">
          Posted By <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in <?php echo get_the_category_list(", git status"); ?>

      </span></p>
    </div>
<div class="generic-content">
<?php the_content(); ?>
</div>
</div>

  
   <?php
}
get_footer();
?>