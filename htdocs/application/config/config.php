<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$config['base_url'] = '';
$config['stikked_version'] = '0.13.0';
$config['index_page'] = '';
$config['uri_protocol'] = 'AUTO';
$config['url_suffix'] = '';
$config['language'] = 'english';    #this is configured in config/stikked.php
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = true;
$config['subclass_prefix'] = 'MY_';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['allow_get_array'] = true;
$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd'; // experimental not currently in use
$config['log_threshold'] = 1;
$config['log_path'] = '';
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = '';
$config['encryption_key'] = '';
$config['sess_driver'] = 'database';
$config['sess_cookie_name'] = 'stikked';
$config['sess_expiration'] = 60 * 60 * 24 * 1;
$config['sess_save_path'] = 'sessions';
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;
$config['cookie_prefix'] = '';
$config['cookie_domain'] = '';
$config['cookie_path'] = '/';
$config['cookie_secure'] = true;
$config['cookie_httponly'] = false;
$config['global_xss_filtering'] = false;
$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['compress_output'] = false;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = false;
$config['proxy_ips'] = '*';
$config['favorite_languages'] = array(
    'text',
    'html5',
    'css',
    'javascript',
    'php',
    'python',
    'ruby',
    'lua',
    'bash',
    'erlang',
    'go',
    'c',
    'cpp',
    'diff',
    'latex',
    'sql',
    'xml'
);

/* End of file config.php */
/* Location: ./application/config/config.php */
