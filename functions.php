<?php 

// Регистрирую скрипты
function donehq_enqueue_scripts(){
    wp_enqueue_style('normalize-style', get_template_directory_uri().'/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('components-style', get_template_directory_uri().'/css/components.css', array(), '1.0', 'all');
    wp_enqueue_style('donehq-2-style', get_template_directory_uri().'/css/donehq-2.css', array(), '1.0', 'all');
	wp_enqueue_script('main-script', get_template_directory_uri().'/js/donehq-2.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'donehq_enqueue_scripts');



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
        'fallback_cb'=> 'default_page_menu',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
} 


// Добавляем классы ссылкам так как в верстке у нас меню просто из тегов a к которым привязанны классы
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location === 'header_nav' ) {
		$atts['class'] = 'btn btn--border-blue w-button';

		if ( $item->current ) {
			$atts['class'] .= ' w--current';
		}
	}

	return $atts;
}



