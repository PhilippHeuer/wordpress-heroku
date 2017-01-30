# WordPress - Heroku Template
[![Build Status](https://travis-ci.org/PhilippHeuer/wordpress-heroku.svg?branch=master)](https://travis-ci.org/PhilippHeuer/wordpress-heroku)
[![Dependency Status](https://www.versioneye.com/user/projects/588d26251618a700318eb016/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/588d26251618a700318eb016)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ea24e1ba7dbf4845b94ddb23929b0fd1)](https://www.codacy.com/app/PhilippHeuer/wordpress-heroku?utm_source=github.com&utm_medium=referral&utm_content=PhilippHeuer/wordpress-heroku&utm_campaign=badger)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Discord](https://img.shields.io/badge/Join-Discord-7289DA.svg?style=flat-square)](https://discord.gg/JqUCaqY)

[![Deploy](https://img.shields.io/badge/Deploy-Heroku-7056BF.svg?style=flat-square)](https://heroku.com/deploy)

--------

## About:
This project is a template for installing and running [WordPress](http://wordpress.org/) on [Heroku](http://www.heroku.com/).

This project also uses a modern boilerplate for easy management of plugins. [Bedrock](https://roots.io/bedrock/) is a modern WordPress stack that helps you get started with the best development tools and project structure.

The heroku configuration in this project only uses free resources, but you can upgrade them after deployment.

## Dependency Versions
 * WordPress 4.7.2 (latest)
 * Bedrock 1.7.5 (latest)

## Table of Contents
- [Getting Started](#gettingstarted)
- [WIKI](https://github.com/PhilippHeuer/wordpress-heroku/wiki)
- [Changelog](https://github.com/PhilippHeuer/wordpress-heroku/blob/master/CHANGELOG.md)

## Getting Started
#### Method 1: Deploy using the Heroku Badge (suggested for evaluation)
On the top of this readme there is a Heroku Deploy Badge, which can be clicked to
launch a new instance in Heroku.
All required extensions (MySQL DB) will be deployed automatically.
This also works if you fork your own project to work on your site.

#### Method 2: Deploy using Heroku CLI (suggested for customization)
Heroku offers a command line interface for easy deployments.

First you clone the repository onto your local drive, because you can only
deploy to heroku using git.
```bash
$ git clone https://github.com/PhilippHeuer/wordpress-heroku.git
```

Now you can create a new application on heroku and link it to your current git repository.
```bash
$ heroku create
```

###### Configuration
You need to generate secrets to make your WordPress installation more secure:
You can generate random values using the [wordpress secret key api](https://api.wordpress.org/secret-key/1.1/salt/).

- On Windows
```bash
$ heroku config:set ^
    AUTH_KEY='SECRET' ^
    SECURE_AUTH_KEY='SECRET' ^
    LOGGED_IN_KEY='SECRET' ^
    NONCE_KEY='SECRET' ^
    AUTH_SALT='SECRET' ^
    SECURE_AUTH_SALT='SECRET' ^
    LOGGED_IN_SALT='SECRET' ^
    NONCE_SALT='SECRET'
```
- On Linux
```bash
$ heroku config:set \
    AUTH_KEY='SECRET' \
    SECURE_AUTH_KEY='SECRET' \
    LOGGED_IN_KEY='SECRET' \
    NONCE_KEY='SECRET' \
    AUTH_SALT='SECRET' \
    SECURE_AUTH_SALT='SECRET' \
    LOGGED_IN_SALT='SECRET' \
    NONCE_SALT='SECRET'
```

###### Addons
###### - SendGrid
You need an extension to send emails, since Heroku doesn't support this by default.
Please be aware that you need to provide Heroku with your credit card information to use SendGrid.
This does not cause any costs, you can still use this addon free of charge!
```bash
$ heroku addons:create sendgrid:starter
```

###### - Database
You can pick one of the three following options:
 - Maria Db
```bash
$ heroku addons:create jawsdb-maria:kitefin
```
 - MySQL
```bash
$ heroku addons:create cleardb:ignite
```
 - Custom Database

To use your own private database, you can provide a connection string in environment variables.
You need to open your Application in the Heroku Dashboard and visit Settings -> Reveal Config Vars.
You need to set the Key to "CUSTOM_DB_URL" and provide a connection string in the following format:
```sql
mysql://user:password@host:port/databaseName
```

###### Deploy / Update
Now you can deploy your project to heroku (or when you update your application):
```bash
$ git push heroku master
```

###### Open Application
Now you can open your app using the following command. This will open a new window in your browser.
```bash
$ heroku open
```

Congratulations, you have successfully installed WordPress on Heroku.
Please read the [WIKI](https://github.com/PhilippHeuer/wordpress-heroku/wiki) on how to customize your installation.

## Features
 - [x] Better folder structure
 - [x] Dependency management with [Composer](http://getcomposer.org)
 - [x] Easy WordPress configuration with environment variables from Heroku
 - [x] Autoloader for mu-plugins (use regular plugins as mu-plugins)
 - [x] Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements

* PHP >= 7.0
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
