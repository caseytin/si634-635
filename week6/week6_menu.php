<?php

function week6_menu() {
    $items = array();
    $item['week6'] = array(
        'page callback' => 'week6_demo',
        'access callback' => TRUE,
        'title' => 'Week 6'
    );
    return $items;
}

function week6_demo() {
    return drupal_get_form('week6_form_a');
}

function week6_form_a($form) {
    $form = array();
    //What is your name? -- one line text field
    $form['name'] = array (
        '#type' => 'textField',
        '#title' => t('Name'),
    );
    //What is your favorite color? -- dropdown of rgb
    $form['age'] = array (
        '#type' => 'select',
        '#title' => t("Favorite Color"),

    );
    //What is your age? -- text field must be number
    $form['color'] = array (
        '#type' => '',
        '#title' => t("What is your age"),
        '#options' => array(
            '--select--' => t("Choose one"),
            'blue' => t("Blue"),
            'green' => t("Green"),
            'red' => t("Red")
        )
    );

    $form['submit'] = array (
        '#type' => 'submit',
        '#value' => 'submit'
    );

    return $form;
}