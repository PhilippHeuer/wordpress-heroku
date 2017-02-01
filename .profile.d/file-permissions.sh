#!/usr/bin/env bash

# Sets WordPress file permissions for a secure environment

# - create folders
mkdir -p $HOME/web/app/uploads

# - deny write on everything
chmod -R a-w $HOME/web

# - allow write to web/app/uploads
chmod -R u+w $HOME/web/app/uploads
