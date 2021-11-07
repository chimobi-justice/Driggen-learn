# About Driggen-learn

Driggen-learn is an E-learning web application for easy and online learning courses that allows instructors to curate course and users can get to enroll.

## Tool Stack

-   Laravel
-   Blade
-   PostgreSQL

## Usage

Clone the repository

git clone [this repository](https://github.com/chimobi-justice/Driggen-learn.git)

-   Change directories into Driggen-learn

cd Driggen-learn

-   Install [NPM](https://nodejs.org/en/)
-   Install [composer](https://getcomposer.org/)

composer install

-   Create the .env file by duplicating the .env.example file

cp .env.example .env

-   Set the APP_KEY value

php artisan key:generate

-   Clear your cache & config (OPTIONAL)

php artisan cache:clear && php artisan config:clear

-   Finally, run your project in the browser!

-   php artisan serve
