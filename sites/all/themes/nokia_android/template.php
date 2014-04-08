<?php

/**
 * Preprocess variables for region.tpl.php
 *
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

?>