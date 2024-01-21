# About repository KiltedViking/kiltedviking-net #

This repository contains my personal website, kiltedviking.net, and has been shared publicly, should somebody want to know how I designed the site using the different front-end frameworks and libraries - CSS and/or JavaScript.

But the main reason for adding site to repostiory is to keep track of its code and a reason for me to learn more about Git. ;-)

My site is in both English and Swedish - mostly the latter. The Swedish content is found in the folder /se and subfolders.

/Björn G. D. Persson, "Kilted Viking"

https://wwww.kiltedviking.net

## CSS front-end frameworks used

To test CSS front-end frameworks, I've designed some parts of my website using frameworks below.

Bootstrap (v.3) - `/`

Bootstrap (v.5) - `/walks/`

Foundation - `/se/www/javascript/`

Materialize - `/se/www/html/`

Milligram - `/se/www/php/`

Primer CSS - `/se/www/java/`

Semantic UI - `/se/www/jquery/`

Skeleton - `/se/www/css/`

UIkit - `/se/www/seo/`

# Set up

I test my website using Bitnami's WAMP (no longer available?) or Apache Friends' XAMPP, which contains Apache, MySQL/MariaDB and PHP (and more).

[Apache Friendsä official site](https://www.apachefriends.org/)

Download and copy frameworks and libraries to folders listed in sections below. Please
note versions of frameworks and libraries - newer (or older ;-)) might break the
little design my pages have.

## CSS (including JavaScript?)

Copy files to "CSS folder", "Font folder" and "JavaScript folder", which usually are `/css`, `/fonts` and `/js`, respectivly, except if noted below each framework and library.

### Bootstrap 3.4.1

Copy `*.css` files to "CSS folder", any (?) font files (`*.eot`, `*.svg`, `*.ttf`, `*.woff` and `*.woff2`) to "Font folder" and `*.js` files to "JavaScript folder".

`/css`

`/fonts`

`/js`

For educational site - Björn's studiewebb - also copy to corresponding folders under
`/se/www/`.

### Bootstrap 5.2.3 

With version 3 already installed in "CSS and JavaScript folders", version 5 files have been placed in a subfolder with major version in its name (`bootstrap5`). (And version 5.3 contains some changes to navbars, which I haven't had time to test before upgrading from 5.2.)

`/css/bootstrap5`

`/js/bootstrap5`


### Bootstrap Icons 1.11.1

Copy `*css` to "CSS folder", `*.woff?` to subfolder of "CSS folder" and `*.svg` files to "image folder".

`/css`

`/css/fonts`

`/images/bootstrap-icons-1.11.1`

### Font Awesome 4.7.0

Copy `*css` to "CSS folder" and `*.eot`, `*.svg`, `*.ttf` and `*.woff?` files to "Font folder".

`/css`

`/fonts`

## JavaScript (inkluding CSS?)

Copy `*.css` files to "CSS folder" and `*.js` files to "JavaScript folder".

### Ekko LightBox 5.3.0

[Official site](https://github.com/ashleydw/lightbox) 

This library is built on Bootstrap version 3 and seems to no longer be maintained (since 2017).

`/css`

`/js`

### jQuery 3.1.1, 3.4.1, 3.6.1 and 3.7.1

Unfortunately I included version of library in filenames, which has resulted in my site being dependant on old versions until I find and change all references. :-S

`/js`

### jQuery rBox

https://github.com/batpad/jquery-rbox

`/css`

`/js`

