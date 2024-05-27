<?php
/*
Template Name: OwnUp
Template Post Type: case-studies
*/
get_header();
?>

<main id="main" class="main">

    <?php
    if (function_exists('yoast_breadcrumb'))
    {
        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
    }
    ?>

    <?php if (have_rows('hero_section')) : ?>
        <?php while (have_rows('hero_section')) : the_row(); ?>
            <?php if (get_row_layout() == 'hero_content') : ?>
                <section class="c-hero">
                    <div class="container">
                        <div class="c-hero__content">
                            <div class="common-hero__title-wrap wrap--cases">
                                <h1 class="common-hero__title"><?php the_sub_field('hero_title'); ?></h1>
                            </div>
                            <div class="common-hero__frames">
                                <div class="cats-list">
                                    <?php
                                    $current_post_id = get_the_ID();
                                    $categories = get_the_terms($current_post_id, 'case-category');
                                    if (!empty($categories) && !is_wp_error($categories))
                                    {
                                        $counter = 1;
                                        foreach ($categories as $category)
                                        {
                                            $category_link = get_term_link($category);
                                            echo '<a href="' . esc_url($category_link) . '" class="cat-link c-' . $counter . '" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
                                            $counter++;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $left_image = get_sub_field('left_image');
                    $right_image = get_sub_field('right_image');
                    ?>
                    <img src="<?php echo esc_url($left_image['url']); ?>" alt="" data-phone-img="left" class="c-hero__phone-1">
                    <img src="<?php echo esc_url($right_image['url']); ?>" alt="" data-phone_img="right" class="c-hero__phone-2">
                </section>
            <?php elseif (get_row_layout() == 'text_content') : ?>
                <section class="c-texts text--big-mt">
                    <div class="container">
                        <div class="c-texts__content">
                            <?php if (get_sub_field('section_title')) : ?>
                                <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea1771d-76ea5e62" class="c-texts__text-wrap" style="opacity: 1;">
                                    <h2 id="w-node-cbbf294a-c412-030a-5a57-8f284ea1771e-76ea5e62" class="title"><?php the_sub_field('section_title'); ?></h2>
                                </div>
                            <?php endif; ?>

                            <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea17720-76ea5e62" class="c-texts__frames" style="opacity: 1;">
                                <div class="c-texts__frames-top">
                                    <div class="cats-list">
                                        <?php
                                        $categories = get_the_terms($current_post_id, 'case-category');
                                        if (!empty($categories) && !is_wp_error($categories))
                                        {
                                            $counter = 1;
                                            foreach ($categories as $category)
                                            {
                                                $category_link = get_term_link($category);
                                                echo '<a href="' . esc_url($category_link) . '" class="cat-link c-' . $counter . '" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
                                                $counter++;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                $link_url = get_sub_field('link_url');
                                $link_text = get_sub_field('link_text');
                                if ($link_url && $link_text) : ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="_blank" class="btn btn--light-border-blue w-button"><?php echo esc_html($link_text); ?></a>
                                <?php endif; ?>
                            </div>

                            <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea1772a-76ea5e62" class="c-texts__text-wrap" style="opacity: 1;">
                                <div class="text"><?php the_sub_field('additional_text'); ?></div>
                            </div>

                            <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea1772d-76ea5e62" class="c-texts__text-wrap" style="opacity: 1;">
                                <div class="text"><?php the_sub_field('additional_text_1'); ?></div>
                            </div>

                            <div id="w-node-b57b2d4f-e9d2-b582-50f7-b36f992c339e-76ea5e62" class="c-texts__text-wrap" style="opacity: 1;">
                                <div class="text"><?php the_sub_field('additional_text_2'); ?></div>
                            </div>

                            <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea17730-76ea5e62" class="c-texts__text-wrap" style="opacity: 1;">
                                <div class="text"><?php the_sub_field('additional_text_3'); ?></div>
                            </div>

                            <div id="w-node-_058a1f9c-5f24-e14d-361f-c83bb2b6a5f5-76ea5e62" class="c-texts__text-wrap " style="opacity: 1;">
                                <div class="text"><?php the_sub_field('additional_text_4'); ?></div>
                            </div>

                            <?php
                            $text_content_images = get_sub_field('text_content_images');
                            if ($text_content_images) :
                                foreach ($text_content_images as $image) :
                            ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="c-texts__img">
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'images_section') : ?>
                <section class="c-imgs">
                    <div class="container">
                        <div class="c-imgs__content">
                            <?php
                            $row_count = 0;
                            if (have_rows('image_lines')) :
                                while (have_rows('image_lines')) : the_row();
                                    $row_class = $row_count % 2 == 0 ? 'c-imgs-1' : 'c-imgs-2';
                                    $line_class = $row_class == 'c-imgs-1' ? 'c-img-1__line' : 'c-imgs-2__line';
                                    $animation_state = get_sub_field('animation_state');
                                    $images = get_sub_field('images_gallery');
                            ?>
                                    <div data-animation="case-imgs" class="<?php echo $row_class; ?> imgs--ownup">
                                        <?php if ($images) : ?>
                                            <div data-case-imgs="" class="<?php echo $line_class; ?>" style="animation-play-state: <?php echo $animation_state; ?>;">
                                                <?php foreach ($images as $image) : ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="c-imgs__img img--ownup">
                                                <?php endforeach; ?>
                                            </div>
                                            <div data-case-imgs="" class="<?php echo $line_class; ?>" style="animation-play-state: <?php echo $animation_state; ?>;">
                                                <?php foreach ($images as $image) : ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="c-imgs__img img--ownup">
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                            <?php $row_count++;
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'video_image_section') : ?>
                <section class="c-video">
                    <div class="container">
                        <div class="c-video__content">
                            <div class="c-video__item">
                                <?php
                                $left_content_type = get_sub_field('left_content_type');
                                if ($left_content_type == 'video')
                                {
                                    $left_video = get_sub_field('left_video');
                                    $left_poster = get_sub_field('left_video_poster');
                                    // Вывод видео для левого блока
                                    echo '<div data-poster-url="' . esc_url($left_poster['url']) . '" data-video-urls="' . esc_url($left_video['url']) . '" class="w-background-video w-background-video-atom">';
                                    echo '<video autoplay loop muted playsinline style="background-image:url(\'' . esc_url($left_poster['url']) . '\');">';
                                    echo '<source src="' . esc_url($left_video['url']) . '">';
                                    echo '</video>';
                                    echo '</div>';
                                }
                                else
                                {
                                    $left_image = get_sub_field('left_image');
                                    // Вывод изображения для левого блока
                                    echo '<img src="' . esc_url($left_image['url']) . '" alt="' . esc_attr($left_image['alt']) . '" class="c-video__item-img">';
                                }
                                ?>
                            </div>
                            <div class="c-video__item">
                                <?php
                                $right_content_type = get_sub_field('right_content_type');
                                if ($right_content_type == 'video')
                                {
                                    $right_video = get_sub_field('right_video');
                                    $right_poster = get_sub_field('right_video_poster');
                                    // Вывод видео для правого блока
                                    echo '<div data-poster-url="' . esc_url($right_poster['url']) . '" data-video-urls="' . esc_url($right_video['url']) . '" class="w-background-video w-background-video-atom">';
                                    echo '<video autoplay loop muted playsinline style="background-image:url(\'' . esc_url($right_poster['url']) . '\');">';
                                    echo '<source src="' . esc_url($right_video['url']) . '">';
                                    echo '</video>';
                                    echo '</div>';
                                }
                                else
                                {
                                    $right_image = get_sub_field('right_image');
                                    // Вывод изображения для правого блока
                                    echo '<img src="' . esc_url($right_image['url']) . '" alt="' . esc_attr($right_image['alt']) . '" class="c-video__item-img">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'title_and_text') : ?>
                <section class="c-texts">
                    <div class="c-texts__content">

                        <?php if (get_sub_field('left_title')) : ?>
                            <div id="w-node-cbbf294a-c412-030a-5a57-8f284ea17774-76ea5e62" class="c-texts__text-wrap" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <h2 id="w-node-cbbf294a-c412-030a-5a57-8f284ea17775-76ea5e62" class="title"><?php the_sub_field('left_title'); ?></h2>
                            </div>
                        <?php endif; ?>

                        <?php if (get_sub_field('right_text')) : ?>

                            <?php the_sub_field('right_text'); ?>

                        <?php endif; ?>


                    </div>
                </section>
            <?php elseif (get_row_layout() == 'c_mobiles') : ?>
                <?php
                // Получаем изображение для фона
                $background_image = get_sub_field('background_image');

                // Проверяем, есть ли изображение для фона
                if ($background_image) :
                    // Получаем URL изображения
                    $background_image_url = $background_image['url'];
                ?>
                    <section class="c-mobiles" style="background-image: url('<?php echo $background_image_url; ?>');">
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php
get_footer();
?>