<?php

/**
 * Template Name: Contacts
 *
 * @package WordPress
 * @subpackage DoneHQ
 * @since DoneHQ
 */

?>
<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '6615091638d26642fcacf474';
$wf_site = '65fb2d744558f90976ea5dc6';

get_header();

?>

<main class="main">
    <?php if (function_exists('yoast_breadcrumb')) : ?>
        <div class="breadcrumbs"><?php yoast_breadcrumb(); ?></div>
    <?php endif; ?>

    <section class="common-hero">
        <div class="container">
            <div class="common-hero__content">
                <h1 class="common-hero__title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="contact__inner">

                <?php $footer_phone = get_field('footer_phone', 'option'); ?>

                <?php if ($footer_phone) : ?>
                    <a id="w-node-_006635a8-a843-090c-9039-bd6d28ce1c36-fcacf474" href="tel:<?php echo esc_attr(preg_replace('/[^\d+]/', '', $footer_phone)); ?>" class="contact__item item--dark-blue w-inline-block">
                        <div class="heading">Call Us</div>
                        <div class="contact__item-text"><?php echo esc_html($footer_phone); ?></div>
                    </a>
                <?php endif; ?>

                <?php if ($footer_email = get_field('footer_email', 'option')) : ?>
                    <a id="w-node-c5a05dc7-3064-99c6-8e3f-2e512c10319a-fcacf474" href="mailto:<?php echo esc_html($footer_email); ?>" class="contact__item item--dark-blue w-inline-block">
                        <div class="heading">Mail Us</div>
                        <div class="contact__item-text"><?php echo esc_html($footer_email); ?></div>
                    </a>
                <?php endif; ?>
                <?php if ($footer_address = get_field('footer_address', 'option')) : ?>
                    <a id="w-node-f8352fe8-9b5a-6521-6fd7-6d26f02deb88-fcacf474" href="https://www.google.ru/maps/place/<?php echo esc_attr($footer_address); ?>/@42.1804581,-87.9411633,15z/data=!4m6!3m5!1s0x880fbc2a82e607a9:0xfce2cc45d23f95c1!8m2!3d42.1802676!4d-87.9333618!16s%2Fg%2F11c21jymwm?entry=ttu" target="_blank" class="contact__item item--dark-blue w-inline-block">
                        <div class="heading">Find Us</div>
                        <div class="contact__item-text"><?php echo esc_html($footer_address); ?></div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/geo-icon.svg" loading="lazy" alt="" class="contact__item-geo-icon">
                    </a>
                <?php endif; ?>

                <?php if (have_rows('contact_items')) : ?>
                    <?php
                    $counter = 0; // Инициализация счетчика
                    while (have_rows('contact_items')) : the_row();
                        $title = get_sub_field('title');
                        $photo_class = get_sub_field('photo_class');
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        $email = get_sub_field('email');

                        // Определение класса в зависимости от счетчика
                        $text_class = ($counter % 2 == 0) ? 'text--contact-post-ceo' : 'text--contact-post-partnership';
                        $counter++; // Увеличение счетчика

                        // Разделение имени на слова и объединение с <br />
                        $name_with_br = implode('<br />', explode(' ', $name));
                    ?>
                        <div id="w-node-f9ffd93a-5a6e-77c3-fee2-ec6f8e3aa989-fcacf474" class="contact__item">
                            <div class="contact__item-title"><?php echo esc_html($title); ?></div>
                            <div class="contact__item-content">
                                <div class="contact__item-photo">
                                    <img src="<?php echo esc_attr($photo_class); ?>" alt="" style="border-radius: 25px; min-height: 100%; max-height: 100%; min-width: 100%;">
                                </div>
                                <div class="contact__item-content-inner">
                                    <div class="contact__item-content-name"><?php echo $name_with_br; ?></div>
                                    <div class="text <?php echo esc_attr($text_class); ?>"><?php echo esc_html($position); ?>
                                    </div>
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="contact__item-content-email"><?php echo esc_html($email); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>




            </div>
        </div>
    </section>


    <section id="consultation" data-w-id="608ffed6-a747-b2b9-3dae-e3c50b857597" class="h-consultation">
        <div class="container">
            <div class="consultation">
                <div class="consultation__title-wrap">
                    <h2 class="h-title-mobile">Arrange a <span class="span--red">consultation</span> with team to
                        explore dynamic strategies for <span class="span--blue">boosting</span> <span class="span--green">revenue</span> and reducing costs.</h2>
                </div>
                <div class="title-animated-wrap">
                    <div class="animated__title-line line--1">
                        <h2 class="home-title">Arrange a <span class="span--red">consultation</span> with </h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575ad" class="home-title title--reveal">Arrange a
                            <span class="span--red">consultation</span> with
                        </h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="home-title">team to explore dynamic</h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575b5" class="home-title title--reveal">team to
                            explore dynamic</h2>
                    </div>
                    <div class="animated__title-line line--1">
                        <h2 class="home-title">strategies for <span class="span--blue">boosting </span></h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575bc" class="home-title title--reveal">strategies
                            for <span class="span--blue">boosting </span></h2>
                    </div>



                    <div class="animated__title-line line--1">
                        <h2 class="home-title"><span class="span--blue">revenue</span> and reducing costs</h2>
                        <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575c5" class="home-title title--reveal"><span class="span--blue">revenue</span> and reducing costs</h2>
                    </div>
                </div>
                <div class="consultation__form w-form">
                    <form method="get" name="wf-form-consultration" data-name="consultration" data-wf-page-id="66144ad77b32f4949163cbb8" data-wf-element-id="608ffed6-a747-b2b9-3dae-e3c50b8575ca">
                        <div class="form__inputs"><input class="input w-input" maxlength="256" name="name" data-name="name" placeholder="Your Name *" type="text" required=""><input class="input w-input" maxlength="256" name="email" data-name="email" placeholder="Your Email *" type="email" required=""></div><button class="btn btn--blue btn--consultation" data-css="btn-arrow" type="submit">
                            <div>Send</div><img data-arrow-move="" loading="lazy" alt="" src="https://uploads-ssl.webflow.com/65ca48647f3eeedb29f339ad/65caa14408754eab01abcef2_arrow-right-white.svg" class="btn__arrow hide">
                        </button>
                    </form>
                    <div class="consultation__success-wrap w-form-done">
                        <div class="schedule__success">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                    </div>
                    <div class="w-form-fail">
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