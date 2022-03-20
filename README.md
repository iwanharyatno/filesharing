## FILE SHARING

A single-paged website with simple file upload functionality that can be used to transfer file from your smartphone to your Computer via Local Network. And really this project is nothing more than a simple file upload system with php and javascript.

## INSTALLATION

As I've mentioned before, this project is the same as other web projects, so you can follow this procedure to view and use this website on your local machine (because there's no place like 127.0.0.1 ).

1. First, you can clone this repository into your server's document root directory.
2. Then `cd` to the root of this project folder and create a new directory named `shared`. Then the project directory structure would looked like this.
```
filesharing/
    index.html
    README.md
    script.js
    shared/
    style.css
    upload.php
```
    The `shared` folder will be used to store the uploaded files. Make sure the `shared` folder is writeable.

#### php.ini file configuration

There are some configurations to do on your `php.ini` server file configuration before this website can work properly. Locate your loaded `php.ini` configuration file and make sure these variables are configured as follow.
```
file_uploads = On
upload_max_filesize = 1G ; or any value depends on what you need.
post_max_size = 4G ; must be larger than upload_max_filesize.
memory_limit = 64G; Maximum amount of memory a script may consume, again this depends on what your need.
```
