<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "kushit" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "kushit".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */

function kushit_preprocess_html(&$vars) {
  global $theme_key;
	
  if(arg(3) == 'reviews') {
  	$vars['classes_array'][] = 'reviews';
  }
  
   if ($vars['user']) {
    foreach($vars['user']->roles as $key => $role){
      $role_class = 'role-' . str_replace(' ', '-', $role);
      $vars['classes_array'][] = $role_class;
    }
  }
  

}


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function kushit_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function kushit_preprocess_page(&$vars) {
}
function kushit_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function kushit_preprocess_node(&$vars) {
}
function kushit_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function kushit_preprocess_comment(&$vars) {
}
function kushit_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function kushit_preprocess_block(&$vars) {
}
function kushit_process_block(&$vars) {
}
// */