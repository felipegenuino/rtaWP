function cptui_register_my_cpts() {

/**
 * Post Type: Artigos.
 */

$labels = [
    "name" => __( "Artigos", "rtaonline" ),
    "singular_name" => __( "Artigo", "rtaonline" ),
    "menu_name" => __( "Meus Artigos", "rtaonline" ),
    "all_items" => __( "Todos Artigos", "rtaonline" ),
    "add_new" => __( "Add new", "rtaonline" ),
    "add_new_item" => __( "Adicionar novo Artigo", "rtaonline" ),
    "edit_item" => __( "Editar Artigo", "rtaonline" ),
    "new_item" => __( "Novo Artigo", "rtaonline" ),
    "view_item" => __( "Ver Artigo", "rtaonline" ),
    "view_items" => __( "Ver Artigos", "rtaonline" ),
    "search_items" => __( "Pesquisar Artigos", "rtaonline" ),
    "not_found" => __( "No Artigos found", "rtaonline" ),
    "not_found_in_trash" => __( "No Artigos found in trash", "rtaonline" ),
    "parent" => __( "Artigo ascendente:", "rtaonline" ),
    "featured_image" => __( "Featured image for this Artigo", "rtaonline" ),
    "set_featured_image" => __( "Set featured image for this Artigo", "rtaonline" ),
    "remove_featured_image" => __( "Remove featured image for this Artigo", "rtaonline" ),
    "use_featured_image" => __( "Use as featured image for this Artigo", "rtaonline" ),
    "archives" => __( "Artigo archives", "rtaonline" ),
    "insert_into_item" => __( "Insert into Artigo", "rtaonline" ),
    "uploaded_to_this_item" => __( "Upload to this Artigo", "rtaonline" ),
    "filter_items_list" => __( "Filter Artigos list", "rtaonline" ),
    "items_list_navigation" => __( "Artigos list navigation", "rtaonline" ),
    "items_list" => __( "Artigos list", "rtaonline" ),
    "attributes" => __( "Artigos attributes", "rtaonline" ),
    "name_admin_bar" => __( "Artigo", "rtaonline" ),
    "item_published" => __( "Artigo published", "rtaonline" ),
    "item_published_privately" => __( "Artigo published privately.", "rtaonline" ),
    "item_reverted_to_draft" => __( "Artigo reverted to draft.", "rtaonline" ),
    "item_scheduled" => __( "Artigo scheduled", "rtaonline" ),
    "item_updated" => __( "Artigo updated.", "rtaonline" ),
    "parent_item_colon" => __( "Artigo ascendente:", "rtaonline" ),
];

$args = [
    "label" => __( "Artigos", "rtaonline" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "artigos", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-format-aside",
    "supports" => [ "title", "editor" ],
];

register_post_type( "artigos", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );












