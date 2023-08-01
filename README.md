# Mobile_Shopee E-Commerce Website

## Introduction

This is a complete E-commerce website project that demonstrates how to create a Mobile Shopee using PHP and MySQL database. The project involves creating an HTML template, converting it into PHP, and using MySQL to fetch products and display them on the website.

## Setup Instructions

To set up the PHP project on your localhost, follow these steps:

1. **Prerequisites**: Make sure you have PHP and MySQL installed on your local machine. You can download and install XAMPP or WAMP, which includes PHP, MySQL, and Apache web server.

2. **Clone the Repository**: Clone this repository into your local web server's root directory. If you're using XAMPP, the root directory is typically located in the "htdocs" folder. If you're using WAMP, it's usually in the "www" folder.

3. **Database Setup**: Create a new database in MySQL for the project. You can do this by accessing phpMyAdmin from your web server's control panel and creating a new database named "mobile_shopee".

4. **Import Database**: Inside the project folder, you'll find a SQL file named "mobile_shopee.sql". Import this file into the "mobile_shopee" database you created. This will set up the necessary tables and data for the project.

5. **Configure Database Connection**: In the project folder, navigate to the "config" directory and open the "db.php" file. Update the database connection details (host, username, password, and database name) to match your local MySQL settings.

6. **Start the Web Server**: Start your local web server (XAMPP or WAMP).

7. **Access the Website**: Open a web browser and enter the URL "http://localhost/Mobile_Shopee-E-Commerce-Website" (or the path where you cloned the repository). You should see the Mobile Shopee E-commerce website.

## Project Structure

The project follows a basic structure as follows:

```
Mobile_Shopee-E-Commerce-Website/
├── config/
│   └── db.php
├── css/
│   └── style.css
├── images/
│   └── (project images)
├── js/
│   └── script.js
├── templates/
│   └── (HTML/PHP template files)
├── index.php
├── about.php
├── contact.php
├── product.php
├── checkout.php
├── login.php
├── register.php
├── cart.php
└── README.md
```

## Credits

This project is created as a learning exercise and follows tutorials and guides from various online resources. Credit goes to the respective authors and tutorial creators.

Feel free to use this project as a reference or learning resource to understand the concepts of creating an E-commerce website using PHP and MySQL.

## License

This project is licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute the code as per the terms of the license.