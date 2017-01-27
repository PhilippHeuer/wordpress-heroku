# WordPress - Heroku Template
[![Discord](https://img.shields.io/badge/Join-Discord-7289DA.svg?style=flat-square)](https://discord.gg/JqUCaqY)
[![Deploy](https://img.shields.io/badge/Deploy-Heroku-7056BF.svg?style=flat-square)](https://heroku.com/deploy)

--------

## About:
This project is a template for installing and running [WordPress](http://wordpress.org/) on [Heroku](http://www.heroku.com/).

This project also uses a modern boilerplate for easy management of plugins. [Bedrock](https://roots.io/bedrock/) is a modern WordPress stack that helps you get started with the best development tools and project structure.

## Technology
 * WordPress 4.7.2
 * Bedrock 1.7.5

## Table of Contents
- [Getting Started](#gettingstarted)
- [Changelog](CHANGELOG.md)

## Getting Started
```bash
$ git clone https://github.com/PhilippHeuer/wordpress-heroku.git
$ heroku create
$ heroku addons:create heroku-postgresql
$ heroku addons:create sendgrid:starter
```

## Features

* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements

* PHP >= 5.6
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation


## Deploys
