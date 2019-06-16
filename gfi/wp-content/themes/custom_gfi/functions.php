<?php
// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');
// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');
function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
    echo '<div class="product_custom_field">';
    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_ville',
            'placeholder' => 'ex : Montreuil(93100)',
            'label' => __('ville', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_superficie',
            'placeholder' => 'ex : 55',
            'label' => __('superficie (m2)', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_nb_pieces',
            'placeholder' => '',
            'label' => __('nombre de pieces', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_nb_chambres',
            'placeholder' => '',
            'label' => __('nombre de chambres', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product  Textarea
    woocommerce_wp_textarea_input(
        array(
            'id' => '_description',
            'placeholder' => '',
            'label' => __('description', 'woocommerce')
        )
    );
    echo '</div>';
}

function woocommerce_product_custom_fields_save($post_id)
{
    // Custom Product Text Field
    $woocommerce_ville = $_POST['_ville'];
    if (!empty($woocommerce_ville))
        update_post_meta($post_id, '_ville', esc_attr($woocommerce_ville));
// Custom Product Number Field
    $woocommerce_superficie = $_POST['_superficie'];
    if (!empty($woocommerce_superficie))
        update_post_meta($post_id, '_superficie', esc_attr($woocommerce_superficie));
// Custom Product Number Field
    $woocommerce_nb_pieces = $_POST['_nb_pieces'];
    if (!empty($woocommerce_nb_pieces))
        update_post_meta($post_id, '_nb_pieces', esc_attr($woocommerce_nb_pieces));
// Custom Product Number Field
    $woocommerce_nb_chambres = $_POST['_nb_chambres'];
    if (!empty($woocommerce_nb_chambres))
        update_post_meta($post_id, '_nb_chambres', esc_attr($woocommerce_nb_chambres));
// Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
        update_post_meta($post_id, '_description', esc_html($woocommerce_description));
}
?>
