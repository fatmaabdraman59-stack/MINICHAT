# mini-chat
Create a mini-chat with PHP

## What is this ?
It's a mini-project in order to work with my skills on PHP.

## Languages and Tools used :
* PHP, HTML5, SASS, JavaScript

## Resource DB
This project working with a MySQL database, you could retrieve and import in your localhost a sql file that I've store in the folder **[resource]**.

If you want to create your own database, here are the elements to create for its structure :

* Name of Database : minichat
* Name of Table : chat
* Structure of table :

| id             | pseudo          | message         | date_creation     |
|----------------|-----------------|-----------------|-------------------|
| int(11)        | varchar(255)    | varchar(255)    | datetime          |
|                | uft8_general_ci | uft8_general_ci |                   |
| AUTO_INCREMENT |                 |                 | CURRENT_TIMESTAMP |