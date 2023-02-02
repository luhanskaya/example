<?php

    if( function_exists('acf_add_options_page') ) {
    
        acf_add_options_page(array(
            'page_title'  => 'General Settings',
            'menu_title'  => 'General Settings',
            'menu_slug'   => 'general-settings',
            'capability'  => 'edit_posts',
            'redirect'    => false
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Common Blocks',
            'menu_title'    => 'Common Blocks',
            'parent_slug'   => 'general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Contacts',
            'menu_title'    => 'Contacts',
            'parent_slug'   => 'general-settings',
        ));

    } 