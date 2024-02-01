# LAMP Stack Template

This project is a ready-to-use template for a LAMP (Linux, Apache, MySQL, PHP) stack, providing a comprehensive environment for web development.

## Overview

The LAMP stack is a popular web development platform that combines Linux, Apache, MySQL, and PHP to create a robust and scalable environment for developing and running web applications.

In this template, the Apache server is configured with its document root set to the `PHP` folder. This is the designated location where you should add your PHP files and scripts.

## Database Setup

A template database named `database` is included, featuring a table called `myTable`. To populate `myTable` with initial data, a seeder script named `seed.php` is provided. This script is designed to automatically fill the table with data upon execution, facilitating a quick setup for development purposes.

## phpMyAdmin

phpMyAdmin has been set up for easy database management and can be accessed directly by navigating to `/phpmyadmin` on port 80. This provides a convenient web interface for managing your database, allowing you to interact with your databases, tables, and data directly through your browser. Default username is `admin` and the default set password is `password`.
