<?php

/**
 * Template Name: Blog Page
 *
 * @package WordPress
 * @subpackage DoneHQ
 * @since DoneHQ
 */

?>
<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '660efcb24ba3cc1da34e2ad7';
$wf_site = '65fb2d744558f90976ea5dc6';

get_header();

?>
<main class="main">
    <div data-css="scrollbar-none" class="breadcrumbs"><a href="/" class="breadcrumbs__item">Home</a>
        <div class="breadcrumbs__sep">&gt;</div>
        <div class="breadcrumbs__item item--active">Blog</div>
    </div>
    <section class="common-hero hero--blog">
        <div class="container">
            <div class="common-hero__content">
                <div class="common-hero__title-wrap">
                    <h1 class="common-hero__title">Our Blog</h1>
                </div>
                <?php
                // Массив цветов для тегов
                $tag_colors = array('#06038d', '#ff0000', '#00ff00', '#0000ff', '#ff00ff');
                $color_index = 0; // Индекс текущего цвета в массиве
                ?>
                <div class="w-dyn-list">
                    <div role="list" class="articles-list__tags w-dyn-items">
                        <?php
                        $post_tags = get_tags(); // Получаем все теги
                        if ($post_tags) :
                            foreach ($post_tags as $tag) :
                                $tag_name = $tag->name;
                                $tag_color = $tag_colors[$color_index]; // Используем текущий цвет
                                $color_index = ($color_index + 1) % count($tag_colors); // Увеличиваем индекс и переходим к следующему цвету, когда массив цветов заканчивается
                        ?>
                                <div role="listitem" class="w-dyn-item">
                                    <a style="border-color:<?php echo esc_attr($tag_color); ?>;color:<?php echo esc_attr($tag_color); ?>" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="articles-list__tag"><?php echo esc_html($tag_name); ?></a>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="articles">
        <div class="css w-embed">
            <style>
                .article-list__item-description-wrap:after {
                    content: "";
                    z-index: 2;
                    text-align: right;
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    width: 40%;
                    height: 2em;
                    background: linear-gradient(to right, rgba(255, 255, 255, 0), white 100%);
                    pointer-events: none;
                }

                @media screen and (max-width: 768px) {
                    .article-list__item-description-wrap:after {
                        content: "";
                        z-index: 2;
                        text-align: right;
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        width: 30%;
                        height: 1em;
                        background: linear-gradient(to right, rgba(255, 255, 255, 0), white 100%);
                        pointer-events: none;
                    }
                }

                @media screen and (min-width: 768px) {

                    .article-list__item:first-child,
                    .article-list__item:nth-child(4),
                    .article-list__item:nth-child(5),
                    .article-list__item:nth-child(8) {
                        grid-column-start: span 2;
                        grid-column-end: span 2;
                        grid-row-start: span 1;
                        grid-row-end: span 1;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-tag {
                        justify-content: flex-end;
                        align-items: center;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-tags {
                        position: absolute;
                        left: auto;
                        top: 0%;
                        right: 0%;
                        bottom: auto;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-photo-wrap {
                        height: 34.5em;
                    }
                }
            </style>
        </div>
        <div class="container">
            <div class="w-dyn-list">
                <div fs-cmsload-element="list" role="list" class="article__list w-dyn-items">
                    <?php
                    // Настройка параметров запроса для вывода постов в порядке от новых к старым
                    $query_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 12, // Количество постов для вывода
                        'order' => 'DESC',
                        'orderby' => 'date'
                    );

                    // Создание нового объекта WP_Query
                    $query = new WP_QUERY($query_args);

                    // Начало цикла
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            // Получение данных о посте
                            $post_id = get_the_ID();
                            $post_title = get_the_title();
                            $post_excerpt = wp_trim_words(get_the_excerpt(), 56, '...');
                            $post_permalink = get_permalink();
                            $post_thumbnail = get_the_post_thumbnail_url($post_id, 'full');
                            $post_author = get_the_author();
                            $post_date = get_the_date('M j, Y');
                            $post_time = get_the_time('H:i'); // Измените на get_the_time, чтобы получить время публикации
                    ?>
                            <div role="listitem" class="article-list__item w-dyn-item">
                                <a class="article-list__item-inner 123" href="<?php echo  esc_url($post_permalink); ?>">
                                    <div class="article-list__item-photo-wrap">
                                        <img src="<?php echo esc_url($post_thumbnail); ?>" loading="lazy" alt="" class="article-list__item-photo">
                                    </div>
                                    <div class="article-list__item-content">
                                        <div class="article-list__item-author">
                                            <div class="article-list__item-author-photo-wrap">
                                                <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" loading="lazy" alt="" class="article-list__item-author-photo">
                                            </div>
                                            <div class="article-list__item-author-content">
                                                <div class="article-list__item-author-name"><?php echo esc_html($post_author); ?></div>
                                                <div class="article-list__item-author-content-bot">
                                                    <div class="article-list__item-date"><?php echo esc_html($post_date); ?></div>
                                                    <img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                                    <div class="article-list__item-time-wrap">
                                                        <div class="article-list__item-time"><?php echo esc_html($post_time); ?></div>
                                                        <div class="article-list__item-time">min</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                            <div class="article-list__item-heading-wrap">
                                                <h3 class="heading small"><?php echo esc_html($post_title); ?></h3>
                                            </div>
                                            <div class="article-list__item-description-wrap">
                                                <div class="text"><?php echo esc_html($post_excerpt); ?></div>
                                            </div>
                                        </div>

                                        <?php
                                        // Второй вывод тегов (в середине страницы)
                                        ?>
                                        <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                            <div role="list" class="articles-list__tags w-dyn-items">
                                                <?php
                                                $post_tags = get_the_tags();
                                                if ($post_tags) :
                                                    foreach ($post_tags as $tag) :
                                                        $tag_name = $tag->name;
                                                        $tag_color = $tag_colors[$color_index]; // Используйте текущий цвет
                                                        $color_index = ($color_index + 1) % count($tag_colors); // Увеличиваем индекс и переходим к следующему цвету, когда массив цветов заканчивается
                                                ?>
                                                        <div role="listitem" class="w-dyn-item">
                                                            <div style="color:<?php echo esc_attr($tag_color); ?>;border-color:<?php echo esc_attr($tag_color); ?>" class="articles-list__tag tag--it-card"><?php echo esc_html($tag_name); ?></div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // Сброс глобальных данных поста
                    else :
                        echo '<p>No posts found</p>';
                    endif;
                    ?>


                </div>
                <div role="navigation" aria-label="List" class="w-pagination-wrapper article-list__show-more-wrap"><a href="?58c0723e_page=1" aria-label="Previous Page" class="w-pagination-previous" style="display: none;"><svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                            <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                        </svg>
                        <div class="w-inline-block">Previous</div>
                    </a><a fs-cmsload-mode="load-under" href="?58c0723e_page=2" aria-label="Next Page" class="w-pagination-next btn btn--border-light-blue">
                        <div class="w-inline-block">Load more</div>
                    </a>
                    <link rel="prerender" href="?58c0723e_page=2">
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>