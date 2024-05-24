<a data-css="btn-arrow" data-w-id="1b48d2d0-e39b-c4d1-2ec7-e1c87a493b1d" href="<?php the_permalink(); ?>" class="cases__item w-inline-block" style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(0.97, 0.97, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
    <div class="cases__item-top">
        <?php
        // Проверяем, есть ли у поста миниатюра
        if (has_post_thumbnail())
        {
            // Получаем URL миниатюры
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail')[0];

            // Выводим миниатюру с использованием URL
            echo '  <img src="' . esc_url($thumbnail_url) . '" loading="lazy" alt="' . esc_attr(get_the_title()) . '" class="cases__item-logo"> ';
        }

        ?>

        <?php

        // Получаем URL изображения из кастомного поля
        $case_image = get_field('case_image');
        if ($case_image)
        {
            $case_image_url = $case_image['url'];
            $case_image_alt = isset($case_image['alt']) ? $case_image['alt'] : ''; // Проверяем наличие alt-текста
            // Выводим изображение
            echo '<img data-css="hover-hide" class="cases__item-img" src="' . esc_url($case_image_url) . '" alt="' . esc_attr($case_image_alt) . '"  loading="lazy">';
        }
        else
        {
            echo '<p>Кастомное поле case_image пустое или не задано.</p>';
        }


        ?>






        <div class="cases__item-overlay"></div>
    </div>
    <div class="cases__item-bot">
        <div class="cases__item-content">
            <h3 class="cases__item-title">
                <?php
                // Выводим отрывок поста
                the_excerpt();
                ?>
            </h3>
            <div class="cases__item-text">
                <?php
                // Получаем список терминов из кастомной таксономии для текущего поста
                $terms = get_the_terms(get_the_ID(), 'case-category');

                // Если термины существуют
                if ($terms && !is_wp_error($terms))
                {
                    $first_term = reset($terms); // Получаем первый термин из списка
                    // Выводим первую категорию
                    echo '<span class="cases__item-tag">' . esc_html($first_term->name) . '</span>';
                }
                ?>
            </div>
        </div>
        <?php
        $template_directory_uri = get_template_directory_uri();
        echo '<img src="' . esc_url($template_directory_uri) . '/images/Icons.svg" loading="lazy" data-arrow-rotated="" alt="" class="cases__item-bot-arrow">';
        ?>
    </div>
</a>