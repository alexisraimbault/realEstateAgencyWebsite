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
            'id' => '_terrain',
            'placeholder' => 'ex : 55',
            'label' => __('terrain (m2)', 'woocommerce'),
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
            'id' => '_nb_sdb',
            'placeholder' => '',
            'label' => __('nombre de salles de bain', 'woocommerce'),
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
            'id' => '_nb_toilettes',
            'placeholder' => '',
            'label' => __('nombre de toilettes', 'woocommerce'),
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

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_toilettes_separees',
            'placeholder' => '',
            'label' => __('toilettes séparées', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );
    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_cave',
            'placeholder' => '',
            'label' => __('cave', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_annee_de_construction',
            'placeholder' => '',
            'label' => __('année de construction', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_refait_a_neuf',
            'placeholder' => '',
            'label' => __('refait à neuf', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );
    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_parking',
            'placeholder' => '',
            'label' => __('parking', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_nb_boxes',
            'placeholder' => '',
            'label' => __('nombre de boxes parking', 'woocommerce'),
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
            'id' => '_nb_etages',
            'placeholder' => '',
            'label' => __('nombre étages', 'woocommerce'),
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
            'id' => '_nb_balcons',
            'placeholder' => '',
            'label' => __('nombre de balcons', 'woocommerce'),
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
            'id' => '_surface_balcons',
            'placeholder' => '',
            'label' => __('surface de balcons (m2)', 'woocommerce'),
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
            'id' => '_nb_terrasses',
            'placeholder' => '',
            'label' => __('nombre de terrasses', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_alarme',
            'placeholder' => '',
            'label' => __('alarme', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );
    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_chauffage',
            'placeholder' => 'ex : central électrique',
            'label' => __('type de chauffage', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_cable_tv',
            'placeholder' => '',
            'label' => __('cable tv', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_piscine',
            'placeholder' => '',
            'label' => __('piscine', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_monument_hist',
            'placeholder' => '',
            'label' => __('monument historique', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_comble_amenageable',
            'placeholder' => '',
            'label' => __('comble aménageable', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_lot_neuf',
            'placeholder' => '',
            'label' => __('lot neuf', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_cheminee',
            'placeholder' => '',
            'label' => __('cheminée', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_vue',
            'placeholder' => '',
            'label' => __('vue', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_entree',
            'placeholder' => '',
            'label' => __('entrée', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_parquet',
            'placeholder' => '',
            'label' => __('parquet', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_placard',
            'placeholder' => '',
            'label' => __('placard', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_vis_a_vis',
            'placeholder' => '',
            'label' => __('vis-à-vis', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_calme',
            'placeholder' => '',
            'label' => __('calme', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Oui', 'woocommerce' ),
              'n' => __( 'Non', 'woocommerce' )
            )
        )
    );

    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_type_architecture',
            'placeholder' => 'ex : haussmanien, brique, ...',
            'label' => __('type d architecture', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_type_cuisine',
            'placeholder' => 'ex : américaine équipée, industrielle, ...',
            'label' => __('type de cuisine', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_orientation',
            'placeholder' => '',
            'label' => __('orientation', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'n' => __( 'Nord', 'woocommerce' ),
              's' => __( 'Sud', 'woocommerce' ),
              'e' => __( 'Est', 'woocommerce' ),
              'w' => __( 'Ouest', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_situation',
            'placeholder' => '',
            'label' => __('situation', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'mont' => __( 'Montagne', 'woocommerce' ),
              'mer' => __( 'Mer', 'woocommerce' ),
              'camp' => __( 'Campagne', 'woocommerce' ),
              'ville' => __( 'Ville', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_carac_dpe',
            'placeholder' => '',
            'label' => __('Caractéristique du DPE', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'o' => __( 'Soumis au DPE', 'woocommerce' ),
              'n' => __( 'Non soumis au DPE', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_conso_energetique',
            'placeholder' => '',
            'label' => __('Consommations énergétiques en kWhEP/m²/an', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'A' => __( '50', 'woocommerce' ),
              'B' => __( '51 à 90', 'woocommerce' ),
              'C' => __( '91 à150', 'woocommerce' ),
              'D' => __( '151 à 230', 'woocommerce' ),
              'E' => __( '231 à 330', 'woocommerce' ),
              'F' => __( '331 à 450', 'woocommerce' ),
              'G' => __( '> 450', 'woocommerce' )
            )
        )
    );

    //Custom Product Select Field
    woocommerce_wp_select(
        array(
            'id' => '_gaz_effet_de_serre',
            'placeholder' => '',
            'label' => __('Emissions de gaz à effet de serre (GES) en kgeqCO2/m2/an', 'woocommerce'),
            'options' => array(
              'nc' => __( '-', 'woocommerce' ),
              'A' => __( '5', 'woocommerce' ),
              'B' => __( '6 à 10', 'woocommerce' ),
              'C' => __( '11 à 20', 'woocommerce' ),
              'D' => __( '21 à 35', 'woocommerce' ),
              'E' => __( '36 à 55', 'woocommerce' ),
              'F' => __( '56 à 80', 'woocommerce' ),
              'G' => __( '> 80', 'woocommerce' )
            )
        )
    );

    //Custom Product Checkbox Field
    woocommerce_wp_checkbox(
       array(
           'id'          => '_exclu',
           'placeholder' => '',
           'label'       => __('exclusivité', 'woocommerce'),
           'desc_tip'    => 'true'
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
    $woocommerce_superficie = $_POST['_terrain'];
    if (!empty($woocommerce_terrain))
        update_post_meta($post_id, '_terrain', esc_attr($woocommerce_terrain));

// Custom Product Number Field
    $woocommerce_superficie = $_POST['_nb_sdb'];
    if (!empty($woocommerce_nb_sdb))
        update_post_meta($post_id, '_nb_sdb', esc_attr($woocommerce_nb_sdb));

// Custom Product Number Field
    $woocommerce_superficie = $_POST['_nb_toilettes'];
    if (!empty($woocommerce_nb_toilettes))
        update_post_meta($post_id, '_nb_toilettes', esc_attr($woocommerce_nb_toilettes));

// Custom Product Number Field
    $woocommerce_superficie = $_POST['_toilettes_separees'];
    if (!empty($woocommerce_toilettes_separees))
        update_post_meta($post_id, '_toilettes_separees', esc_attr($woocommerce_toilettes_separees));

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

// Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

// Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

// Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

    // Custom Product Textarea Field
    $woocommerce_description = $_POST['_description'];
    if (!empty($woocommerce_description))
      update_post_meta($post_id, '_description', esc_attr($woocommerce_description));

}
?>
