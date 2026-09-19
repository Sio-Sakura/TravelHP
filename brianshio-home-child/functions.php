<?php
// Keep the parent theme's look everywhere: load its stylesheet as usual.
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} );

// On the BrianShio Home template only, drop all queued stylesheets so the
// page's own inline design is not polluted by theme/plugin CSS.
add_action( 'wp_enqueue_scripts', function () {
    if ( is_page_template( 'template-home.php' ) || is_home() || is_archive() ) {
        global $wp_styles;
        foreach ( (array) $wp_styles->queue as $handle ) {
            // keep the logged-in admin toolbar styled; visitors never load these
            if ( in_array( $handle, array( 'admin-bar', 'dashicons' ), true ) ) {
                continue;
            }
            wp_dequeue_style( $handle );
        }
    }
}, 100 );

// Editable text helper: ACF value if present, otherwise the built-in default.
function bs_field( $name, $default ) {
    if ( function_exists( 'get_field' ) ) {
        $v = get_field( $name );
        if ( $v !== null && $v !== '' ) {
            return $v;
        }
    }
    return $default;
}

// Field definitions appear automatically on the HOME edit screen once ACF is active.
add_action( 'acf/init', function () {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) return;
    acf_add_local_field_group( array(
        'key'    => 'group_bs_home',
        'title'  => 'HOME 編集エリア（空欄なら元の文言が表示されます）',
        'fields' => array(
            array( 'key' => 'field_bs_next_trip', 'label' => 'Our next trip：行き先（例：Japan）', 'name' => 'next_trip', 'type' => 'text', 'placeholder' => 'Japan' ),
            array( 'key' => 'field_bs_featured_date', 'label' => 'Featuredカード：日付', 'name' => 'featured_date', 'type' => 'text', 'placeholder' => 'Nov 7–11, ’24' ),
            array( 'key' => 'field_bs_featured_title', 'label' => 'Featuredカード：タイトル（改行そのまま反映）', 'name' => 'featured_title', 'type' => 'textarea', 'rows' => 2, 'placeholder' => "Red Canyon Ranch,\nSouth Dakota" ),
            array( 'key' => 'field_bs_featured_text', 'label' => 'Featuredカード：説明文', 'name' => 'featured_text', 'type' => 'text', 'placeholder' => 'Our honeymoon adventure under the Milky Way!' ),
            array( 'key' => 'field_bs_featured_link', 'label' => 'Featuredカード：リンク先URL', 'name' => 'featured_link', 'type' => 'url' ),
        ),
        'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ) ) ),
    ) );
} );

// Blog index URL (posts page if set, otherwise /blog/).
function bs_blog_url() {
    $p = get_option( 'page_for_posts' );
    return $p ? get_permalink( $p ) : home_url( '/blog/' );
}

// Category archive URL by slug, with a safe fallback.
function bs_cat_url( $slug ) {
    $cat = get_category_by_slug( $slug );
    return $cat ? get_category_link( $cat ) : bs_blog_url();
}
