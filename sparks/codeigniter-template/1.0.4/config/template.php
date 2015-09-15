<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = 'template/layout';

/**
 * default css
 */
$config['template_css'] = array(
    '/assets/css/index.css' => 'screen'
);

/**
 * default javascript
 * load javascript on header: FALSE
 * load javascript on footer: TRUE
 */
$config['template_js'] = array(
    'https://code.jquery.com/jquery-2.1.1.min.js' => FALSE,
    '/assets/javascript/index.js' => TRUE
);

/**
 * default variable
 */
$config['template_vars'] = array(
    'site_description' => 'TsungLin',
    'site_keywords' => 'TsungLin'
);

/**
 * default site title
 */
$config['base_title'] = 'TsungLin';

/**
 * default title separator
 */
$config['title_separator'] = ' | ';
