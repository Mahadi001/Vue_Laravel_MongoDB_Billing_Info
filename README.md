# Billing Information



[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

This project is based on getting json value from database and overriding the values through update option.
The frameworks used for this projects are:
  - Laravel (version 6)
  - Vue
  - MongoDB

### Installation

This project needs to be cloned first in order to operate. 
```sh
$ git clone https://github.com/Mahadi001/Vue_Laravel_MongoDB_Billing_Info.git
```
You will need to be inside the project file to enter all of the rest of the commands. Type cd projectName to move to your terminal working location to the project file.

Install the dependencies and devDependencies and start the server.

```sh
$ composer install
$ npm install
$ cp .env.example .env
$ php artisan key:generate
```
In order to connect to the database:
 - Create a database
 - Locate to the database folder for a database file Vue_Laravel_MongoDB_Billing_Info\database\informations.json
 - Import the json file in the mongoDB database
 - In the .env file, fill out the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database.

Enter this to the command line :

```sh
php artisan migrate
```
 
```sh
php artisan serve
```
