    <?php

    /**
     * Template for displaying single pages
     *
     * @package WordPress
     * @subpackage DoneHQ
     * @since DoneHQ
     */

    ?>
    <?php
    // Объявляю переменные для атрибутов тега html данной страницы.
    $wf_page = '6616d2b39d82bcea9737660f';
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
        <section class="article">
            <div class="container">
                <div class="article__top">
                    <div class="article__title-wrap">
                        <?php
                        $current_post_title = get_the_title();
                        ?>
                        <h1 class="article__title"><?php echo esc_html($current_post_title); ?></h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="article__inner">
                    <div class="article__main">
                        <?php

                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        else :
                            echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>

                    </div>
                    <aside class="article__aside">
                        <div class="article__aside-info">
                            <div class="article__aside-info-top">
                                <?php
                                // Получаем автора поста
                                $author = get_the_author();

                                // Получаем дату публикации поста
                                $post_date = get_the_date();

                                // Получаем изображение автора
                                $author_avatar = get_avatar(get_the_author_meta('email'), 80);
                                ?>

                                <div class="article-list__item-author-photo-wrap">
                                    <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" loading="lazy" alt="" class="article-list__item-author-photo">


                                </div>

                                <div class="article-list__item-author-content">
                                    <div class="article-list__item-author-name">
                                        <?php echo $author; ?>
                                    </div>
                                    <div class="article-list__item-author-content-bot">
                                        <div class="article-list__item-date">
                                            <?php echo $post_date; ?>
                                        </div>
                                        <img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                        <div class="article-list__item-time-wrap">
                                            <div class="article-list__item-time">11</div>
                                            <div class="article-list__item-time">min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article__aside-info-middle">
                                <div class="article__aside-title-wrap">
                                    <div class="article__aside-title">The content of the article</div>
                                </div>

                                <ul role="list" class="article__aside-h2-list">
                                    <?php
                                    global $h2_headers;
                                    if (!empty($h2_headers))
                                    {
                                        foreach ($h2_headers as $header)
                                        {
                                            echo '<li><a class="article__aside-h2" href="#' . $header['id'] . '">' . $header['text'] . '</a></li>';
                                        }
                                    }
                                    ?>
                                </ul>

                            </div>
                            <div class="article__aside-info-bot"><a href="#" class="btn w-button">Subscribe</a></div>
                        </div>
                        <div class="article__aside-tags">
                            <div class="article__aside-title-wrap">
                                <div class="article__aside-title">Tags</div>
                            </div>
                            <div class="w-dyn-list">
                                <div role="list" class="articles-list__tags w-dyn-items">
                                    <?php
                                    $tag_colors = array('#06038d', '#ff0000', '#00ff00', '#0000ff', '#ff00ff');
                                    $tags = wp_get_post_tags(get_the_ID());
                                    if ($tags)
                                    {
                                        $color_index = 0;
                                        foreach ($tags as $tag)
                                        {
                                            $tag_color = $tag_colors[$color_index]; // Используем текущий цвет
                                            $color_index = ($color_index + 1) % count($tag_colors); // Увеличиваем индекс и переходим к следующему цвету, когда массив цветов заканчивается
                                            printf(
                                                '<div role="listitem" class="w-dyn-item"><a style="border-color:%1$s;color:%1$s" href="%2$s" class="articles-list__tag">%3$s</a></div>',
                                                esc_attr($tag_color),
                                                esc_url(get_tag_link($tag->term_id)),
                                                esc_html($tag->name)
                                            );
                                        }
                                    }
                                    ?>
                                </div>



                            </div>
                        </div>
                        <div class="article__aside-share">
                            <div class="article__aside-title-wrap">
                                <div class="article__aside-title">Follow us</div>
                            </div>
                            <div class="article__aside-share-list"><a href="#" class="article__aside-share-item w-inline-block"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6617d3201626e53a24f46bf6_social-4.svg" loading="lazy" alt=""></a><a href="#" class="article__aside-share-item w-inline-block"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6617d32087feb878fdbe03ca_social-1.svg" loading="lazy" alt=""></a><a href="#" class="article__aside-share-item w-inline-block"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6617d31f32e5b52fafde570c_social-2.svg" loading="lazy" alt=""></a><a href="#" class="article__aside-share-item w-inline-block"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6617d31f960ce659d4af38d7_social-3.svg" loading="lazy" alt=""></a></div>
                        </div>
                    </aside>
                </div>
                <div data-w-id="adfc45a3-5771-11e4-0fa3-33f39a35cc01" style="opacity: 0;" class="article__related">
                    <div class="article__related-title-wrap">
                        <h2 class="article__related-title">Related posts</h2>
                    </div>
                    <div class="w-dyn-list">
                        <div role="list" class="article__list w-dyn-items">

                            <?php
                            // Get the current post ID
                            $current_post_id = get_the_ID();

                            // Get the tags for the current post
                            $tags = wp_get_post_tags($current_post_id);

                            if ($tags)
                            {
                                // Get the IDs of the tags
                                $tag_ids = array();
                                foreach ($tags as $tag)
                                {
                                    $tag_ids[] = $tag->term_id;
                                }

                                // Create a new WP_Query
                                $related_posts_query = new WP_Query(array(
                                    'tag__in' => $tag_ids, // Get posts with any of these tags
                                    'post__not_in' => array($current_post_id), // Exclude the current post
                                    'posts_per_page' => 4, // Number of related posts to display
                                    'ignore_sticky_posts' => 1
                                ));

                                // Check if the query returns any posts
                                if ($related_posts_query->have_posts())
                                {

                                    // Loop through the posts and display them
                                    while ($related_posts_query->have_posts())
                                    {
                                        $related_posts_query->the_post();
                            ?>
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
                                                                <div class="article-list__item-date"><?php echo get_the_date('M j, Y'); ?></div>
                                                                <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div>
                                                                <img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                                                <div class="article-list__item-time-wrap">
                                                                    <div class="article-list__item-time">7</div>
                                                                    <div class="article-list__item-time">min</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="w-node-_4cf073b0-1810-7d0e-5457-9f2c5802410e-9737660f">
                                                        <div class="article-list__item-heading-wrap">
                                                            <h3 class="heading small"><?php the_title(); ?></h3>
                                                        </div>
                                                        <div class="article-list__item-description-wrap">
                                                            <div class="text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
                                                        </div>
                                                    </div>
                                                    <div id="w-node-_88e229e1-aacb-046e-1373-cddc9737225b-9737660f" class="w-dyn-list">
                                                        <div role="list" class="articles-list__tags w-dyn-items">
                                                            <?php
                                                            $post_tags = get_the_tags();
                                                            if ($post_tags)
                                                            {
                                                                foreach ($post_tags as $tag)
                                                                {
                                                                    echo '<div role="listitem" class="w-dyn-item">';
                                                                    echo '<div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">' . $tag->name . '</div>';
                                                                    echo '</div>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                            <?php
                                    }
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
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