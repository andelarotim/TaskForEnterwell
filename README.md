# Task For Enterwell

Creating a simple form to store applications for prize game.

# Setup
Pre requirements:
  * In order for this app to work you have to have XAMPP installed.
  
Getting started:
* Clone the repository and store it inside the XAMPP htdocs file.
* Create a new database inside phpmyadmin and import the "wordpress.sql" file (note: I named it "wordpress").
* Run the MySQL and Apache server and you can access the app with: localhost/{nameOfFolder} .
To acces the admin panel: localhost/{nameOfFolder}/wp-admin (note: I named it "Enterwell").

ADMIN CREDENTIALS:
 * username: admin
* password: admin

# Troubleshooting
* If you name your folder otherwise, you should check out the table "wp_options". Current site url and home is http://localhost/Enterwell ,
so you should change that to a different localhost (depending on what you named your folder in htdocs).
* If you name your database otherwise, you should check out the file "wp-config.php" and change the settings for MySQL.
