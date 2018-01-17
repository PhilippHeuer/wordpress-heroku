<?php
/**
 * Configuration - Database: Heroku Bucketeer
 * @url: https://elements.heroku.com/addons/bucketeer
 */
if (!empty(getenv('BUCKETEER_AWS_ACCESS_KEY_ID'))) {
    $region = !empty(getenv('BUCKETEER_AWS_REGION')) ? "s3-" + getenv('BUCKETEER_AWS_REGION') + ".amazonaws.com" : "s3.amazonaws.com";
    putenv(sprintf('AWS_S3_URL=s3://%s:%s@%s/%s', getenv("BUCKETEER_AWS_ACCESS_KEY_ID"), getenv("BUCKETEER_AWS_SECRET_ACCESS_KEY"), $region, getenv("BUCKETEER_BUCKET_NAME")));
}
