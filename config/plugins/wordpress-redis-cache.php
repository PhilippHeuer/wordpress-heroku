<?php
/**
* Configuration - Plugin: Redis
* @url: https://wordpress.org/plugins/redis-cache/
*/
if (!empty(getenv('REDIS_URL'))) {
    $env = parse_url(getenv('REDIS_URL'));

    putenv('WP_CACHE=true');
    define('WP_REDIS_CLIENT', 'predis');
    define('WP_REDIS_SCHEME', $env['scheme']);
    define('WP_REDIS_HOST', $env['host']);
    define('WP_REDIS_PORT', $env['port']);
    define('WP_REDIS_PASSWORD', $env['pass']);

    // 28 Days
    define('WP_REDIS_MAXTTL', 2419200);

    unset($env);
}

// PRedis Load (object-cache path broken, because of mu-plugins
if(file_exists($webroot_dir."/app/mu-plugins/redis-cache") && !file_exists($webroot_dir."/app/object-cache.php")) {
    require_once($webroot_dir."/app/mu-plugins/redis-cache/includes/predis.php");
    copy($webroot_dir."/app/mu-plugins/redis-cache/includes/object-cache.php", $webroot_dir."/app/object-cache.php");
}
