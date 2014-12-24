<?php

/**
 * @file
 * template.php
 */


/**
 * Custom template files for user login and registration pages
 */

function stirrings_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'stirrings') . '/templates',
  // define file name
  'template' => 'user-login',
  'preprocess functions' => array(
  'stirrings_preprocess_user_login'
  ),
);
return $items;
}

function stirrings_preprocess_html(&$variables){
// This function looks for node 1 and only adds the javascript for this.
// However it can be extended in different ways if required
    if ($variables['node']['nid'] = 1){
        drupal_add_js('misc/form.js');
        drupal_add_js('misc/collapse.js');
    }
}
