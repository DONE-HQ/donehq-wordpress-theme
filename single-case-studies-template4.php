<?php
/*
Template Name: Template4

Template Post Type: case-studies
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        шаблон 4
        <?php
        while (have_posts()) :
            the_post();
        // Ваш код шаблона здесь
        endwhile;
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php
get_sidebar();
get_footer();
?>