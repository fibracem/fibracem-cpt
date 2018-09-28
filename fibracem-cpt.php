<?php

/**
 * Plugin Name: Fibracem Custom Post Types
 * Plugin URI: http://www.fibracem.com.br
 * Description: Fibracem custom post types e taxonomies
 * Version: 1.1
 * Author: Fibracem Teleinformática
 * Author URI: https://fibracem.com
 * License: GNU General Public License version 3.0
*/

if( !function_exists( 'fibracem_post_types_and_taxonomies' ) ){
	function fibracem_post_types_and_taxonomies(){
		$banner_blog_args = array(
			'labels' => array(
				'name' => __( 'Banners Blog', 'fibracem' ),
				'singular_name' => __( 'Banner Blog', 'fibracem' )
			),

			'public' => true,
			'exclude_from_search'       => true,
				'publicly_queryable'        => true, 
				'show_in_nav_menus'         => false,
				'show_ui'                   => true,
			'menu_icon' => 'dashicons-schedule',
			'has_archive' => false,
			'rewrite' => array( 'slug' => 'banner-blog' ),
			'supports' => array(
				'title',
			)
		);

		if( function_exists('classifieds_get_option') ){
			$trans_ad = classifieds_get_option( 'trans_ad' );
			if( !empty( $trans_ad ) && $trans_ad !== 'banner-blog' ){
				$ad_args['rewrite'] = array( 'slug' => $trans_ad );
			}
		}

		register_post_type( 'banner-blog', $banner_blog_args );

		$ad_args = array(
			'labels' => array(
				'name' => __( 'Banners Home', 'fibracem' ),
				'singular_name' => __( 'Banner Home', 'fibracem' )
			),

			'public' => true,
			'exclude_from_search'       => true,
				'publicly_queryable'        => true,
				'show_in_nav_menus'         => false,
				'show_ui'                   => true,
			'menu_icon' => 'dashicons-schedule',
			'has_archive' => false,
			'rewrite' => array( 'slug' => 'banner-home' ),
			'supports' => array(
				'title',
			)
		);

		if( function_exists('classifieds_get_option') ){

			$trans_ad = classifieds_get_option( 'trans_ad' );

			if( !empty( $trans_ad ) && $trans_ad !== 'banner-home' ){

				$ad_args['rewrite'] = array( 'slug' => $trans_ad );

			}

		}

		register_post_type( 'banner-home', $ad_args );

		$ad_args = array(
			'labels' => array(
				'name' => __( 'Banners Destaques', 'fibracem' ),
				'singular_name' => __( 'Banner Destaque', 'fibracem' )
			),

			'public' => true,
			'exclude_from_search'       => true,
				'publicly_queryable'        => true,
				'show_in_nav_menus'         => false,
				'show_ui'                   => true,
			'menu_icon' => 'dashicons-schedule',
			'has_archive' => false,
			'rewrite' => array( 'slug' => 'banner-destaque' ),
			'supports' => array(
				'title'
			)

		);

		if( function_exists('classifieds_get_option') ){
			$trans_ad = classifieds_get_option( 'trans_ad' );
			if( !empty( $trans_ad ) && $trans_ad !== 'banner-destaque' ){
				$ad_args['rewrite'] = array( 'slug' => $trans_ad );
			}
		}

		register_post_type( 'banner-destaque', $ad_args );

		/************************************************************
		 * 28/09 - O Custom Post Type Cursos foi removido.
		 * A Fibracem não oferece mais o treinamento, sendo realizado
		 * por uma empresa parceira. 
		 ************************************************************/

		/**
		 * $curso_args = array(
		 * 			'labels' => array(
		 * 				'name' => __( 'Cursos ', 'fibracem' ),
		 * 				'singular_name' => __( 'Curso ', 'fibracem' )
		 * 			),
		 * 
		 * 			'public' => true,
		 * 			'exclude_from_search'       => true,
		 * 				'publicly_queryable'        => true,
		 * 				'show_in_nav_menus'         => false,
		 * 				'show_ui'                   => true,
		 * 			    'menu_icon' => 'dashicons-clipboard',
		 * 				'has_archive' => false,
		 * 			    'rewrite' => array( 'slug' => 'curso' ),
		 * 				'supports' => array(
		 * 				'title',
		 * 				'thumbnail',
		 * 			)
		 * 		);
		 * 
		 * 		if( function_exists('classifieds_get_option') ){
		 * 			$trans_ad = classifieds_get_option( 'trans_ad' );
		 * 			if( !empty( $trans_ad ) && $trans_ad !== 'curso' ){
		 * 				$curso_args['rewrite'] = array( 'slug' => $trans_ad );
		 * 			}
		 * 		}
		 * 
		 * 		 register_post_type( 'curso', $curso_args );
		*/

		$ad_args = array(
			'labels' => array(
				'name' => __( 'Distribuidores ', 'fibracem' ),
				'singular_name' => __( 'Distribuidor ', 'fibracem' )
			),

			'public' => true,
			'exclude_from_search'       => true,
				'publicly_queryable'        => true,
				'show_in_nav_menus'         => false,
				'show_ui'                   => true,
			'menu_icon' => 'dashicons-location-alt',
			'has_archive' => false,
			'rewrite' => array( 'slug' => 'distribuidor' ),
			'supports' => array(
				'title'
			)

		);

		if( function_exists('classifieds_get_option') ){
			$trans_ad = classifieds_get_option( 'trans_ad' );
			if( !empty( $trans_ad ) && $trans_ad !== 'distribuidor' ){
				$ad_args['rewrite'] = array( 'slug' => $trans_ad );
			}
		}

		register_post_type( 'distribuidor', $ad_args );

		

		$categ_pos_vendas = array(
			'label' => __( 'Estado', 'fibracem' ),
			'hierarchical' => true,
			'labels' => array(
				'name' 							=> __( 'Estados', 'fibracem' ),
				'singular_name' 				=> __( 'Estado', 'fibracem' ),
				'menu_name' 					=> __( 'Estados', 'fibracem' ),
				'all_items'						=> __( 'Todos os estados', 'fibracem' ),
				'edit_item'						=> __( 'Edita Estado', 'fibracem' ),
				'view_item'						=> __( 'Ver Estadof', 'fibracem' ),
				'update_item'					=> __( 'Atualizar Estado', 'fibracem' ),
				'add_new_item'					=> __( 'Adicionar Estado', 'fibracem' ),
				'new_item_name'					=> __( 'Novo Estado', 'fibracem' ),
				'parent_item'					=> __( 'Parent Estado', 'fibracem' ),
				'parent_item_colon'				=> __( 'Parent Estado:', 'fibracem' ),
				'search_items'					=> __( 'Buscar Estado', 'fibracem' ),
				'popular_items'					=> __( 'Popular Estado', 'fibracem' ),
				'separate_items_with_commas'	=> __( 'Separar Estados por virgula', 'fibracem' ),
				'add_or_remove_items'			=> __( 'Add ou remover Estado', 'fibracem' ),
				'choose_from_most_used'			=> __( 'Choose from the most used ad categories', 'fibracem' ),
				'not_found'						=> __( 'Nenhuma Categoria encontrada', 'fibracem' ),
			),
			'rewrite' => array( 'slug' => 'estado' )
		);

		if( function_exists('classifieds_get_option') ){
			$trans_ad_category = classifieds_get_option( 'trans_ad_category' );
			if( !empty( $trans_ad_category ) && $trans_ad_category !== 'estado' ){
				$ad_args['rewrite'] = array( 'slug' => $trans_ad_category );
			}
		}

		register_taxonomy( 'estado', array( 'distribuidor' ), $categ_pos_vendas );

		$categ_banners = array(
			'label' => __( 'Categoria', 'fibracem' ),
			'hierarchical' => true,
			'labels' => array(
				'name' 							=> __( 'Categorias', 'fibracem' ),
				'singular_name' 				=> __( 'Categoria', 'fibracem' ),
				'menu_name' 					=> __( 'Categorias', 'fibracem' ),
				'all_items'						=> __( 'Todos as Categorias', 'fibracem' ),
				'edit_item'						=> __( 'Editar Categoria', 'fibracem' ),
				'view_item'						=> __( 'Ver Categoria', 'fibracem' ),
				'update_item'					=> __( 'Atualizar Categoria', 'fibracem' ),
				'add_new_item'					=> __( 'Adicionar Categoria', 'fibracem' ),
				'new_item_name'					=> __( 'Novo Categoria', 'fibracem' ),
				'parent_item'					=> __( 'Parent Categoria', 'fibracem' ),
				'parent_item_colon'				=> __( 'Parent Categoria:', 'fibracem' ),
				'search_items'					=> __( 'Buscar Categoria', 'fibracem' ),
				'popular_items'					=> __( 'Popular Categoria', 'fibracem' ),
				'separate_items_with_commas'	=> __( 'Separar Categorias por virgula', 'fibracem' ),
				'add_or_remove_items'			=> __( 'Add ou remover Categoria', 'fibracem' ),
				'choose_from_most_used'			=> __( 'Choose from the most used ad categories', 'fibracem' ),
				'not_found'						=> __( 'Nenhuma Categoria encontrada', 'fibracem' ),
			),
			'rewrite' => array( 'slug' => 'categoria-banner' )
		);

		if( function_exists('classifieds_get_option') ){
			$trans_ad_category = classifieds_get_option( 'trans_ad_category' );
			if( !empty( $trans_ad_category ) && $trans_ad_category !== 'categoria-banner' ){
				$ad_args['rewrite'] = array( 'slug' => $trans_ad_category );
			}
		}

		register_taxonomy( 'categoria-banner', array( 'banner-home' ), $categ_banners );
	}
	add_action('init', 'fibracem_post_types_and_taxonomies', 0);
}

?>