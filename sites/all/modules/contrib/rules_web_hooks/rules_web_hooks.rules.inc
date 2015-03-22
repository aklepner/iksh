<?php

/**
 * @file
 * Rules Web Hooks - Rules integration.
 */


/**
 * Implements hook_rules_action_info().
 */
function rules_web_hooks_rules_action_info() {
  $return = array();
  foreach (entity_load('rules_web_hook', FALSE) as $name => $hook) {
    $return['web_hook_invoke_' . $name] = array(
      'label' => t('Invoke "@label"', array('@label' => $hook->label)),
      'named parameter' => TRUE,
      'group' => t('Rules web hook'),
      'base' => 'rules_web_hooks_action_invoke',
      'parameter' => $hook->variables,
    );
  }
  return $return;
}

/**
 * Action callback: Invoke a web hook.
 */
function rules_web_hooks_action_invoke($args, RulesAbstractPlugin $element) {
  $hook = rules_web_hooks_load(substr($element->getElementName(), 16));
  // Use the args in the state so we can reuse existing rules data wrapper.
  $vars = array_intersect_key($args['state']->currentArguments, $hook->variables);
  rules_web_hooks_invoke($hook, $vars);
}
