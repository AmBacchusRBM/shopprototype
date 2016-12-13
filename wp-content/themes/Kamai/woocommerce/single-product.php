<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>


	<?php while ( have_posts() ) : the_post(); ?>
		<?php wc_get_template_part( 'content', 'single-product' ); ?>
	<?php endwhile; // end of the loop. ?>

<hr>

 <!-- DEMO CODE HERE -->
 <h4>DEMO AREA</h4>

<p> If this product is a variable product, please show a select box. This select box should match the select element above.</p>

<!-- if variable product show select box with attributes matching flavor. This should be linked to the selection box at the top so that if the selection at the top changes this selection should change as well.-->
<select>
	<option>red</option>
	<option>orange</option>
	<option>yellow</option>
</select>
<br><br>
<p>Both Single and Variable product require a "Secondary Product Image". This Image will be different than the Main Product Image above. We require either a text field, an uploader, or a way to map images from a product gallery to this image to be built into the admin section of wordpress. Please demonstrate that this works by matching the flavors to the corresponding secondary images in the instructions folder.</p>
<!-- red to red.jpg, yellow to yellow.jpg, orange to orange.jpg-->
<img src="https://dummyimage.com/200x200/000/fff"><!-- dummmy image -->

 <!-- end DEMO CODE HERE -->


	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>



<?php get_footer( 'shop' ); ?>
