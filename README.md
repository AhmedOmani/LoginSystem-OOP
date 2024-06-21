# PHP OOP Login System

This project is a simple login system implemented using Object-Oriented Programming (OOP) concepts in PHP. It includes functionalities for user registration and login, using a MySQL database for storing user information securely.

## Project Structure

Certainly! Here's a README.md file for your PHP OOP login system project:

markdown
نسخ الكود
# PHP OOP Login System

This project is a simple login system implemented using Object-Oriented Programming (OOP) concepts in PHP. It includes functionalities for user registration and login, using a MySQL database for storing user information securely.

## Project Structure

login-system-oop/
├── classes/
│ ├── DatabaseHandler.php
│ ├── login-classes.php
| |── login-controller-classes.php
│ |── signup-classes.php
| |── signup-cont-classes.php
| 
├── includes/
│ └── login-inc.php
│ └── signup-inc.php
├── index.php
├── style.css
└── script.js

### Classes

- **DatabaseHandler.php**: Handles the database connection using PDO.
- **login-classes.php**: Handle sql queries to login user .
- **login-controller-classes.php**: control all properties and methods which require to login user .
- **signup-classes.php** : Handle sql queries which are requires to signup user .
- **signup-cont-classes.php** : control all properties and methods which require to signup user .

### Includes 

- **login-inc.php**: Processes login requests.
- **signup-inc.php**: Processes user registration requests.
