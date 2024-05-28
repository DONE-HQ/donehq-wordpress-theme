<?php

/**
 * The template for displaying single case studies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Your_Theme_Name
 */
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '65fb2d744558f90976ea5e62';
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
                    <h1 class="common-hero__title"><?php the_title(); ?></h1>
                </div>
                <div class="text text--service-item">
                    <?php
                    // Получаем значение поля 'first_text' с использованием ACF
                    $first_text = get_field('first_text');
                    echo esc_html($first_text);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="services-item">
        <div class="container">

            <div class="services-item__top">
                <?php
                $service_image = get_field('service_image_right');
                if ($service_image) : ?>
                    <div class="services-item__top-left">
                        <img src="<?php echo esc_url($service_image['url']); ?>" alt="<?php echo esc_attr($service_image['alt']); ?>">
                    </div>
                <?php endif; ?>
                <div class="services-item__top-content">
                    <?php
                    $service_title = get_field('service_title_right');
                    if ($service_title) : ?>
                        <div class="services-item__top-title"><?php echo esc_html($service_title); ?></div>
                    <?php endif; ?>

                    <?php
                    $service_text = get_field('service_text_right');
                    if ($service_text) : ?>
                        <div class="text"><?php echo esc_html($service_text); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="services-item__bot">
                <?php if (have_rows('services_items')) : ?>
                    <?php while (have_rows('services_items')) : the_row(); ?>
                        <?php
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        $color = get_sub_field('color');
                        $color_class = '';

                        if ($color == 'blue')
                        {
                            $color_class = 'item--blue';
                        }
                        elseif ($color == 'red')
                        {
                            $color_class = 'item--red';
                        }
                        elseif ($color == 'dark-blue')
                        {
                            $color_class = 'item--dark-blue';
                        }
                        elseif ($color == 'white')
                        {
                            $color_class = 'item--white';
                        }
                        ?>
                        <div class="services-item__bot-item <?php echo esc_attr($color_class); ?>">
                            <?php if ($title) : ?>
                                <h3 class="services-item__bot-item-title"><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>

                            <?php if ($description) : ?>
                                <div class="text"><?php echo esc_html($description); ?></div>
                            <?php endif; ?>

                            <?php if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" class="services-item__bot-item-img">
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


        </div>
    </section>
</main>
<?php
get_footer();
?>