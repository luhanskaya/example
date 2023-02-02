<?php

    /**
     * Register widget area.
     *
     */
    function blazingbear_widgets_init() {

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer', 'fblazingbear' ),
                'id'            => 'footer',
                'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'fblazingbear' ),
                'before_widget' => '<div class="d-none d-lg-block col-lg-3 col-xl-2">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="footer-title">',
                'after_title'   => '</h5>',
            )
        );
    }
    add_action( 'widgets_init', 'blazingbear_widgets_init' );
