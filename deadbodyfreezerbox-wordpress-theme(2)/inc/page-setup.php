<?php
/**
 * Automatic site structure setup.
 *
 * Creates the six editable pages requested by the site structure and
 * assigns the corresponding native page templates. It is idempotent.
 *
 * @package FreezerBox
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function freezerbox_get_or_create_page( $title, $slug, $template = '' ) {
    $page = get_page_by_path( $slug, OBJECT, 'page' );

    if ( ! $page ) {
        $page_id = wp_insert_post(
            array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ),
            true
        );

        if ( is_wp_error( $page_id ) ) {
            return 0;
        }
    } else {
        $page_id = (int) $page->ID;
    }

    if ( $template ) {
        update_post_meta( $page_id, '_wp_page_template', $template );
    }

    return $page_id;
}

function freezerbox_create_site_structure() {
    $pages = array(
        'home' => array(
            'title'    => __( 'Home', 'freezerbox' ),
            'slug'     => 'home',
            'template' => '',
        ),
        'services' => array(
            'title'    => __( 'Services', 'freezerbox' ),
            'slug'     => 'services',
            'template' => 'page-templates/template-services.php',
        ),
        'service-areas' => array(
            'title'    => __( 'Service Areas', 'freezerbox' ),
            'slug'     => 'service-areas',
            'template' => 'page-templates/template-service-areas.php',
        ),
        'reviews' => array(
            'title'    => __( 'Reviews', 'freezerbox' ),
            'slug'     => 'reviews',
            'template' => 'page-templates/template-reviews.php',
        ),
        'faq' => array(
            'title'    => __( 'FAQ', 'freezerbox' ),
            'slug'     => 'faq',
            'template' => 'page-templates/template-faq.php',
        ),
        'contact' => array(
            'title'    => __( 'Contact', 'freezerbox' ),
            'slug'     => 'contact',
            'template' => 'page-templates/template-contact.php',
        ),
    );

    $ids = array();

    foreach ( $pages as $key => $page ) {
        $ids[ $key ] = freezerbox_get_or_create_page( $page['title'], $page['slug'], $page['template'] );
    }

    if ( ! empty( $ids['home'] ) ) {
        $show_on_front = get_option( 'show_on_front' );
        $page_on_front = (int) get_option( 'page_on_front' );

        if ( 'page' !== $show_on_front || ! $page_on_front ) {
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $ids['home'] );
        }
    }

    freezerbox_sync_menu(
        'Freezer Box Primary',
        'primary',
        array(
            $ids['home'],
            $ids['services'],
            $ids['service-areas'],
            $ids['reviews'],
            $ids['faq'],
            $ids['contact'],
        )
    );

    freezerbox_sync_menu(
        'Freezer Box Footer',
        'footer',
        array(
            $ids['home'],
            $ids['services'],
            $ids['service-areas'],
            $ids['reviews'],
            $ids['faq'],
            $ids['contact'],
        )
    );
}
add_action( 'after_switch_theme', 'freezerbox_create_site_structure' );

function freezerbox_sync_menu( $menu_name, $location, $page_ids ) {
    $menu = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu ) {
        $menu_id = wp_create_nav_menu( $menu_name );
        if ( is_wp_error( $menu_id ) ) {
            return;
        }
    } else {
        $menu_id = (int) $menu->term_id;
    }

    $existing = wp_get_nav_menu_items( $menu_id );
    $existing_page_ids = array();

    if ( $existing ) {
        foreach ( $existing as $item ) {
            if ( 'post_type' === $item->type && 'page' === $item->object ) {
                $existing_page_ids[] = (int) $item->object_id;
            }
        }
    }

    $labels = array(
        'Home',
        'Services',
        'Service Areas',
        'Reviews',
        'FAQ',
        'Contact',
    );

    foreach ( $page_ids as $index => $page_id ) {
        $page_id = (int) $page_id;
        if ( ! $page_id || in_array( $page_id, $existing_page_ids, true ) ) {
            continue;
        }

        wp_update_nav_menu_item(
            $menu_id,
            0,
            array(
                'menu-item-object'   => 'page',
                'menu-item-object-id'=> $page_id,
                'menu-item-type'     => 'post_type',
                'menu-item-status'   => 'publish',
                'menu-item-title'    => isset( $labels[ $index ] ) ? $labels[ $index ] : get_the_title( $page_id ),
            )
        );
    }

    $locations = get_theme_mod( 'nav_menu_locations', array() );
    $locations[ $location ] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
}
