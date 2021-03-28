<?php
/**
 * Template to hold functions for WordPress theme
 * 
 * packageDescription
 * 
 * @package australia
 */
?>
<?php
define( 'AUSTRALIA_THEME_DIR', get_template_directory() );
define( 'AUSTRALIA_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'australia_setup' ) ): 
    function australia_setup() {
        load_theme_textdomain( 'australia', AUSTRALIA_THEME_DIR . '/Languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
        add_image_size( 'australia-large', 500, 400, true ); // width, height, crop

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        add_theme_support(
            'html5',
            array(
               'comment-form',
               'comment-list',
               'gallery',
               'caption',
               'style',
               'script',
               'navigation-widgets',
            )
        );

                // Custom header, custom background, custom logo
               header_width  = 50;
               header_height  = 50;
                add_theme_support(
                    'custom-header',
                    apply_filters( 'australia_custom_header_args',
                    array(
                        'default-color' => 'ffffff',   // Customize > Colors > Header Text Color
                        'default-image' => '',
                        'width'         => header_width,
                        'height'        => header_height,
                        'flex-height'   => true,
                        'flex-width'    => true,
                        )
                    )
                );
                add_theme_support(
                    'custom-background',
                    apply_filters(
                        'australia_custom_background_args',
                        array(
                            'default-color' => 'ffffff',   // Customize > Colors > Background Color
                            'default-image' => '',
                        )
                    )
                );
               logo_width  = 100;
               logo_height  = 100;
                add_theme_support(
                    'custom-logo',
                    array(
                        'width'       => logo_width,
                        'height'      => logo_height,
                        'flex-width'  => true,
                        'flex-height' => true,
                        'header-text' => array( 'title-tag', 'site-description' ),
                    )
                );

                add_theme_support( 'customize-selective-refresh-widgets' );

    }
endif;
add_action( 'after_setup_theme', 'australia_setup' );