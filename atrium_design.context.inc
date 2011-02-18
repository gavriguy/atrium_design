<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function atrium_design_context_default_contexts() {
  $export = array();
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'design_listing';
  $context->description = '';
  $context->tag = 'Design';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'design' => 'design',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
    'views' => array(
      'values' => array(
        'design_listing' => 'design_listing',
      ),
    ),
  );
  $context->reactions = array(
    'menu' => 'design',
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Design');

  $export['design_listing'] = $context;
  return $export;
}
