<?php

/**
 * Template Name: FAQ
 *
 * @package WordPress
 * @subpackage DoneHQ
 * @since DoneHQ
 */

?>
<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '65fb2d744558f90976ea5dc5';
$wf_site = '65fb2d744558f90976ea5dc6';

get_header(); ?>
<main class="main">

    <?php
    // Получаем данные из полей ACF
    $hero_title = get_field('hero_title');
    $hero_subtitle = get_field('hero_subtitle');
    $hero_description = get_field('hero_description');
    $hero_contact_button_text = get_field('hero_contact_button_text');
    $hero_contact_button_link = get_field('hero_contact_button_link');
    $hero_case_studies_button_text = get_field('hero_case_studies_button_text');
    $hero_case_studies_button_link = get_field('hero_case_studies_button_link'); ?>

    <section class="h-hero">
        <div class="container">
            <div class="h-hero__content">
                <h1 class="h-hero__title"><?php echo esc_html($hero_title); ?></h1>
                <h1 class="h-hero__subtitle"><?php echo esc_html($hero_subtitle); ?></h1>
                <div class="hero__text-wrap">
                    <div class="text"><?php echo esc_html($hero_description); ?></div>
                </div>
                <div class="hero__btns-wrap">
                    <a href="<?php echo esc_url($hero_contact_button_link); ?>" class="btn btn--blue w-button"><?php echo esc_html($hero_contact_button_text); ?></a>
                    <a href="<?php echo esc_url($hero_case_studies_button_link); ?>" class="btn btn--border-blue w-button"><?php echo esc_html($hero_case_studies_button_text); ?></a>
                </div>
                <!-- Здесь может быть ваша интеграция с Matter.js или другими библиотеками для canvas -->
                <div data-matter="hero" class="h-hero__frames">
                    <!-- Canvas placeholder -->
                </div>
            </div>
        </div>
    </section>
    <section data-w-id="fa596059-cdcd-9209-d56f-a48a56b58ae5" class="h-integrated">
        <div class="container">
            <div class="h-integrated__content">
                <?php if (get_field('section_text')) : ?>
                    <?php the_field('section_text'); ?>
                <?php endif; ?>

                <?php
                $button_link = get_field('button_link');
                $button_text = get_field('button_text');
                if ($button_link && $button_text) : ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn--blue w-button"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="h-ask">
        <div class="container">
            <div class="h-ask__content">
                <div class="h-ask__content-inner">
                    <div class="h-ask__content-left">
                        <h2 class="h-ask__title"><?php the_field('ask_yourself_title'); ?></h2>
                    </div>
                    <div class="h-ask__content-right">
                        <?php if (have_rows('ask_yourself_questions')) : ?>
                            <?php while (have_rows('ask_yourself_questions')) : the_row(); ?>
                                <div class="h-ask__string"><?php the_sub_field('question'); ?></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="h-ask__content content--blue">
                <div class="h-ask__content-inner inner--v">
                    <div class="h-ask__many-text"><?php the_field('many_companies_text'); ?></div>
                    <div class="h-ask__dont-feel-wrap">
                        <div class="h-ask__dont-feel"><?php the_field('dont_feel_bad_text'); ?></div>
                        <?php
                        $image = get_field('dont_feel_bad_image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" loading="lazy" sizes="(max-width: 479px) 97vw, (max-width: 767px) 75vw, (max-width: 3296px) 33vw, 1088px" srcset="<?php echo esc_attr(wp_get_attachment_image_srcset($image['ID'])); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="h-ask__dont-feel-img">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-points">
        <div class="container">
            <div class="h-points__content">
                <div class="h-points__list">
                    <?php
                    if (have_rows('points_list')) :
                        $counter = 1; // Инициализируем счетчик
                        while (have_rows('points_list')) : the_row();
                            $point_title = get_sub_field('point_title');
                            $point_description = get_sub_field('point_description');
                            $point_image = get_sub_field('point_image');
                    ?>
                            <div class="h-points__item item--<?php echo $counter; ?>" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <div class="h-points__item-toggle-wrap">
                                    <div class="h-points__item-toggle"></div>
                                </div>
                                <div class="h-points__item-title-wrap">
                                    <h3 class="points__item-title"><?php echo esc_html($point_title); ?></h3>
                                </div>
                                <div class="text"><?php echo esc_html($point_description); ?></div>
                                <?php $point_image = get_sub_field('point_image'); ?>
                                <?php if ($point_image) : ?>
                                    <img src="<?php echo esc_url($point_image['url']); ?>" alt="<?php echo esc_attr($point_image['alt']); ?>" class="h-points__item-img">
                                <?php endif; ?>
                            </div>
                    <?php
                            $counter++; // Увеличиваем счетчик на 1
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section id="services" data-w-id="dc5446ba-8a42-f554-8f65-c78ba2541285" class="h-services">
        <div class="container">
            <div class="h-services__content">
                <div class="h-services__list">
                    <?php if (have_rows('services')) : ?>
                        <?php while (have_rows('services')) : the_row(); ?>
                            <div class="h-services__item">
                                <div class="h-services__item-title-wrap">
                                    <div class="h-services__item-number"><?php the_sub_field('service_number'); ?>.</div>
                                    <h3 class="h-services__item-title"><?php the_sub_field('service_title'); ?></h3>
                                </div>
                                <div class="h-services__item-text"><?php the_sub_field('service_text'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="h-services__btn-wrap">
                <a href="http://localhost/donehq/services/" class="btn btn--blue w-button">More services</a>
            </div>
        </div>
    </section>
    <section id="cases" data-w-id="9a2a656d-968e-be27-d756-f37160ec5e36" class="h-cases">
        <div class="container">
            <div class="h-cases__content">
                <div id="w-node-cc5d46ec-44ff-2661-3a5f-3600a1e8501b-76ea5dc5" class="css w-embed">
                    <style>
                        @media screen and (min-width:767px) {
                            .h-cases__item:hover .h-cases__item-top {
                                border: solid 1px var(--color--accent-blue);
                                border-radius: var(--radius--radius-main);
                            }

                            .h-cases__item:hover .h-cases__item-bot {
                                border-radius: var(--radius--radius-main);
                            }

                            .h-cases__item:hover .h-cases__item-img {
                                transform: scale(1.05);
                            }

                            .h-cases__item:hover .h-cases__item-top,
                            .h-cases__item:hover .h-cases__item-bot {
                                border-radius: 40px;
                            }
                        }
                    </style>
                </div>
                <div class="h-services__title-mobile-wrap">
                    <h2 class="h-title-mobile">We helped our clients to get stable growth of leads each month, increase revenue by 3 times faster and save over $10,000 on hiring and onboarding new employees and up to 3 months on building processes.</h2>
                </div>
                <div data-desktop="" class="title-animated-wrap wrap--services">
                    <div class="animated__title-line line--1">
                        <h2 class="home-title">We helped our clients to get stable</h2>
                        <h2 data-w-id="e5ba9dc7-5a7c-0754-30b5-51cd93f17f1f" class="home-title title--reveal" style="will-change: width, height; width: 0%;">We helped our clients to get stable</h2>
                    </div>
                    <div class="animated__title-line line--2">
                        <h2 class="home-title">growth of <span class="span--red">leads each month</span>,</h2>
                        <h2 data-w-id="138869a6-7fcc-e904-69e5-146f4c9a4aa9" class="home-title title--reveal" style="will-change: width, height; width: 0%;">growth of <span class="span--red">leads each month</span>,</h2>
                    </div>
                    <div class="animated__title-line line--3">
                        <h2 class="home-title">increase revenue by 3 times faster</h2>
                        <h2 data-w-id="120bcfea-5bb5-5a4f-37f1-64a5ff61269b" class="home-title title--reveal" style="will-change: width, height; width: 0%;">increase revenue by 3 times faster</h2>
                    </div>
                    <div class="animated__title-line line--4">
                        <h2 class="home-title">and <span class="span--blue">save over $10,000</span> on hiring</h2>
                        <h2 data-w-id="92c90c12-6763-8957-a75b-b92c8313513d" class="home-title title--reveal" style="will-change: width, height; width: 0%;">and <span class="span--blue">save over $10,000</span> on hiring</h2>
                    </div>
                    <div class="animated__title-line line--5">
                        <h2 class="home-title">and onboarding <span class="span--green">new employees</span></h2>
                        <h2 data-w-id="4f7d0eeb-941b-0c5c-ab14-fa1f8293825d" class="home-title title--reveal" style="will-change: width, height; width: 0%;">and onboarding <span class="span--green">new employees</span></h2>
                    </div>
                    <div class="animated__title-line line--6">
                        <h2 class="home-title">and up to 3 months on building</h2>
                        <h2 data-w-id="eba4d1a0-fda9-08df-320c-05e776093cf5" class="home-title title--reveal" style="will-change: width, height; width: 0%;">and up to 3 months on building</h2>
                    </div>
                    <div class="animated__title-line line--6">
                        <h2 class="home-title">processes.</h2>
                        <h2 data-w-id="354f8603-f557-1c03-c490-2e53b6ca5c02" class="home-title title--reveal" style="will-change: width, height; width: 0%;">processes.</h2>
                    </div>
                </div>
                <div class="h-cases__list">
                    <?php if (have_rows('cases')) : ?>
                        <?php while (have_rows('cases')) : the_row(); ?>
                            <?php
                            $case_permalink = get_sub_field('case_permalink');
                            $case_logo = get_sub_field('case_logo');
                            $case_image = get_sub_field('case_image');
                            $case_title = get_sub_field('case_title');
                            $case_text = get_sub_field('case_text');
                            $case_category = get_sub_field('case_category');
                            ?>
                            <a data-css="btn-arrow" href="<?php echo esc_url($case_permalink); ?>" class="h-cases__item w-inline-block">
                                <div class="h-cases__item-top">
                                    <?php if ($case_logo) : ?>
                                        <img src="<?php echo esc_url($case_logo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($case_logo['alt']); ?>" class="h-cases__item-logo">
                                    <?php endif; ?>
                                    <?php if ($case_image) : ?>
                                        <img data-css="hover-hide" class="h-cases__item-img" src="<?php echo esc_url($case_image['url']); ?>" alt="<?php echo esc_attr($case_image['alt']); ?>" loading="lazy">
                                    <?php endif; ?>
                                    <div class="h-cases__item-overlay"></div>
                                </div>
                                <div class="h-cases__item-bot">
                                    <div class="h-cases__item-content">
                                        <h3 class="cases__item-title"><?php echo esc_html($case_title); ?></h3>
                                        <div class="cases__item-text"><?php echo esc_html($case_category); ?></div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/Icons.svg'); ?>" loading="lazy" data-arrow-rotated="" alt="" class="h-cases__item-bot-arrow">
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No cases found</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>