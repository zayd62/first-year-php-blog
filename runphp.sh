#!/bin/bash 
clear
# echo what php file to run?
# read varname

echo removing old data
rm -rf -v /var/www/html/* #removes files in test1

echo copying from directory script is in to /var/www/html
cp -R -v ./* /var/www/html

echo opening $varname in web browser
#xdg-open http://localhost/viewBlog.php
xdg-open http://localhost/addentry.html
#xdg-open http://localhost/login.html



