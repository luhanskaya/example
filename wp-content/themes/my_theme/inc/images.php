<?php

    /**
    * Add opportunity for download svg
    */

    function add_file_types_to_uploads($file_types){

        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );

        return $file_types;
    }
    add_action('upload_mimes', 'add_file_types_to_uploads');

    //call our function when initiated from JavaScript
    add_action('wp_AJAX_svg_get_attachment_url', 'get_attachment_url_media_library');
