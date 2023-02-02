<?php

    // Register Custom Post Type
    function base_generate_custom_post_type($key, $value = array())
    {
        if (count($value) < 1 || !isset($key))
            return;

        //init vars
        $singular = ucfirst($value['singular']);
        $plural = ucfirst($value['plural']);

        register_post_type($key, array(
            'label'                 => __($singular, 'sage'),
            'description'           => __('Post type for ' . $singular . ' reviews', 'sage'),
            'labels'                => array(
            'name'                  => _x($plural, 'Post Type General Name', 'sage'),
            'singular_name'         => _x($singular, 'Post Type Singular Name', 'sage'),
            'menu_name'             => __($plural, 'sage'),
            'name_admin_bar'        => __($plural, 'sage'),
            'archives'              => __($singular . ' Archives', 'sage'),
            'attributes'            => __($singular . ' Attributes', 'sage'),
            'parent_item_colon'     => __('Parent Item:', 'sage'),
            'all_items'             => __('All Items', 'sage'),
            'add_new_item'          => __('Add New ' . $singular, 'sage'),
            'add_new'               => __('Add New', 'sage'),
            'new_item'              => __('New ' . $singular, 'sage'),
            'edit_item'             => __('Edit ' . $singular, 'sage'),
            'update_item'           => __('Update ' . $singular, 'sage'),
            'view_item'             => __('View ' . $singular, 'sage'),
            'view_items'            => __('View ' . $plural, 'sage'),
            'search_items'          => __('Search ' . $singular, 'sage'),
            'not_found'             => __('Not found', 'sage'),
            'not_found_in_trash'    => __('Not found in Trash', 'sage'),
            'featured_image'        => __('Featured Image', 'sage'),
            'set_featured_image'    => __('Set featured image', 'sage'),
            'remove_featured_image' => __('Remove featured image', 'sage'),
            'use_featured_image'    => __('Use as featured image', 'sage'),
            'insert_into_item'      => __('Insert into item', 'sage'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'sage'),
            'items_list'            => __($singular . ' list', 'sage'),
            'items_list_navigation' => __($singular . ' list navigation', 'sage'),
            'filter_items_list'     => __('Filter ' . $singular . ' list', 'sage'),
            ),
            'supports'              => (isset($value['supports']) && is_array($value['supports']) ? $value['supports'] : array('title', 'editor', 'thumbnail', 'excerpt')),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => $value['position'],
            'menu_icon'             => $value['icon'],
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'rewrite'               => array(
            'slug'                  => $value['permalink'],
            'with_front'            => false,
            'pages'                 => true,
            'feeds'                 => true,
            ),
            'capability_type'       => 'page',
            'show_in_rest'          => true, //required for Gutenberg to function
        ));
    }

    //Register all the custom post_types we need
    add_action('init', function () {
        foreach (array(
            'service'       => array(
            'plural'        => 'services',
            'singular'      => 'service',
            'permalink'     => 'services',
            'position'      => 2,
            'icon'          => 'dashicons-schedule'
            ),
            'testimonials'  => array(
            'plural'        => 'testimonials',
            'singular'      => 'testimonial',
            'permalink'     => 'testimonials',
            'icon'          => 'dashicons-format-chat'
            )
        ) as $key => $value)
            base_generate_custom_post_type($key, $value);
    }, 0);


    add_filter( 'acf_archive_post_types', 'change_acf_archive_cpt' );
    function change_acf_archive_cpt( $cpts ) {

        // Remove cpt
        unset( $cpts['testimonials'] );

        return $cpts;
    }