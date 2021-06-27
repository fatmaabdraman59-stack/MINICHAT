# mini-chat
Create a mini-chat with PHP and MySQL

## What is this ?
It's a mini-project in order to work with my skills on PHP.

## Languages and Tools used :
* PHP, HTML5, SASS, JavaScript
* Webpack & Babel

## Dependicies
Install all dependencies : `npm install`

Compile JS files : `npm run build`

## Resource DB
This project working with a MySQL database, you can retrieve a sql file that I've stored in the folder **[resource]** and import this in your localhost.

If you want to create your own database, here are the elements to create for its structure :

* Name of Database : minichat
* Name of Table : chat
* Structure of table :

| id             | pseudo          | message         | date_creation     |
|----------------|-----------------|-----------------|-------------------|
| int(11)        | varchar(255)    | varchar(255)    | datetime          |
|                | uft8_general_ci | uft8_general_ci |                   |
| AUTO_INCREMENT |                 |                 | CURRENT_TIMESTAMP |