<?php

function base_assets() {
	wp_enqueue_style( 'reset-styles', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'owl-theme-default-styles', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'owl-carousel-styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );

	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/main.css' );

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false, true);
    wp_enqueue_script('owl-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'base_assets' );

function get_img_url($field) {
    if (is_int($field)) {
        return wp_get_attachment_image_url( $field, 'full' );
    } else {
        return $field['url'];
    }
}

add_action('admin_init', 'remove_textarea');
function remove_textarea() {
	remove_post_type_support( 'callback', 'editor' );
}


add_action( 'admin_post_nopriv_callback', 'callback_fun' );
add_action( 'admin_post_callback', 'callback_fun' );
function callback_fun(){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$is_ur = $_POST['is_ur'];

	wp_insert_post( array(
        'post_title' => 'Номер: ' . $phone . '  Имя: ' . $name . ' Email: ' . $email,
        'post_status' => 'publish',
        'post_type' => 'callback',
        'meta_input' => [ 
            'phone' => $phone,
			'name' => $name,
			'email' => $email,
            'is_ur' => $is_ur
        ]
    ) );

	// wp_mail( 'evgeniy@zod41.ru', 'Номер: ' . $phone . '  Имя: ' . $name, 'Номер: ' . $phone . '  Имя: ' . $name);

    wp_redirect( add_query_arg( 
		[
			'name' 			=> $name,
			'phone'			=> $phone,
			'email'			=> $email
		], 
		site_url( '' )
	) );
}

// Post types

function adding_post_types(){
    register_post_type('callback', array(
		'labels'             => array(
			'name'               => 'Заявки',
			'singular_name'      => 'Заявка',
			'add_new'            => 'Добавить заявку',
			'add_new_item'       => 'Добавить заявку',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новая заявка',
			'view_item'          => 'Посмотреть',
			'search_items'       => 'Найти',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'В корзине ничего не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Заявки'

        ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon' 		 => 'dashicons-phone',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','author')
	) );
}

add_action('init', 'adding_post_types');