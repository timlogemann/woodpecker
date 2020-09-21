<?php

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'page',
        'title' => 'page',
        'fields' => array(
            /* Start writing your custom fields here */),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
    ));
}
