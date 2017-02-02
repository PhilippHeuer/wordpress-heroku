#!/usr/bin/env bash

echo "Running WordPress Cronjob using the Heroku Scheduler ..."
export WP_CACHE=false
cd $HOME

# Run cronjob using wp-cli
vendor/bin/wp cron event run --all
