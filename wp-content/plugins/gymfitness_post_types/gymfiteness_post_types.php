<?php
/*
    Plugin Name: Gym Fitness - Post Types
    Plugin URI:
    Description: Aniade Post Types al sitio Gym Fitness
    Version: 1.0.0
    Author: Dennis Orellana
    Author URI: https://twitter.com/dennisR_blw
    Text Domain: gymfitness
*/

if(!defined('ABSPATH')) die();

    // Registrar Custom Post Type
function gymfitness_clases_post_type()
{
    $labels = array(
        'name'                  => _x('Clases', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Clase', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Clases', 'gymfitness'),
        'name_admin_bar'        => __('Clase', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Clase Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Clases', 'gymfitness'),
        'add_new_item'          => __('Agregar Clase', 'gymfitness'),
        'add_new'               => __('Agregar Clase', 'gymfitness'),
        'new_item'              => __('Nueva Clase', 'gymfitness'),
        'edit_item'             => __('Editar Clase', 'gymfitness'),
        'update_item'           => __('Actualizar Clase', 'gymfitness'),
        'view_item'             => __('Ver Clase', 'gymfitness'),
        'view_items'            => __('Ver Clases', 'gymfitness'),
        'search_items'          => __('Buscar Clase', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Clase', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Clase', 'gymfitness'),
        'items_list'            => __('Lista de Clases', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Clases', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Clases', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Clase', 'gymfitness'),
        'description'           => __('Clases para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_clases', $args);
}

function gymfitness_comidas_post_type()
{
    $labels = array(
        'name'                  => _x('Comidas Actuales', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Comida', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Comidas Actuales', 'gymfitness'),
        'name_admin_bar'        => __('Comida', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Comida Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Comidas', 'gymfitness'),
        'add_new_item'          => __('Agregar Comida', 'gymfitness'),
        'add_new'               => __('Agregar Comida', 'gymfitness'),
        'new_item'              => __('Nueva Comida', 'gymfitness'),
        'edit_item'             => __('Editar Comida', 'gymfitness'),
        'update_item'           => __('Actualizar Comida', 'gymfitness'),
        'view_item'             => __('Ver Comida', 'gymfitness'),
        'view_items'            => __('Ver Comidas', 'gymfitness'),
        'search_items'          => __('Buscar Comida', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Comida', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Comida', 'gymfitness'),
        'items_list'            => __('Lista de Comidas', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Comidas', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Comidas', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Comida', 'gymfitness'),
        'description'           => __('Comidas para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-food',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_comidas', $args);
}

function gymfitness_razas_post_type()
{
    $labels = array(
        'name'                  => _x('Razas', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Raza', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Razas', 'gymfitness'),
        'name_admin_bar'        => __('Raza', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Raza Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Razas', 'gymfitness'),
        'add_new_item'          => __('Agregar Raza', 'gymfitness'),
        'add_new'               => __('Agregar Raza', 'gymfitness'),
        'new_item'              => __('Nueva Raza', 'gymfitness'),
        'edit_item'             => __('Editar Raza', 'gymfitness'),
        'update_item'           => __('Actualizar Raza', 'gymfitness'),
        'view_item'             => __('Ver Raza', 'gymfitness'),
        'view_items'            => __('Ver Razas', 'gymfitness'),
        'search_items'          => __('Buscar Raza', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Raza', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Raza', 'gymfitness'),
        'items_list'            => __('Lista de Razas', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Razas', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Razas', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Raza', 'gymfitness'),
        'description'           => __('Razas para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-pets',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_razas', $args);
}

function gymfitness_adjetivos_post_type()
{
    $labels = array(
        'name'                  => _x('Adjetivos', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Adjetivo', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Adjetivos', 'gymfitness'),
        'name_admin_bar'        => __('Adjetivo', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Adjetivo Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Adjetivos', 'gymfitness'),
        'add_new_item'          => __('Agregar Adjetivo', 'gymfitness'),
        'add_new'               => __('Agregar Adjetivo', 'gymfitness'),
        'new_item'              => __('Nueva Adjetivo', 'gymfitness'),
        'edit_item'             => __('Editar Adjetivo', 'gymfitness'),
        'update_item'           => __('Actualizar Adjetivo', 'gymfitness'),
        'view_item'             => __('Ver Adjetivo', 'gymfitness'),
        'view_items'            => __('Ver Adjetivos', 'gymfitness'),
        'search_items'          => __('Buscar Adjetivo', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Adjetivo', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Adjetivo', 'gymfitness'),
        'items_list'            => __('Lista de Adjetivos', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Adjetivos', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Adjetivos', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Adjetivo', 'gymfitness'),
        'description'           => __('Adjetivos para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-heart',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_adjetivos', $args);
}

function gymfitness_meriendas_post_type()
{
    $labels = array(
        'name'                  => _x('Meriendas', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Merienda', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Meriendas', 'gymfitness'),
        'name_admin_bar'        => __('Merienda', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Merienda Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Meriendas', 'gymfitness'),
        'add_new_item'          => __('Agregar Merienda', 'gymfitness'),
        'add_new'               => __('Agregar Merienda', 'gymfitness'),
        'new_item'              => __('Nueva Merienda', 'gymfitness'),
        'edit_item'             => __('Editar Merienda', 'gymfitness'),
        'update_item'           => __('Actualizar Merienda', 'gymfitness'),
        'view_item'             => __('Ver Merienda', 'gymfitness'),
        'view_items'            => __('Ver Meriendas', 'gymfitness'),
        'search_items'          => __('Buscar Merienda', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Merienda', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Merienda', 'gymfitness'),
        'items_list'            => __('Lista de Meriendas', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Meriendas', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Meriendas', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Merienda', 'gymfitness'),
        'description'           => __('Meriendas para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-drumstick',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_meriendas', $args);
}

function gymfitness_tablas_post_type()
{
    $labels = array(
        'name'                  => _x('Tablas nutricionales', 'Post Type General Name', 'gymfitness'),
        'singular_name'         => _x('Tabla nutricional', 'Post Type Singular Name', 'gymfitness'),
        'menu_name'             => __('Tablas nutricionales', 'gymfitness'),
        'name_admin_bar'        => __('Tabla nutricional', 'gymfitness'),
        'archives'              => __('Archivo', 'gymfitness'),
        'attributes'            => __('Atributos', 'gymfitness'),
        'parent_item_colon'     => __('Tabla Padre', 'gymfitness'),
        'all_items'             => __('Todas Las Tablas nutricionales', 'gymfitness'),
        'add_new_item'          => __('Agregar Tabla nutricional', 'gymfitness'),
        'add_new'               => __('Agregar Tabla nutricional', 'gymfitness'),
        'new_item'              => __('Nueva Tabla nutricional', 'gymfitness'),
        'edit_item'             => __('Editar Tabla nutricional', 'gymfitness'),
        'update_item'           => __('Actualizar Tabla nutricional', 'gymfitness'),
        'view_item'             => __('Ver Tabla nutricional', 'gymfitness'),
        'view_items'            => __('Ver Tablas nutricionales', 'gymfitness'),
        'search_items'          => __('Buscar Tabla nutricional', 'gymfitness'),
        'not_found'             => __('No Encontrado', 'gymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymfitness'),
        'featured_image'        => __('Imagen Destacada', 'gymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymfitness'),
        'insert_into_item'      => __('Insertar en Tabla nutricional', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Tabla nutricional', 'gymfitness'),
        'items_list'            => __('Lista de Tablas nutricionales', 'gymfitness'),
        'items_list_navigation' => __('Navegación de Tablas nutricionales', 'gymfitness'),
        'filter_items_list'     => __('Filtrar Tablas nutricionales', 'gymfitness'),
    );
    $args = array(
        'label'                 => __('Tabla nutricional', 'gymfitness'),
        'description'           => __('Tablas nutricionales para el Sitio Web', 'gymfitness'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => true, // true = posts, false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-calculator',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('gymfitness_tablas', $args);
}


//add_action('init', 'gymfitness_tablas_post_type', 0);

//add_action('init', 'gymfitness_adjetivos_post_type', 0);

add_action('init', 'gymfitness_clases_post_type', 0);

//add_action('init', 'gymfitness_comidas_post_type', 0);

//add_action('init', 'gymfitness_razas_post_type', 0);

//add_action('init', 'gymfitness_meriendas_post_type', 0);

// Register Custom Post Type
function gymfitness_instructores() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructores', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Instructores', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Instructor', 'gymfitness' ),
		'add_new'               => __( 'Agregar Instructor', 'gymfitness' ),
		'new_item'              => __( 'Nueva Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Editar Instructor', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Instructor', 'gymfitness' ),
		'view_item'             => __( 'Ver Instructor', 'gymfitness' ),
		'view_items'            => __( 'Ver Instructores', 'gymfitness' ),
		'search_items'          => __( 'Buscar Instructor', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'gymfitness' ),
		'items_list'            => __( 'Lista de Instructores', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'gymfitness' ),
		'description'           => __( 'Instructores para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'gymfitness_instructores', 0 );


function gymfitness_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimoniales', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Agregar Testimonial', 'gymfitness' ),
		'new_item'              => __( 'Nueva Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Editar Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Testimonial', 'gymfitness' ),
		'view_item'             => __( 'Ver Testimonial', 'gymfitness' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymfitness' ),
		'search_items'          => __( 'Buscar Testimonial', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Lista de Testimoniales', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'gymfitness' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'gymfitness_testimoniales', 0 );
