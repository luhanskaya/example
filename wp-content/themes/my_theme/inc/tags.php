<?php

    /**
     * Prints HTML with meta information for the current post-date/time.
     */

    function posted_on() {
        $time_string = '<time datetime="%1$s">%2$s</time>';

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date('F jS') )
        );
        echo '<span class="fw-bolder text-secondary">';
        printf(
            esc_html__( '%s', 'gripp' ),
            $time_string
        );
        echo '</span>';
    }

    /**
     * Prints HTML with meta information for the current post/excerpt.
     */

    function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
    }