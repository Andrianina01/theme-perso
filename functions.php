<?php 

	

	require get_template_directory() . '/inc/control-tinymce.php';

function theme_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	
	

	// Print styles.
	wp_enqueue_style( 'custom-print-style', get_template_directory_uri() . '/css/animate.min.css', array() );


	// Custom fonts
	wp_enqueue_style( 'custom-custom-font', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700', array());

	wp_enqueue_style( 'custom-custom-fonts', get_template_directory_uri() . '/css/font-awesome.min.css', array());

	// Libs Bootstrap grit
	wp_enqueue_style( 'custom-bootstrap-grid', get_template_directory_uri() . '/css/bootstrap.min.css', array() );


		// Responsive embeds script.
		wp_enqueue_script(
			'custom-custom-one-responsive-embeds-script',
			get_template_directory_uri() . '/js/jquery.js',
			true
		);
		// Register the IE11 polyfill file.
		wp_register_script(
			'custom-one-ie11-polyfills',
			get_template_directory_uri() . '/js/bootstrap.min.js',
			array(),
			true
		);

		wp_register_script(
			'custom-one-ie11-gsap',
			get_template_directory_uri() . '/js/gsap.min.js',
			array(),
			true
		);

		wp_enqueue_script(
			'custom-custom',
			get_template_directory_uri() . '/js/typed.js',
			array(),
			true
		);
		/*wp_enqueue_script(
			'custom-custom-scriptll',
			get_template_directory_uri() . '/js/wow.min.js',
			array(),
			true
		);*/

		wp_enqueue_script(
			'custom-custom-scriptpp',
			get_template_directory_uri() . '/js/jquery.singlePageNav.min.js',
			array(),
			true
		);
		wp_enqueue_script(
			'custom-custom-scriptnn',
			get_template_directory_uri() . '/js/custom.js',
			array(),
			true
		);

}
	
	add_action( 'wp_enqueue_scripts', 'theme_scripts' ); 


	 function themeperso_customize_register($wp_customize){

	 	 /**************************************************/
	 	$wp_customize->add_section('themeperso_color_scheme', array(
	        'title'    => __('contact haut', 'themeperso'),
	        //'description' => '',
	        'priority' => 10,
    	));
	 	/*numero*/
	 	$wp_customize->add_setting('themeperso_numero', array(
        'default'        => '0340505205',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_numero', array(
	        'label'      => __('telephone', 'themename'),
	        'section'    => 'themeperso_color_scheme',
	        //'settings'   => 'themeperso_theme_options',
	    ));
	    /*mail*/
	    $wp_customize->add_setting('themeperso_mail', array(
        'default'        => 'value@gmail.com',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_mail', array(
	        'label'      => __('mail', 'themename'),
	        'section'    => 'themeperso_color_scheme',
	        //'settings'   => 'themeperso_theme_options',
	    ));
	    /**************************************************/


	    $wp_customize->add_section('header', array(
	        'title'    => __('bannier', 'themeperso'),
	        'description' => '',
	        'priority' => 15,
	        'panel' => 'bgeg_blocs_panel',
    	));

	    $wp_customize->add_setting(
            'image_upload_test' ,
            array(
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image_upload_test',
                array(
                   'label'     => __( 'Téléchargez votre image', 'themeperso' ),
                   'type'      => 'image',
                   'section'   => 'header',
                   'priority'  => 10,
                )
            )
        );

        $wp_customize->add_setting('themeperso_titre', array(
        'default'        => 'We make website that are',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_titre', array(
	        'label'      => __('Titre', 'themename'),
	        'section'    => 'header',
	        //'settings'   => 'themeperso_theme_options',
	    ));

	     $wp_customize->add_setting('themeperso_titre_blue', array(
        'default'        => 'awesome',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));
	  
	    $wp_customize->add_control('themeperso_titre_blue', array(
	        'label'      => __('Titre en blue', 'themename'),
	        'section'    => 'header',
	        //'settings'   => 'themeperso_theme_options',
	    ));


	     $wp_customize->add_setting(
        'infos_description',
        array(
            'default'           => '<div class="sub-element">Hello, This is a HTML Website.</div>
<div class="sub-element">Awesome Website is Designed and provided by Giri Designs.</div>
<div class="sub-element">If you need this website, Please contact us.</div>',
            'transport'         => 'postMessage',
        )
	    );
	    $wp_customize->add_control( new Text_Editor_Custom_Control(
	        $wp_customize,
	        'infos_description',
	        [
	            'label'             => __( 'Description', 'themename' ),
	            'section'           => 'header',
	            'input_attrs'       => array(
	                 'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
	                 'mediaButtons' => true,
	            )
	        ]
	        )
	    );
	    
	     $wp_customize->add_setting('themeperso_btn_link', array(
        'default'        => '#about',
        'capability'     => 'edit_theme_options',
        //'type'           => 'text',
	    ));

	    $wp_customize->add_control('themeperso_btn_link', array(
	        'label'      => __('Get started', 'themename'),
	        'section'    => 'header',
	        //'settings'   => 'themeperso_theme_options',
	    ));

	    


        /*-----------------------------------------------------------*/
        $wp_customize->add_panel( 'bgeg_blocs_panel', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'title'          => __('Éléments', 'themeperso'),
    	) );
    	
        // Create our panels

		// No panel title and/or ID was set!

		// Create our sections

		$wp_customize->add_section( 'trilple_bloc' , array(
			'title'             => 'trilple bloc',
			'capability'        => 'trilple_bloc',
		) );


    	}


		/*-----------------------------------------------------------*/



	 add_action('customize_register', 'themeperso_customize_register');

