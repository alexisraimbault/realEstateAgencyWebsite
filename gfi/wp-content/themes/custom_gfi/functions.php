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
              'C' => __( '91 à 150', 'woocommerce' ),
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
    $woocommerce_terrain = $_POST['_terrain'];
    if (!empty($woocommerce_terrain))
        update_post_meta($post_id, '_terrain', esc_attr($woocommerce_terrain));

// Custom Product Number Field
    $woocommerce_nb_sdb = $_POST['_nb_sdb'];
    if (!empty($woocommerce_nb_sdb))
        update_post_meta($post_id, '_nb_sdb', esc_attr($woocommerce_nb_sdb));

// Custom Product Number Field
    $woocommerce_nb_toilettes = $_POST['_nb_toilettes'];
    if (!empty($woocommerce_nb_toilettes))
        update_post_meta($post_id, '_nb_toilettes', esc_attr($woocommerce_nb_toilettes));

// Custom Product Number Field
    $woocommerce_toilettes_separees = $_POST['_toilettes_separees'];
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
    $woocommerce_cave = $_POST['_cave'];
    if (!empty($woocommerce_cave))
      update_post_meta($post_id, '_cave', esc_attr($woocommerce_cave));

// Custom Product Textarea Field
    $woocommerce_annee_de_construction = $_POST['_annee_de_construction'];
    if (!empty($woocommerce_annee_de_construction))
      update_post_meta($post_id, '_annee_de_construction', esc_attr($woocommerce_annee_de_construction));

    // Custom Product Textarea Field
    $woocommerce_refait_a_neuf = $_POST['_refait_a_neuf'];
    if (!empty($woocommerce_refait_a_neuf))
      update_post_meta($post_id, '_refait_a_neuf', esc_attr($woocommerce_refait_a_neuf));

    // Custom Product Textarea Field
    $woocommerce_parking = $_POST['_parking'];
    if (!empty($woocommerce_parking))
      update_post_meta($post_id, '_parking', esc_attr($woocommerce_parking));

    // Custom Product Textarea Field
    $woocommerce_nb_boxes = $_POST['_nb_boxes'];
    if (!empty($woocommerce_nb_boxes))
      update_post_meta($post_id, '_nb_boxes', esc_attr($woocommerce_nb_boxes));

    // Custom Product Textarea Field
    $woocommerce_nb_etages = $_POST['_nb_etages'];
    if (!empty($woocommerce_nb_etages))
      update_post_meta($post_id, '_nb_etages', esc_attr($woocommerce_nb_etages));

    // Custom Product Textarea Field
    $woocommerce_nb_balcons = $_POST['_nb_balcons'];
    if (!empty($woocommerce_nb_balcons))
      update_post_meta($post_id, '_nb_balcons', esc_attr($woocommerce_nb_balcons));

    // Custom Product Textarea Field
    $woocommerce_surface_balcons = $_POST['_surface_balcons'];
    if (!empty($woocommerce_surface_balcons))
      update_post_meta($post_id, '_surface_balcons', esc_attr($woocommerce_surface_balcons));

    // Custom Product Textarea Field
    $woocommerce_nb_terrasses = $_POST['_nb_terrasses'];
    if (!empty($woocommerce_nb_terrasses))
      update_post_meta($post_id, '_nb_terrasses', esc_attr($woocommerce_nb_terrasses));

    // Custom Product Textarea Field
    $woocommerce_alarme = $_POST['_alarme'];
    if (!empty($woocommerce_alarme))
      update_post_meta($post_id, '_alarme', esc_attr($woocommerce_alarme));

    // Custom Product Textarea Field
    $woocommerce_chauffage = $_POST['_chauffage'];
    if (!empty($woocommerce_chauffage))
      update_post_meta($post_id, '_chauffage', esc_attr($woocommerce_chauffage));

    // Custom Product Textarea Field
    $woocommerce_cable_tv = $_POST['_cable_tv'];
    if (!empty($woocommerce_cable_tv))
      update_post_meta($post_id, '_cable_tv', esc_attr($woocommerce_cable_tv));

    // Custom Product Textarea Field
    $woocommerce_piscine = $_POST['_piscine'];
    if (!empty($woocommerce_piscine))
      update_post_meta($post_id, '_piscine', esc_attr($woocommerce_piscine));

    // Custom Product Textarea Field
    $woocommerce_monument_hist = $_POST['_monument_hist'];
    if (!empty($woocommerce_monument_hist))
      update_post_meta($post_id, '_monument_hist', esc_attr($woocommerce_monument_hist));

    // Custom Product Textarea Field
    $woocommerce_comble_amenageable = $_POST['_comble_amenageable'];
    if (!empty($woocommerce_comble_amenageable))
      update_post_meta($post_id, '_comble_amenageable', esc_attr($woocommerce_comble_amenageable));

    // Custom Product Textarea Field
    $woocommerce_lot_neuf = $_POST['_lot_neuf'];
    if (!empty($woocommerce_lot_neuf))
      update_post_meta($post_id, '_lot_neuf', esc_attr($woocommerce_lot_neuf));

    // Custom Product Textarea Field
    $woocommerce_cheminee = $_POST['_cheminee'];
    if (!empty($woocommerce_cheminee))
      update_post_meta($post_id, '_cheminee', esc_attr($woocommerce_cheminee));

    // Custom Product Textarea Field
    $woocommerce_vue = $_POST['_vue'];
    if (!empty($woocommerce_vue))
      update_post_meta($post_id, '_vue', esc_attr($woocommerce_vue));

    // Custom Product Textarea Field
    $woocommerce_entree = $_POST['_entree'];
    if (!empty($woocommerce_entree))
      update_post_meta($post_id, '_entree', esc_attr($woocommerce_entree));

    // Custom Product Textarea Field
    $woocommerce_parquet = $_POST['_parquet'];
    if (!empty($woocommerce_parquet))
      update_post_meta($post_id, '_parquet', esc_attr($woocommerce_parquet));

    // Custom Product Textarea Field
    $woocommerce_placard = $_POST['_placard'];
    if (!empty($woocommerce_placard))
      update_post_meta($post_id, '_placard', esc_attr($woocommerce_placard));

    // Custom Product Textarea Field
    $woocommerce_vis_a_vis = $_POST['_vis_a_vis'];
    if (!empty($woocommerce_vis_a_vis))
      update_post_meta($post_id, '_vis_a_vis', esc_attr($woocommerce_vis_a_vis));

    // Custom Product Textarea Field
    $woocommerce_calme = $_POST['_calme'];
    if (!empty($woocommerce_calme))
      update_post_meta($post_id, '_calme', esc_attr($woocommerce_calme));

    // Custom Product Textarea Field
    $woocommerce_type_architecture = $_POST['_type_architecture'];
    if (!empty($woocommerce_type_architecture))
      update_post_meta($post_id, '_type_architecture', esc_attr($woocommerce_type_architecture));

    // Custom Product Textarea Field
    $woocommerce_type_cuisine = $_POST['_type_cuisine'];
    if (!empty($woocommerce_type_cuisine))
      update_post_meta($post_id, '_type_cuisine', esc_attr($woocommerce_type_cuisine));

    // Custom Product Textarea Field
    $woocommerce_orientation = $_POST['_orientation'];
    if (!empty($woocommerce_orientation))
      update_post_meta($post_id, '_orientation', esc_attr($woocommerce_orientation));

    // Custom Product Textarea Field
    $woocommerce_situation = $_POST['_situation'];
    if (!empty($woocommerce_situation))
      update_post_meta($post_id, '_situation', esc_attr($woocommerce_situation));

    // Custom Product Textarea Field
    $woocommerce_carac_dpe = $_POST['_carac_dpe'];
    if (!empty($woocommerce_carac_dpe))
      update_post_meta($post_id, '_carac_dpe', esc_attr($woocommerce_carac_dpe));

    // Custom Product Textarea Field
    $woocommerce_conso_energetique = $_POST['_conso_energetique'];
    if (!empty($woocommerce_conso_energetique))
      update_post_meta($post_id, '_conso_energetique', esc_attr($woocommerce_conso_energetique));

    // Custom Product Textarea Field
    $woocommerce_gaz_effet_de_serre = $_POST['_gaz_effet_de_serre'];
    if (!empty($woocommerce_gaz_effet_de_serre))
      update_post_meta($post_id, '_gaz_effet_de_serre', esc_attr($woocommerce_gaz_effet_de_serre));

    // Custom Product Textarea Field
    $woocommerce_exclu = $_POST['_exclu'];
      update_post_meta($post_id, '_exclu', esc_attr($woocommerce_exclu));
}
?>
