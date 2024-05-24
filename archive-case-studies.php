<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '660dcb9528d3895f0e5be8f4';
$wf_site = '65fb2d744558f90976ea5dc6';
get_header();
?>

<main id="main" class="main">



    <?php
    if (function_exists('yoast_breadcrumb'))
    {
        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
    }
    ?>
    <section class="common-hero">
        <div class="container">
            <div class="common-hero__content">
                <div class="common-hero__title-wrap">
                    <h1 class="common-hero__title">Case Studies</h1>
                </div>
                <div class="common-hero__frames">
                    <div class="cats-list">
                        <?php
                        // Получаем все термины из кастомной таксономии 'case-category'
                        $categories = get_terms(array(
                            'taxonomy' => 'case-category',
                            'hide_empty' => false,
                        ));

                        if (!empty($categories) && !is_wp_error($categories))
                        {
                            $counter = 1; // Инициализируем счетчик
                            foreach ($categories as $category)
                            {
                                // Создаем ссылку на архивную страницу для данной категории
                                $category_link = get_term_link($category);
                                echo '<a href="' . esc_url($category_link) . '" class="cat-link c-' . $counter . '" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
                                $counter++; // Увеличиваем счетчик
                            }
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php
    if (have_posts()) :

        /* Заголовок архива */
        // the_archive_title('<h1 class="page-title">', '</h1>');
        // the_archive_description('<div class="archive-description">', '</div>');
    ?>
        <section class="cases">
            <div class="container">
                <div class="cases__inner">
                    <div id="w-node-_1b48d2d0-e39b-c4d1-2ec7-e1c87a493b0d-0e5be8f4" class="css w-embed">
                    </div>
                    <div class="cases__list">
                        <?php
                        /* Начало цикла */
                        while (have_posts()) :
                            the_post();

                            /*
                 * Вставьте шаблон для контента.
                 * В данном случае, можно использовать content-{post-type}.php,
                 * который нужно создать отдельно.
                 */
                            get_template_part('template-parts/content', 'cases');

                        endwhile;

                        /* Навигация по записям */
                        the_posts_navigation();
                        ?>

                    </div>
                    <a href="#" class="btn hide w-button">Load more</a>
                </div>
            </div>
        </section>
    <?php
    else :

        /* Если записей не найдено, покажем сообщение */
        get_template_part('template-parts/content', 'none');

    endif;
    ?>
</main><!-- .site-main -->

<?php
get_footer();
?>