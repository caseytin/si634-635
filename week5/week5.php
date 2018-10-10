<?php

function week5_menu() {
    $items = array();

    $items['week5'] = array(
        'page callback' => 'week5_thing',
        'type' => MENU_NORMAL_ITEM,
        'access callback' => 'user_access',
        'access arguments' => array('use week5') //anything plural implies array
    );

    $items['week5/admin'] = array(
        'page callback' => 'week5_thing_admin',
        'type' => MENU_NORMAL_ITEM,
        'access callback' => 'user_access',
        'access arguments' => array('admin week5') //anything plural implies array
    );

    return $items;
}

function week5_thing() {
    $out = t("Hello!");
    if (user_access('admin week5')) $out .= t("You are an admin");
}

function week5_permission() {
    $perms = array();
    $perms['use week 5'] = array (
        'administer my module' => array(
            'title' => t('You can use week 5'),
            'description' => t('Perform user tasks for week5'),

        );
    $perms['admin week5'] = array(
        'administer my module' => array(
            'title' => t('You can admin week 5'),
            'description' => t('Perform administration tasks for week5'),

        );
    );
}