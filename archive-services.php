<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '660efae4891f5418e88e3a84';
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
                    <h1 class="common-hero__title">Services</h1>
                </div>
                <div class="common-hero__text-wrap">
                    <div class="text text--common-hero"><span class="span--red">Agile</span>, Adaptive, Astonishing: Empower Your Marketing to get <span class="span--blue">predictable results</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services-inner">
                <?php
                $counter = 0;
                $ids = [
                    "w-node-_3be27633-6060-ddc9-e7de-7714d4c22d7b-e88e3a84", // ID для 1 блока
                    null, // ID для 2 блока
                    "w-services__item_item--3_w-inline-block", // ID для 3 блока
                    null, // ID для 4 блока
                    "w-node-e4bbecd6-1f3f-963b-52ba-1119f0933e30-e88e3a84", // ID для 5 блока
                    "w-node-c4b2b452-6fae-7884-893b-0393d28a82de-e88e3a84", // ID для 6 блока
                    null, // ID для 7 блока
                    "w-node-ce0f9fc4-f514-4581-0970-c8a92cab8db4-e88e3a84" // ID для 8 блока
                ];

                // Используйте один цикл while для прохода по всем постам
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        // Проверяем, есть ли данные для текущего индекса
                        if ($counter < count($ids))
                        {
                            $title = get_field('service_title');
                            $description = get_field('service_description');
                            $image = get_field('service_image');
                            $service_id = isset($ids[$counter]) ? $ids[$counter] : '';
                            $service_link = get_permalink(); // Automatically get the post link
                            // Маппинг классов изображений
                            $image_classes = [
                                "w-node-_3be27633-6060-ddc9-e7de-7714d4c22d7b-e88e3a84" => "img--leo",
                                "w-node-e4bbecd6-1f3f-963b-52ba-1119f0933e30-e88e3a84" => "img--mouth",
                                "w-node-c4b2b452-6fae-7884-893b-0393d28a82de-e88e3a84" => "img--6",
                                "w-node-ce0f9fc4-f514-4581-0970-c8a92cab8db4-e88e3a84" => "img--8",
                                "w-services__item_item--3_w-inline-block" => "img--hell",
                            ];
                            // Проверяем, есть ли данные для вывода услуги
                            if ($title || $description || $image) :
                                $image_class = isset($image_classes[$service_id]) ? $image_classes[$service_id] : '';
                ?>
                                <a <?php if (!empty($service_id)) echo 'id="' . esc_attr($service_id) . '"'; ?> href="<?php echo esc_url($service_link); ?>" class="services__item item--<?php echo $counter + 1; ?> w-inline-block">
                                    <div class="services__item-content">
                                        <h3 class="services__item-title"><?php echo esc_html($title); ?></h3>
                                        <div class="text text--services-item"><?php echo nl2br(wp_kses_post($description)); ?></div>
                                    </div>
                                    <?php if ($image && isset($image['url']) && isset($image['alt'])) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="services__item-img <?php echo esc_attr($image_class); ?>">
                                    <?php endif; ?>
                                </a>
                    <?php
                            endif;
                            $counter++;
                        }
                    endwhile;
                else :
                    ?>
                    <p><?php _e('No services found'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main><!-- .site-main -->

<?php
get_footer();
?>