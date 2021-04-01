Hi:

## Project Description

“Share it!”
1. Any user can register and start sharing their files.
2. Immediately after registration the user should see the button
   "Upload file". After clicking on this button, the user should be
   redirected to the page with the file upload form.
3. The form is represented by one single field - <input type="file">.
   The uploaded file must be no more than 10Mb and must not have
   the .exe, .bmp or .php extensions.
4. After successful uploading of the file, the user should be given a
   unique short link to the file like “http://domain.com/1bh0k2I”. He
   can share it with other users. When clicking on this link, application
   should show a page with information about the file (the original
   name and time of upload), as well as the ability to download it.
   Regardless of whether the user is authorized or not.
5. A registered user should be able to view the list of files uploaded
   by him, as well as the possibility to delete them. It should be
   available by clicking on the "My files" button. Application should
   also count the number of downloads of files.

### Requirements:
- Technologies: PHP, MySQL, JS, CSS, HTML
- Libraries: Laravel 6.x, Twitter Bootstrap or Material, jQuery
- Using of migration for the database
- The result of the work should be published through Git (GitHub /BitBucket)

## Serve Project :

#### 1- composer install :

`composer install`

#### 2- Complete the env file :

######  2.1: the root directory of your application will contain a .env.example file

Rename it to .env

###### 2.2 : Enter your project address instead of APP_URL :

> example : http://shareit.local

###### 2.3 : Generate APP_KEY :

`php artisan key:generate`

###### 2.4 : Complete database information :

This section must be completed :

> DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=share_it
DB_USERNAME=root
DB_PASSWORD=root


#### 3- migrate :

`php artisan migrate`

#### 4- create or Cheek Directory  :

Check that these folders are available

- public/uploads

Its access level must be: 777

- storage/logs

Its access level must be: 777

- storage/framework

Its access level must be: 777

- storage/framework/sessions

Its access level must be: 777

#### 5- serve  :

`php artisan serve`


### Ui-kit : 

ui kit used : https://themes.getbootstrap.com/product/robust-ui-kit-dashboard-landing/


## Supports :

Email : blackhat1520@gmail.com

New issues : https://github.com/p30web/Laravel-Project/issues
