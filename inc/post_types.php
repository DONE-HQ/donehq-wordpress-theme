<?php

/**
 * Register Custom Post Types and Taxonomies
 */
function register_custom_post_types()
{

    // Case Studies Post Type
    $case_studies_labels = [
        "name" => esc_html__("Case Studies", "donehq.com"),
        "singular_name" => esc_html__("Case", "donehq.com"),
    ];

    $case_studies_args = [
        "label" => esc_html__("Case Studies", "donehq.com"),
        "labels" => $case_studies_labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "page",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "case-studies", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-list-view",
        "supports" => ["title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "revisions", "page-attributes", "post-formats"],
        "taxonomies" => ["case-category"],
    ];

    register_post_type("case-studies", $case_studies_args);

    // Services Post Type
    $services_labels = [
        "name" => esc_html__("Services", "donehq.com"),
        "singular_name" => esc_html__("Service", "donehq.com"),
    ];

    $services_args = [
        "label" => esc_html__("Services", "donehq.com"),
        "labels" => $services_labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "services", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-welcome-widgets-menus",
        "supports" => ["title", "editor", "thumbnail"],
    ];

    register_post_type("services", $services_args);
}

add_action('init', 'register_custom_post_types');

function register_custom_taxonomies()
{

    // Case Category Taxonomy
    $case_category_labels = [
        "name" => esc_html__("Case categories", "donehq.com"),
        "singular_name" => esc_html__("Case category", "donehq.com"),
    ];

    $case_category_args = [
        "label" => esc_html__("Case categories", "donehq.com"),
        "labels" => $case_category_labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'case-category', 'with_front' => true],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => true,
        "rest_base" => "case-category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
        "sort" => false,
    ];

    register_taxonomy("case-category", ["case-studies"], $case_category_args);
}

add_action('init', 'register_custom_taxonomies');
