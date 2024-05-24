<?php
/*
Template Name: OwnUp
Template Post Type: case-studies
*/
get_header();
?>

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
                    <h1 class="common-hero__title"><?php single_post_title(); ?></h1>
                </div>
                <div class="common-hero__frames">
                    <div class="cats-list">
                        <?php
                        // Получаем ID текущего поста или страницы
                        $current_post_id = get_the_ID();

                        // Получаем все термины из кастомной таксономии 'case-category', к которым принадлежит текущий пост
                        $categories = get_the_terms($current_post_id, 'case-category');

                        if (!empty($categories) && !is_wp_error($categories))
                        {
                            $counter = 1; // Инициализируем счетчик
                            foreach ($categories as $category)
                            {
                                // Создаем ссылку на архивную страницу для данной категории
                                $category_link = get_term_link($category);

                                // Выводим ссылку с учетом активного класса
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
</main>

<?php
get_footer();
?>