register_nav_menus(array('Top' => 'Navigation principale'));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


/*function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
add_action('after_setup_theme', 'remove_admin_bar');
*/
function remove_admin_bar() {
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

// [bartag foo="foo-value"]
/*add_shortcode( 'bartag', 'bartag_func' );

function bartag_func( $atts ) {
 extract( shortcode_atts( array(
  'foo' => 'something'
 ), $atts ) );
  
 return "{$foo}";
}


add_action( 'vc_before_init', 'your_name_integrateWithVC' );

function your_name_integrateWithVC() {

 vc_map(array(
  "name" => __( "Bar tag test", "my-text-domain" ),
  "base" => "bartag",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "textfield",
	  "holder" => "div",
	  "class" => "text-center",
	  "heading" => __( "Text", "my-text-domain" ),
	  "param_name" => "foo",
	  "value" => __( "Default param value", "my-text-domain" ),
	  "description" => __( "Description for foo param.", "my-text-domain" )
	 )
  )
 ) 
);

}*/

add_shortcode( 'bartag', 'bartag_func' );
function bartag_func( $atts ) {
 extract( shortcode_atts( array(
  'foo' => 'something',
  'color' => '#FFF',
  'texte' => 'lorem'
 ), $atts ) );
  
  return "<div style='color:{$color};'>{$texte}</div>";
}

add_action( 'vc_before_init', 'your_name_integrateWithVC' );
function your_name_integrateWithVC() {
 vc_map( array(
  "name" => __( "Bar tag test", "my-text-domain" ),
  "base" => "bartag",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
	 array(
	  "type" => "textfield",
	  "holder" => "div",
	  "class" => "",
	  "heading" => __( "Text", "my-text-domain" ),
	  "param_name" => "foo",
	  "value" => __( "Default param value", "my-text-domain" ),
	  "description" => __( "Description for foo param.", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "holder" => "div",
	  "class" => "",
	  "heading" => __( "Texte", "titre" ),
	  "param_name" => "texte",
	  "value" => __( "Default param value", "my-text-domain" ),
	  "description" => __( "Ampidiro eo ny soratra", "my-text-domain" )
	 ),
	 array(
	  "type" => "colorpicker",
	  "class" => "",
	  "heading" => __( "Text color", "my-text-domain" ),
	  "param_name" => "color",
	  "value" => '#FF0000', //Default Red color
	  "description" => __( "Choose text color", "my-text-domain" )
	 )
  )
 ) 
);
}
