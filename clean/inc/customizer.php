<?php
/**
 * Clean Theme Customizer
 *
 * @package Clean
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function clean_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'clean_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'clean_customize_partial_blogdescription',
		) );
	}




// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_options', array(
        'title' => __('Из какой категории будут выводиться посты на главной странице', 'clean'),
        'priority' => 0,
    ));
    $wp_customize->add_setting('clean_home_category', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_home_category',
        array(
            'label' => __('Введите ярлык категории, из которой будут выводиться посты на главную страницу сайта', 'clean'),
            'section' => 'clean_theme_options',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer


// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_colichestvo', array(
        'title' => __('Настройка количества постов на главной страницы сайта', 'clean'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('clean_colichestvo', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_colichestvo',
        array(
            'label' => __('Введите количество постов, что будут выводиться только на главной странице сайта', 'clean'),
            'section' => 'clean_theme_colichestvo',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer
// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_thumbnail', array(
        'title' => __('Настройка миниатюры-заглушки', 'clean'),
        'priority' => 2,
    ));
    $wp_customize->add_setting('clean_thumbnail_page', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_thumbnail_page',
        array(
            'label' => __('Введите адрес изображения, которое будет использоваться в качестве миниатюры заглушки', 'clean'),
            'section' => 'clean_theme_thumbnail',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer


// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_favicon', array(
        'title' => __('Настройка фавикона сайта', 'clean'),
        'priority' => 3,
    ));
    $wp_customize->add_setting('clean_favicon_site', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_favicon_site',
        array(
            'label' => __('Вставьте адрес вашей фавикон сайта', 'clean'),
            'section' => 'clean_theme_favicon',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer







// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_descr', array(
        'title' => __('Вывод описания сайта в шапке сайта', 'clean'),
        'priority' => 4,
    ));
    $wp_customize->add_setting('clean_descr_page', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_descr_page',
        array(
            'label' => __('Введите описание сайта для вывода в шапке сайта', 'clean'),
            'section' => 'clean_theme_descr',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer

















}











add_action( 'customize_register', 'clean_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function clean_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function clean_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clean_customize_preview_js() {
	wp_enqueue_script( 'clean-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'clean_customize_preview_js' );
