<?php

/**
 * Template for displaying Tag pages
 *
 * @package WordPress
 * @subpackage DoneHQ
 * @since DoneHQ
 */

?>
<?php
// Объявляю переменные для атрибутов тега html данной страницы.
$wf_page = '6616d3d9bf7c52d0eac7933c';
$wf_site = '65fb2d744558f90976ea5dc6';

get_header();

?>
<main class="main">
    <?php
    if (function_exists('yoast_breadcrumb'))
    {
        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
    }
    ?>
    <section class="common-hero hero--blog">
        <div class="container">
            <div class="common-hero__content">
                <div class="common-hero__title-wrap">
                    <h1 class="common-hero__title title--blog-tag" style="text-transform: capitalize;"><?php single_tag_title(); ?></h1>
                </div>
                <div class="common-hero__title-wrap">
                    <div class="text text--common-hero"><?php echo tag_description(); ?></div>
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
        <div class="container">
            <div class="w-dyn-list">
                <div role="list" class="article__list w-dyn-items">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div role="listitem" class="article-list__item w-dyn-item">
                                <a class="article-list__item-inner" href="<?php the_permalink(); ?>" data-article="link">
                                    <div class="article-list__item-photo-wrap">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full', ['class' => 'article-list__item-photo', 'loading' => 'lazy']); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="article-list__item-content">
                                        <div class="article-list__item-author">
                                            <div class="article-list__item-author-photo-wrap">
                                                <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" loading="lazy" alt="" class="article-list__item-author-photo">

                                            </div>
                                            <div class="article-list__item-author-content">
                                                <div class="article-list__item-author-name"><?php the_author(); ?></div>
                                                <div class="article-list__item-author-content-bot">
                                                    <div class="article-list__item-date w-condition-invisible"><?php the_time('M d, Y'); ?></div>
                                                    <div class="article-list__item-date"><?php the_time('M d, Y'); ?></div>
                                                    <img src="path_to_ellipse_grey_image" loading="lazy" alt="" class="article-list__item-date-dot">
                                                    <div class="article-list__item-time-wrap">
                                                        <div class="article-list__item-time"><?php echo reading_time(); ?></div>
                                                        <div class="article-list__item-time">min</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-node-_716cd640-56bd-bdbe-59e2-e00e46b9f9f7-eac7933c">
                                            <div class="article-list__item-heading-wrap">
                                                <h3 class="heading small"><?php the_title(); ?></h3>
                                            </div>
                                            <div class="article-list__item-description-wrap">
                                                <div class="text"><?php the_excerpt(); ?></div>
                                            </div>
                                        </div>
                                        <div id="w-node-_716cd640-56bd-bdbe-59e2-e00e46b9f9fc-eac7933c" class="w-dyn-list">
                                            <div role="list" class="articles-list__tags w-dyn-items">
                                                <?php
                                                $post_tags = get_the_tags();
                                                if ($post_tags) :
                                                    foreach ($post_tags as $tag) :
                                                ?>
                                                        <div role="listitem" class="w-dyn-item">
                                                            <div style="color:#<?php echo get_tag_color($tag->slug); ?>;border-color:#<?php echo get_tag_color($tag->slug); ?>" class="articles-list__tag tag--it-card">
                                                                <?php echo $tag->name; ?>
                                                            </div>
                                                        </div>
                                                <?php endforeach;
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>


                    <?php
                    function reading_time()
                    {
                        $content = get_post_field('post_content', get_the_ID());
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 200); // Assuming average reading speed of 200 words per minute
                        return $reading_time;
                    }

                    function get_tag_color($tag_slug)
                    {
                        // Custom function to return color code based on tag slug
                        $colors = array(
                            'medicine' => '2965ff',
                            'wordpress' => '7ee100',
                            'compliance' => '2965ff',
                            'b2b' => 'fc4c02',
                            // Add more tag slugs and their corresponding colors here
                        );

                        return isset($colors[$tag_slug]) ? $colors[$tag_slug] : '000000'; // Default to black if no color is found
                    }
                    ?>





                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>