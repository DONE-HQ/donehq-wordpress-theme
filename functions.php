<?php

// Регистрирую скрипты
function donehq_enqueue_scripts()
{
    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('components-style', get_template_directory_uri() . '/css/components.css', array(), '1.0', 'all');
    wp_enqueue_style('donehq-2-style', get_template_directory_uri() . '/css/donehq-2.css', array(), '1.0', 'all');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/donehq-2.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'donehq_enqueue_scripts');



// Отделяю стили которые были подключены инланово в хеад
function enqueue_custom_styles()
{
    // Регистрируем и подключаем файл стилей
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom-styles.css', array(), null);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


// Регистрирую меню
register_nav_menus(array(
    'header_nav' => 'Header Navigation',
    'footer_nav' => 'Footer Navigation',

));
// В верстке меню без ul и без li, поэтому приходится использовать не совсем стандартный вывод меню что-бы убрать ul li
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'header_nav',
        'fallback_cb' => 'default_page_menu',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);
}

function default_page_menu()
{
    wp_list_pages('title_li=');
}


// Добавляем классы ссылкам так как в верстке у нас меню просто из тегов a к которым привязанны классы

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'header_nav')
    {
        // Определяем, является ли устройство мобильным или десктопным
        $is_mobile = wp_is_mobile();

        // Задаем базовый класс
        $atts['class'] = 'btn w-button';

        // Добавляем класс в зависимости от типа устройства
        if ($is_mobile)
        {
            $atts['class'] .= ' btn--border-white';
        }
        else
        {
            $atts['class'] .= ' btn--border-blue';
        }

        // Добавляем класс для текущего элемента меню
        if ($item->current)
        {
            $atts['class'] .= ' w--current';
        }
    }

    return $atts;
}



function start_buffer()
{
    ob_start("modify_html_tag");
}
add_action('get_header', 'start_buffer');

function modify_html_tag($buffer)
{
    global $wf_page, $wf_site;

    // Устанавливаю значения по умолчанию, если переменные пустые
    if (empty($wf_page))
    {
        $wf_page = "65fb2d744558f90976ea5dc5";
    }

    if (empty($wf_site))
    {
        $wf_site = "65fb2d744558f90976ea5dc6";
    }

    // Добавляем атрибуты data-wf-page и data-wf-site в тэг <html>
    $buffer = str_replace('<html', '<html data-wf-page="' . esc_attr($wf_page) . '" data-wf-site="' . esc_attr($wf_site) . '"', $buffer);

    return $buffer;
}

function end_buffer()
{
    if (ob_get_length())
    {
        ob_end_flush();
    }
}
add_action('wp_footer', 'end_buffer');


// добавляю опшенс
if (function_exists('acf_add_options_page'))
{

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Добавляем метабокс для выбора шаблона
function add_custom_template_metabox()
{
    add_meta_box(
        'custom_template',
        'Выбор шаблона',
        'render_custom_template_metabox',
        'case-studies', // Укажите здесь ваш custom post type
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_custom_template_metabox');

// Рендерим метабокс
function render_custom_template_metabox($post)
{
    $templates = wp_get_theme()->get_files('php', 1);
    $post_template = get_post_meta($post->ID, '_wp_page_template', true);

    wp_nonce_field(basename(__FILE__), 'custom_template_nonce');
?>
    <p>
        <label for="custom_template">Template:</label>
        <select name="custom_template" id="custom_template">
            <option value="default">По умолчанию</option>
            <?php
            foreach ($templates as $template => $full_path)
            {
                if (strpos($template, 'single-case-studies-') !== false)
                {
                    $template_name = ucfirst(str_replace(array('single-case-studies-', '.php'), '', $template));
                    echo '<option value="' . esc_attr($template) . '" ' . selected($post_template, $template, false) . '>' . esc_html($template_name) . '</option>';
                }
            }
            ?>
        </select>
    </p>
<?php
}

// Сохраняем выбранный шаблон
function save_custom_template($post_id)
{
    if (!isset($_POST['custom_template_nonce']) || !wp_verify_nonce($_POST['custom_template_nonce'], basename(__FILE__)))
    {
        return $post_id;
    }

    $new_template = (isset($_POST['custom_template']) ? sanitize_text_field($_POST['custom_template']) : 'default');
    update_post_meta($post_id, '_wp_page_template', $new_template);
}
add_action('save_post', 'save_custom_template');

// Используем выбранный шаблон
function use_custom_template($single)
{
    global $post;

    if ($post->post_type == 'case-studies')
    {
        $template = get_post_meta($post->ID, '_wp_page_template', true);
        if ($template && $template != 'default')
        {
            if (file_exists(get_template_directory() . '/' . $template))
            {
                return get_template_directory() . '/' . $template;
            }
        }
    }

    return $single;
}
add_filter('single_template', 'use_custom_template');
