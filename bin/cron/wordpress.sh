#!/usr/bin/env bash

echo "Running WordPress Cronjob using the Heroku Scheduler ..."
export WP_CACHE=false

# Change to wordpress directory
cd $HOME/web/wp

# Execute the wordpress cronjob
php wp-cron.php
