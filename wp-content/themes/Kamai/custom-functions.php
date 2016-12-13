<?php

/**
 * Note: Please add all custom code in this php file. 
 */


 

// Function for Adding fields 
function woo_add_custom_general_fields() {

  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  	// Custom fields will be created here...
	
	woocommerce_wp_textarea_input( 
		array( 
			'id'          => '_textarea', 
			'label'       => __( 'Product Hero Image', 'woocommerce' ), 
			'placeholder' => '', 
			'description' => __( 'Enter the url for Product Hero Image here.', 'woocommerce' ) 
		)
	);
	
	woocommerce_wp_textarea_input( 
		array( 
			'id'          => '_textarea_fetured_image', 
			'label'       => __( 'Product Featured Image Below Product Main Content', 'woocommerce' ), 
			'placeholder' => '', 
			'description' => __( 'Enter the url for Product Featured Image Below Product Main Content here.', 'woocommerce' ) 
		)
	);
  
	woocommerce_wp_textarea_input( 
		array( 
			'id'          => '_textarea_short_desc', 
			'label'       => __( 'Product Short Description', 'woocommerce' ), 
			'placeholder' => '', 
			'description' => __( 'Enter Product Short Description for below feature image here.', 'woocommerce' ) 
		)
	);
  
	woocommerce_wp_textarea_input( 
		array( 
			'id'          => '_textarea_marketing_detail', 
			'label'       => __( 'Product Marketing detail', 'woocommerce' ), 
			'placeholder' => '', 
			'description' => __( 'Enter Product Short Description for below feature image here.', 'woocommerce' ) 
		)
	);
  
  echo '</div>';
	
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );





/* This function is for saving custom fields */
function woo_add_custom_general_fields_save( $post_id ){
	

	// Textarea
	$woocommerce_textarea = $_POST['_textarea'];
	if( !empty( $woocommerce_textarea ) ){
		update_post_meta( $post_id, '_textarea', esc_html( $woocommerce_textarea ) );
	}

	// Textarea
	$woocommerce_textarea_featured_image = $_POST['_textarea_fetured_image'];
	if( !empty( $woocommerce_textarea_featured_image ) ){
		update_post_meta( $post_id, '_textarea_fetured_image', esc_html( $woocommerce_textarea_featured_image ) );
	}

	// Textarea
	$woocommerce_textarea_short_desc = $_POST['_textarea_short_desc'];
	if( !empty( $woocommerce_textarea_featured_image ) ){
		update_post_meta( $post_id, '_textarea_short_desc', esc_html( $woocommerce_textarea_short_desc ) );
	}

	// Textarea
	$woocommerce_textarea_marketing_detail = $_POST['_textarea_marketing_detail'];
	if( !empty( $woocommerce_textarea_featured_image ) ){
		update_post_meta( $post_id, '_textarea_marketing_detail', esc_html( $woocommerce_textarea_marketing_detail ) );
	}

		
 }

add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

/**
 * Note: PLEASE ADD VARITION CODE BENEATH THIS LINE
 */



?>