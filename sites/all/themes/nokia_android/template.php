<?php

/**
 * Implements theme_preprocess_region
 * Preprocess variables for region.tpl.php
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
function nokia_android_preprocess_region(&$variables, $hook) {
    switch ($variables['region']) {
        case "top_actions_bar":
             array_unshift($variables['theme_hook_suggestions'], 'region__top_actions_bar');
            break;
        case "top_nav_bar":
            array_unshift($variables['theme_hook_suggestions'], 'region__top_nav_bar');
            break;
        
    }
  
}

/** Nokia Android related theme **/
/**
 * Implements theme_block_view_alter
 * @param type $data
 * @param type $block 
 */
function nokia_android_block_view_alter(&$data, $block){
    if(strcmp($block->delta,'nk_an_top_menu')==0){
       //test($data,FALSE);
       unset($data['subject']);
      
    }
}
/**
 * Implements theme_menu_tree_MENU_NAME
 * @param type $variables
 * @return type 
 */
function nokia_android_menu_tree__nk_an_top_menu($variables){
    return '<ul class="menu nav navbar-nav" id="nk-an-top-menu-custom-id">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_preprocess_menu_link().
 */
function nokia_android_preprocess_menu_link(&$variables, $hook) {
  foreach ($variables['element']['#attributes']['class'] as $key => $class) {
    switch ($class) {
      // Menu module classes.
      case 'expanded':
      case 'collapsed':
      case 'leaf':
           array_unshift($variables['element']['#attributes']['class'], 'is-'.$class);
        break;
      case 'active':
      // Menu block module classes.
        break;
      case 'active-trail':
        array_unshift($variables['element']['#attributes']['class'], 'active');
        break;
      case 'has-children':
        array_unshift($variables['element']['#attributes']['class'], 'is-parent');
        break;
    }
  }
  array_unshift($variables['element']['#attributes']['class'], 'menu__item');
  if (empty($variables['element']['#localized_options']['attributes']['class'])) {
    $variables['element']['#localized_options']['attributes']['class'] = array();
  }
  else {
    foreach ($variables['element']['#localized_options']['attributes']['class'] as $key => $class) {
      switch ($class) {
        case 'active':
        case 'active-trail':
          array_unshift($variables['element']['#localized_options']['attributes']['class'], 'is-' . $class);
          break;
      }
    }
  }
  array_unshift($variables['element']['#localized_options']['attributes']['class'], 'menu__link');
}
/** Nokia Android related theme **/

?>