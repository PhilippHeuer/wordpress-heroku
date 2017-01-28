# WordPress - Heroku Template
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ea24e1ba7dbf4845b94ddb23929b0fd1)](https://www.codacy.com/app/PhilippHeuer/wordpress-heroku?utm_source=github.com&utm_medium=referral&utm_content=PhilippHeuer/wordpress-heroku&utm_campaign=badger)
[![Discord](https://img.shields.io/badge/Join-Discord-7289DA.svg?style=flat-square)](https://discord.gg/JqUCaqY)
[![Deploy](https://img.shields.io/badge/Deploy-Heroku-7056BF.svg?style=flat-square)](https://heroku.com/deploy)

--------

## About:
This project is a template for installing and running [WordPress](http://wordpress.org/) on [Heroku](http://www.heroku.com/).

This project also uses a modern boilerplate for easy management of plugins. [Bedrock](https://roots.io/bedrock/) is a modern WordPress stack that helps you get started with the best development tools and project structure.

The heroku configuraiton in this project only uses free resources. You can upgrade those after deployment if needed.

## Technology
 * WordPress 4.7.2
 * Bedrock 1.7.5

## Table of Contents
- [Getting Started](#gettingstarted)
- [Changelog](CHANGELOG.md)

## Getting Started
#### Method 1: Deploy using the Heroku Badge
On the top of this readme there is a Heroku Deploy Badge, which can be clicked to
launch a new instance in Heroku.
All required extensions (MySQL DB) will be deployed automatically.
This also works if you fork your own project to work on your site.

#### Method 2: Deploy using Heroku CLI
Heroku offers a command line interface for easy deployments.

First you clone the repository onto your local drive, because you can only
deploy to heroku using git.
```bash
$ git clone https://github.com/PhilippHeuer/wordpress-heroku.git
```

Then you have to deploy the repository to heroku:
```bash
$ heroku create
```

Now you will have to install the addons:
```bash
$ heroku addons:create jawsdb-maria:kitefin
```

Now you can open your app using the following command. This will.
```bash
$ heroku open
```

## Changelog


## Features
 - [X] Better folder structure
 - [X] Dependency management with [Composer](http://getcomposer.org)
 - [X] Easy WordPress configuration with environment specific files
 - [X] Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
 - [X] Autoloader for mu-plugins (use regular plugins as mu-plugins)
 - [X] Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements

* PHP >= 7.0
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
