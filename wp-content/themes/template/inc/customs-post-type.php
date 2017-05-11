<?php
add_action('init', 'create_doitac_post_type');
function create_doitac_post_type() {
    register_post_type('doitac', array(
        'labels' => array(
            'name' => __('Slide đối tác'),
            'singular_name' => __('Slide đối tác'),
            'add_new' => __('Thêm mới'),
            'add_new_item' => __('Thêm mới'),
            'edit' => __('Sửa'),
            'edit_item' => __('Sửa'),
            'new_item' => __('Slide mới'),
            'view' => __('Xem'),
            'view_item' => __('Xem'),
            'search_items' => __('Tìm kiếm'),
            'not_found' => __('Không có slide nào được tìm thấy'),
            'not_found_in_trash' => __('Không có slide nào đươc tìm thấy')
        ),
        'public' => true,
        'show_ui' => true,
        'publicy_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 22,
        //'menu_icon' => get_stylesheet_directory_uri() . '/images/gallery.png',
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array(
            'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
            'custom-fields'
        ),
        'rewrite' => array('slug' => 'doitac', 'with_front' => false),
        //'taxonomies' =>  array('post_tag', 'category'),
        'can_export' => true,
        //'register_meta_box_cb'  =>  'call_to_function_do_something',
        'description' => __('Mô tả.')
            )
    );
}
;?>
