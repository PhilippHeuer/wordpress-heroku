<?php
/**
 * Configuration - Plugin: Sendgrid
 * @url: https://wordpress.org/plugins/sendgrid-email-delivery-simplified/
 */
if (!empty(getenv('SENDGRID_USERNAME')) && !empty(getenv('SENDGRID_PASSWORD'))) {
    // Auth method ('credentials')
    define('SENDGRID_AUTH_METHOD', 'credentials');
    define('SENDGRID_USERNAME', getenv('SENDGRID_USERNAME'));
    define('SENDGRID_PASSWORD', getenv('SENDGRID_PASSWORD'));
} else if (!empty(getenv('SENDGRID_API_KEY'))) {
    // Auth method ('apikey')
    define('SENDGRID_AUTH_METHOD', 'apikey');
    define('SENDGRID_API_KEY', getenv('SENDGRID_API_KEY'));
}
