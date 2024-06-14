<?php

/**
 * Template Name: Front Page
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
    $hero_contact_button_text = get_field('hero_button_text'); ?>

    <section class="h-hero">
        <div class="container">
            <div class="h-hero__content">
                <h1 data-w-id="c86ed5bc-86a7-d530-e7de-0644c9430db6" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="h-hero__title"><span data-animation="star-rotated" class="hero__title-span-star" style="animation-play-state: running;">&nbsp;</span> <?php echo esc_html($hero_title); ?></h1>
                <div class="hero__text-wrap">
                    <div class="text"><?php echo esc_html($hero_description); ?></div>
                </div>
                <div data-w-id="d8cddc18-aff8-b3ad-d335-550fab813727" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="hero__btns-wrap"><a href="#" data-modal-open="calendly" class="btn btn--blue w-button"><?php echo esc_html($hero_contact_button_text); ?></a></div>
                <!-- Здесь может быть ваша интеграция с Matter.js или другими библиотеками для canvas -->
                <div data-matter="hero" class="h-hero__frames">
                    <!-- Canvas placeholder -->
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="h-ask">
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
    </section> -->

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

    <section data-w-id="fa596059-cdcd-9209-d56f-a48a56b58ae5" class="h-integrated">
        <div class="container">
            <div class="h-integrated__content">
                <?php if (get_field('section_text')) : ?>
                    <?php the_field('section_text'); ?>
                <?php endif; ?>

                <?php
                $button_link = get_field('button_link');
                $button_text = get_field('button_text');
                if ($button_text) : ?>
                    <a href="#" data-modal-open="calendly" class="btn btn--blue w-button"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
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
    <section id="who-we-are" data-css="overflow-hidden" data-w-id="8f18276b-d0d4-21e3-bdea-75748afc6611" class="h-benefits">
        <div class="container">
            <div class="h-benefits__content">
                <div class="h-services__title-mobile-wrap">
                    <h2 class="h-title-mobile">Why partner with us - Empower your marketing team to get predictable results.</h2>
                </div>
                <div data-desktop="" class="title-animated-wrap wrap--services">
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">Why partner with us -</h2>
                        <h2 data-w-id="e1314b24-cd2b-988f-6ecf-517aea137487" class="animated-title title--reveal" style="will-change: width, height; width: 1.071%;">Why partner with us -</h2>
                    </div>
                    <div class="animated__title-line line--2">
                        <h2 class="animated-title">Empower your marketing</h2>
                        <h2 data-w-id="e1314b24-cd2b-988f-6ecf-517aea13748c" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">Empower your marketing</h2>
                    </div>
                    <div class="animated__title-line line--3">
                        <h2 class="animated-title">team to get predictable</h2>
                        <h2 data-w-id="e1314b24-cd2b-988f-6ecf-517aea137491" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">team to get predictable</h2>
                    </div>
                    <div class="animated__title-line line--4">
                        <h2 class="animated-title">results.</h2>
                        <h2 data-w-id="e1314b24-cd2b-988f-6ecf-517aea137496" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">results.</h2>
                    </div>
                </div>
                <div class="h-benefits__blocks">
                    <div data-benefits-card="" class="h-benefits__item">
                        <div data-benefits="arrow" class="h-benefits__item-arrow-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66633a02e34d857c33df85fe_ArrowUpRight.svg" loading="lazy" data-benefits="arrow-black" alt="" class="h-benefits__item-arrow"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/6669f342abb3bb0282e39ca2_Frame%2047412.svg" loading="lazy" data-benefits="arrow-white" alt="" class="h-benefits__item-arrow arrow--white"></div>
                        <div>
                            <div class="h-benefits__item-title-wrap">
                                <h3 class="h-benefits__item-title">Professional Web Team</h3>
                            </div>
                            <div class="h-benefits__item-text">Our developers bring years of experience to your projects. By&nbsp;creating our internal team matrix and improving our skills continuously, we ensure that you get the team of experts integrating seamlessly with your marketing department, providing collaborative effort that drives success and achieves your objectives efficiently.</div>
                        </div>
                    </div>
                    <div data-benefits-card="" class="h-benefits__item item--2">
                        <div data-benefits="arrow" class="h-benefits__item-arrow-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66633a02e34d857c33df85fe_ArrowUpRight.svg" loading="lazy" data-benefits="arrow-black" alt="" class="h-benefits__item-arrow"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/6669f342abb3bb0282e39ca2_Frame%2047412.svg" loading="lazy" data-benefits="arrow-white" alt="" class="h-benefits__item-arrow arrow--white"></div>
                        <div>
                            <div class="h-benefits__item-title-wrap">
                                <h3 class="h-benefits__item-title">High-Quality Product</h3>
                            </div>
                            <div class="h-benefits__item-text">We are committed to delivering exceptional results. Development process and dedication to excellence guarantee that you receive a&nbsp;high-performing, robust, and scalable website that meets all your requirements and needs.</div>
                        </div>
                    </div>
                    <div data-benefits-card="" id="w-node-_951bc8a5-79a9-8846-0b80-eedba74ce35b-76ea5dc5" class="div-block">
                        <div id="w-node-_2adc4c02-87a6-d5b1-2e1f-f5b551aec388-76ea5dc5" class="h-benefits__item item--3">
                            <div data-mobile="" data-benefits="arrow" class="h-benefits__item-arrow-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66633a02e34d857c33df85fe_ArrowUpRight.svg" loading="lazy" data-benefits="arrow-black" alt="" class="h-benefits__item-arrow"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/6669f342abb3bb0282e39ca2_Frame%2047412.svg" loading="lazy" data-benefits="arrow-white" alt="" class="h-benefits__item-arrow arrow--white"></div>
                            <div data-desktop=""></div>
                            <div>
                                <div class="h-benefits__item-title-wrap">
                                    <h3 class="h-benefits__item-title">Professional Web Team</h3>
                                </div>
                                <div class="h-benefits__item-text">You get complete transparency when it comes to billing, charging for every quarter-hour of work without rounding up. Our dashboard, available at any time, lets you track the exact time we've dedicated to your projects in real-time.</div>
                            </div>
                        </div>
                        <div data-desktop-flex="" id="w-node-d20d90b6-c93b-c3fe-e889-1b562c198872-76ea5dc5" class="h-benefits__item item--4">
                            <div></div>
                            <div data-benefits="arrow" class="h-benefits__item-arrow-wrap arrow--last"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66633a02e34d857c33df85fe_ArrowUpRight.svg" loading="lazy" data-benefits="arrow-black" alt="" class="h-benefits__item-arrow"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/6669f342abb3bb0282e39ca2_Frame%2047412.svg" loading="lazy" data-benefits="arrow-white" alt="" class="h-benefits__item-arrow arrow--white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cases" class="h-cases">
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
                    <h2 class="h-title-mobile">Discover our most recent
                        projects
                    </h2>
                </div>
                <div data-desktop="" class="title-animated-wrap wrap--services">
                    <div class="animated__title-line line--1">
                        <h2 class="home-title">Discover our most recent
                        </h2>
                        <h2 data-w-id="e5ba9dc7-5a7c-0754-30b5-51cd93f17f1f" class="animated-title title--reveal" style="will-change: width, height; width: 94.895%;">Discover our most recent</h2>
                    </div>
                    <div class="animated__title-line line--2">
                        <h2 class="animated-title">projects</h2>
                        <h2 data-w-id="138869a6-7fcc-e904-69e5-146f4c9a4aa9" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">projects</h2>
                    </div>

                </div>
                <div class="h-cases__list">
                    <?php if (have_rows('cases')) : ?>
                        <?php
                        $counter = 1; // Инициализируем счетчик
                        while (have_rows('cases')) : the_row();
                            $case_title = get_sub_field('case_title');
                            $case_link = get_sub_field('case_link');
                            $case_image = get_sub_field('case_image');
                            // $case_logo = get_sub_field('case_logo');
                            $case_description = get_sub_field('case_description');
                        ?>
                            <div class="h-cases__item-<?php echo $counter; ?>">
                                <a data-css="btn-arrow" href="<?php echo esc_url($case_link['url']); ?>" class="h-cases__item w-inline-block">
                                    <div class="h-cases__item-top">
                                        <img class="h-cases__item-img" src="<?php echo esc_url($case_image['url']); ?>" alt="" loading="lazy">
                                        <!-- <div class="h-cases__item-overlay"></div> -->
                                    </div>
                                    <div class="h-cases__item-bot">
                                        <div class="h-cases__item-content">
                                            <h3 class="cases__item-title"><?php echo esc_html($case_title); ?></h3>
                                            <div class="cases__item-text"><?php echo esc_html($case_description); ?></div>
                                        </div>
                                        <?php
                                        $template_directory_uri = get_template_directory_uri();
                                        echo '<img src="' . esc_url($template_directory_uri . '/images/6669f342562441d53ec54039_Icons.svg') . '" loading="lazy" data-arrow-rotated="" alt="" class="h-cases__item-bot-arrow">';
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <?php $counter++; // Увеличиваем счетчик 
                            ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
    <?php
    if (have_rows('top_logos_row') || have_rows('bottom_logos_row')) : ?>
        <section data-css="overflow-hidden" data-w-id="bed6adee-a7fd-d361-0b3b-75922629b27c" class="h-logos">
            <div class="container">
                <div class="logos">
                    <div class="logos__title-wrap">
                        <h2 class="h-title-mobile ta-center">Clients</h2>
                    </div>
                    <div class="title-animated-wrap wrap--logos">
                        <div class="animated__title-line line--1">
                            <h2 class="animated-title ta-center">Clients</h2>
                            <h2 data-w-id="dcad57ee-2ead-3369-7148-9bd7e3a31d32" class="animated-title title--reveal" style="will-change: width, height; width: 38.312%;">Clients</h2>
                        </div>
                    </div>
                    <div class="logos__lines">
                        <div data-animation="logo-scroll" class="logos__line-top-wrap">
                            <div data-logos="" class="logos__line-top" style="animation-play-state: paused;">
                                <?php if (have_rows('top_logos_row')) : while (have_rows('top_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" loading="eager" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                            <div data-logos="" class="logos__line-top" style="animation-play-state: paused;">
                                <?php if (have_rows('top_logos_row')) : while (have_rows('top_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                            <div data-logos="" class="logos__line-top" style="animation-play-state: paused;">
                                <?php if (have_rows('top_logos_row')) : while (have_rows('top_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <div data-animation="logo-scroll" class="logos__line-bot-wrap">
                            <div data-logos="" class="logos__line-bot" style="animation-play-state: paused;">
                                <?php if (have_rows('bottom_logos_row')) : while (have_rows('bottom_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" loading="lazy" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                            <div data-logos="" class="logos__line-bot" style="animation-play-state: paused;">
                                <?php if (have_rows('bottom_logos_row')) : while (have_rows('bottom_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" loading="lazy" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                            <div data-logos="" class="logos__line-bot" style="animation-play-state: paused;">
                                <?php if (have_rows('bottom_logos_row')) : while (have_rows('bottom_logos_row')) : the_row(); ?>
                                        <div class="logos__item">
                                            <img src="<?php the_sub_field('logo_image'); ?>" loading="lazy" alt="" class="logos__item-img">
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section data-w-id="8a92973d-b8ba-b2b0-c8ff-2d46ef56021d" class="h-feedback">
        <div class="container">
            <div class="feedback">
                <div class="feedback__title-wrap">
                    <h2 class="h-title-mobile ta-center"><span class="feedback__title-span-icon-2">&nbsp;</span>&nbsp;<span class="span--red">Our efforts</span> have consistently thrilled our clients, leading them to share their enthusiastic<br><span class="feedback__title-span-icon-1">&nbsp;</span>&nbsp;<span class="span--green">feedback</span> through thoughtful reviews</h2>
                </div>
                <div class="title-animated-wrap wrap--feedback">
                    <div class="animated__title-line">
                        <h2 class="animated-title"><span class="feedback__title-span-icon-2">&nbsp;</span>&nbsp;<span class="span--red">Our efforts</span> have consistently</h2>
                        <h2 data-w-id="13bc72c9-d792-85de-94bd-91475d989c2e" class="animated-title title--reveal" style="will-change: width, height; width: 0%;"><span class="feedback__title-span-icon-2">&nbsp;</span>&nbsp;<span class="span--red">Our efforts</span> have consistently</h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">thrilled our clients, leading them </h2>
                        <h2 data-w-id="da4f8bbb-c25a-ca2b-f9e4-d039c2fadc05" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">thrilled our clients, leading them </h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">to share their enthusiastic</h2>
                        <h2 data-w-id="85342287-48e5-712c-526d-0264b7caede3" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">to share their enthusiastic</h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title"><span class="feedback__title-span-icon-1">&nbsp;</span>&nbsp;<span class="span--green">feedback</span> through thoughtful</h2>
                        <h2 data-w-id="84968083-d713-1620-4f8d-0ba2e7184868" class="animated-title title--reveal" style="will-change: width, height; width: 0%;"><span class="feedback__title-span-icon-1">&nbsp;</span>&nbsp;<span class="span--green">feedback</span> through thoughtful</h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">reviews</h2>
                        <h2 data-w-id="c2ef8f0d-2bf8-41d3-69d6-cf9d986f10a3" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">reviews</h2>
                    </div>
                </div>
                <div class="feedback__list">
                    <div class="feedback__item">
                        <div class="feedback__item-photo-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66674531b464e62b47252e4c_feedback-photo-1.jpg" loading="lazy" sizes="(max-width: 767px) 92vw, 30vw" srcset="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66674531b464e62b47252e4c_feedback-photo-1-p-500.jpg 500w, https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66674531b464e62b47252e4c_feedback-photo-1-p-800.jpg 800w, https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/66674531b464e62b47252e4c_feedback-photo-1.jpg 1168w" alt="" class="feedback__item-photo"></div>
                        <div data-feedback="wrap" class="feedback__item-content">
                            <div class="feedback__item-texts">
                                <div class="feedback__item-heading-wrap">
                                    <h3 class="feedback__item-heading">YourCMO</h3>
                                    <div class="feedback__item-subheading">Rich Taylor<br><span class="span--op70">Fractional CMO</span></div>
                                </div>
                                <div data-feedback="text" class="feedback__item-text text--hide">Alex and the team at Done HQ have done a great job supporting my clients. They are collaborative, tech savvy, and practical minded. I count on them for website development support and they serve as a trusted partner helping tackle the many challenges involved in creating an efficient and&nbsp;effective user experience.</div>
                            </div>
                            <div data-feedback="trigger" class="feedback__trigger-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5de7_line.svg" loading="lazy" alt="" class="feedback__trigger"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5de7_line.svg" loading="lazy" data-feedback="btn-rotate" alt="" class="feedback__trigger open"></div>
                        </div>
                    </div>
                    <div class="feedback__item item--2">
                        <div class="feedback__item-photo-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5e73_Frame%20528.jpg" loading="lazy" sizes="(max-width: 767px) 92vw, 30vw" srcset="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5e73_Frame%2520528-p-500.jpg 500w, https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5e73_Frame%20528.jpg 876w" alt="" class="feedback__item-photo"></div>
                        <div data-feedback="wrap" class="feedback__item-content">
                            <div class="feedback__item-texts">
                                <div class="feedback__item-heading-wrap">
                                    <h3 class="feedback__item-heading">BioWave</h3>
                                    <div class="feedback__item-subheading">Ania Kuniej<br><span class="span--op70">Director of Marketing</span></div>
                                </div>
                                <div data-feedback="text" class="feedback__item-text text--hide">Over the past two years working with DONE HQ, our experience has been outstanding. They helped us launch a new website that perfectly embodies our brand and is optimized for SEO, marking a significant upgrade in our online presence. Their involvement extended to developing landing pages for our marketing campaigns, showcasing their ability to deliver high-quality work promptly.<br>What distinguishes DONE HQ is their responsiveness and flexibility, quickly adapting to our requests and implementing changes efficiently. The team's friendly and straightforward communication style has made our collaboration seamless and highly productive. In short, DONE HQ has been an invaluable partner in enhancing our digital strategy and execution. Their commitment to quality, timeliness, and client service has made a tangible impact on our business. I highly recommend DONE HQ for anyone looking to boost their online marketing efforts.</div>
                            </div>
                            <div data-feedback="trigger" class="feedback__trigger-wrap"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5de7_line.svg" loading="lazy" alt="" class="feedback__trigger"><img src="https://cdn.prod.website-files.com/65fb2d744558f90976ea5dc6/65fb2d744558f90976ea5de7_line.svg" loading="lazy" data-feedback="btn-rotate" alt="" class="feedback__trigger open"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="consultation" data-w-id="608ffed6-a747-b2b9-3dae-e3c50b857597" class="h-consultation">
        <div class="container">
            <div class="consultation">
                <div class="consultation__title-wrap">
                    <h2 class="h-title-mobile"><?php the_field('consultation_title'); ?></h2>
                </div>
                <div id="w-node-_608ffed6-a747-b2b9-3dae-e3c50b8575a6-0b857597" class="title-animated-wrap wrap--consultation">
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">Arrange a <span class="span--red">consultation</span> with </h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575ad" class="animated-title title--reveal" style="will-change: width, height; width: 100%;">Arrange a <span class="span--red">consultation</span> with </h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">team to explore dynamic</h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575b5" class="animated-title title--reveal" style="will-change: width, height; width: 62.726%;">team to explore dynamic</h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title">strategies for <span class="span--blue">boosting </span></h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575bc" class="animated-title title--reveal" style="will-change: width, height; width: 0%;">strategies for <span class="span--blue">boosting </span></h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="animated-title"><span class="span--blue">revenue</span> and reducing costs</h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575c5" class="animated-title title--reveal" style="will-change: width, height; width: 0%;"><span class="span--blue">revenue</span> and reducing costs</h2>
                    </div>
                </div>
                <img class="consultation__img" src="<?php the_field('consultation_image_desktop'); ?>" alt="" sizes="(max-width: 767px) 100vw, (max-width: 3789px) 38vw, 1440px" data-desktop="" id="w-node-ef813bf4-77a1-90e5-44c6-0cc3032b4af2-0b857597" loading="lazy">
                <img class="consultation__img" src="<?php the_field('consultation_image_mobile'); ?>" data-mobile="" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" id="w-node-c551fd66-c476-a6d1-ff6c-75d13cc22572-0b857597" loading="lazy">
                <div id="w-node-_608ffed6-a747-b2b9-3dae-e3c50b8575c9-0b857597" class="consultation__form w-form">
                    <form method="get" name="wf-form-consultration" data-name="consultration" data-wf-page-id="65fb2d744558f90976ea5dc5" data-wf-element-id="608ffed6-a747-b2b9-3dae-e3c50b8575ca" aria-label="consultration">
                        <div class="form__inputs"><input class="input w-input" maxlength="256" name="name" data-name="name" placeholder="Your Name *" type="text" required=""><input class="input w-input" maxlength="256" name="email" data-name="email" placeholder="Your Email *" type="email" required=""></div><button data-css="btn-arrow" type="submit" class="btn btn--blue btn--consultation">
                            <div>Send</div><img data-arrow-move="" loading="lazy" alt="" src="https://cdn.prod.website-files.com/65ca48647f3eeedb29f339ad/65caa14408754eab01abcef2_arrow-right-white.svg" class="btn__arrow hide">
                        </button>
                        <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                    </form>
                    <div class="consultation__success-wrap w-form-done" tabindex="-1" role="region" aria-label="consultration success">
                        <div class="schedule__success">
                            <div>Thank you! Your submission has been&nbsp;received!</div>
                        </div>
                    </div>
                    <div class="w-form-fail" tabindex="-1" role="region" aria-label="consultration failure">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>