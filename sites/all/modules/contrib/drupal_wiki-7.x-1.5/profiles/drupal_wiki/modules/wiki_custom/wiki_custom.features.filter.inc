<?php
/**
 * @file
 * wiki_custom.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function wiki_custom_filter_default_formats() {
  $formats = array();

  // Exported format: Wiki text.
  $formats['wiki_text'] = array(
    'format' => 'wiki_text',
    'name' => 'Wiki text',
    'cache' => '1',
    'status' => '1',
    'weight' => '-10',
    'filters' => array(
      'edit_section_filter' => array(
        'weight' => '-50',
        'status' => '1',
        'settings' => array(),
      ),
      'freelinking' => array(
        'weight' => '-49',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_footnotes' => array(
        'weight' => '-48',
        'status' => '1',
        'settings' => array(
          'footnotes_collapse' => 0,
        ),
      ),
      'filter_html' => array(
        'weight' => '-47',
        'status' => '1',
        'settings' => array(
          'allowed_html' => '<a> <em> <strong> <cite> <blockquote> <code> <ul> <ol> <li> <dl> <dt> <dd> <br> <p> <h1> <h2> <h3> <h4> <h6> <div> <table> <tbody> <tr> <td>',
          'filter_html_help' => 1,
          'filter_html_nofollow' => 1,
        ),
      ),
      'filter_autop' => array(
        'weight' => '-46',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_htmlcorrector' => array(
        'weight' => '-45',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
