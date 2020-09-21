<?php

/* === === === === === === === === *\
|| Get files from /acf/ folder and include them
\* === === === === === === === === */

$acf_files = glob(get_template_directory() . '/acf/*.php');
foreach ($acf_files as $file) {
    require_once($file);
}

function my_acf_init()
{
    acf_update_setting('google_api_key', 'INSERT_API_KEY');
}

add_action('acf/init', 'my_acf_init');
