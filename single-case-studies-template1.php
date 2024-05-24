<?php
/*
Template Name: Template 99
Template Post Type: case-studies
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>Template 1</h1>
        <?php
        while (have_posts()) :
            the_post();
            // Ваш код шаблона здесь

            // Отображение полей ACF
            if (function_exists('the_field'))
            {
                // Выводим все метаполя для отладки
                $fields = get_field_objects();
                if ($fields)
                {
                    echo '<ul>';
                    foreach ($fields as $field)
                    {
                        echo '<li>' . $field['label'] . ': ' . get_field($field['name']) . '</li>';
                    }
                    echo '</ul>';
                }
                else
                {
                    echo 'No ACF fields found.';
                }
            }
            else
            {
                echo 'ACF not active.';
            }
        endwhile;
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
?>