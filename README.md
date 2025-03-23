## Dylan Murphy Server Side CA2 - Laravel Blog <br>

**This is my adaptation of CodeWithDarys Laravel Blog Template for my Server Side Development Continuous Assessment 2**

# Unique features:

- Dynamic latest blog post/news post on home page
- Google Api maps for contact page
- Emailing system via mailtrap sandbox
- Review requests, logged in users can request reviews of certain club types
- Implemented CK editor for creating html formatted blog/news/review posts
- Implemented a basic admin panel to let admins see the users table and review requests table

- Mobile responsive header bar with responsive dropdown menus.

- Using google font 'Montserrat'

------------
# Additions

**Models:**

News Model
Review Model
Review Question Model

------------

**Views:**

- News Views
- Reviews Views
- Header View
- Email Views
- About View
- Contact View
- Review-Request view
- Admin Panel Views

------------

**Controllers:**
- About Controller
- Contact Form Controller
- News Controller
- Reviews Controller
- Review Request Controller
- User Controller
- Admin Controller
- Modified posts controller to remove images from local storage

- Modified users to have a role field to allow for an admin user

------------
## Requirements
- PHP 7.3 or Higher
- Node 12.13.0 or higher
- Composer
- Xampp

## Usage
Setting up your development environment on your local machine, open cmd and cd to the directory you would like to save the project then run these commands:
```
git clone https://github.com/dylanmurph/dylans-blog.git
cd dylans-blog
composer install
php artisan key:generate
php artisan cache:clear
php artisan config:clear
npm install
```

## Before starting
*Create a database*
```
mysql
create database golfblog;
exit;
```

*Setup your database credentials in the .env file*
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=golfblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

*To use the emailing system you will need to provide your own Mailing credentials*
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=contact@driversdigest.com
MAIL_FROM_NAME="${APP_NAME}"
```


*Migrate the tables*
```
php artisan migrate
```

*Compile css/js with Laravel Mix*
```
npm run dev
```

*Run the server*
```
php artisan server
```
