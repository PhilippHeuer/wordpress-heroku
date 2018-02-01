<?php
/**
 * Configuration - Plugin: S3 Uploads
 * @url: https://github.com/humanmade/S3-Uploads
 */
if (!empty(getenv('AWS_S3_URL'))) {
    $env = sscanf(getenv('AWS_S3_URL'), 's3://%[^:]:%[^@]@s3-%[^.].amazonaws.com/%s');

    define('S3_UPLOADS_AUTOENABLE', true);
    define('S3_UPLOADS_KEY', $env[0]);
    define('S3_UPLOADS_SECRET', $env[1]);
    define('S3_UPLOADS_REGION', $env[2]);
    define('S3_UPLOADS_BUCKET', $env[3]);

    unset($env);
} else {
    define('S3_UPLOADS_AUTOENABLE', false);
}

// S3 Uploads - Cache will expire after 30 days
define('S3_UPLOADS_HTTP_CACHE_CONTROL', 30 * 24 * 60 * 60);
