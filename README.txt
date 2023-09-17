The project entitled "Petshop Management System" is a personal project built only for learning purposes.
It utilizes HTML, CSS, JS, PHP and MySQL for frontend and backend of the web application.
XAMPP server containing the Apache server and the MySQL server is used to execute this project.

To execute this project:
1) Install XAMPP Version 8.2.4 on the C-drive of your computer.
2) Place the "Petshop Management System" project folder inside the xampp install folder as "C:\xampp\htdocs\Petshop Management System".
3) Start the Xampp server from start menu.
4) Start the Apache and MySQL server.
5) Open a brower (Google Chrome preferred) and open the address "http://localhost/phpmyadmin/" which is the dashboard of MySQL database.
6) Create a new database with the name "petshop_management_system".
7) Also create two tables namely "user_accounts" and "orders" as shown below:
    Table name: user_accounts
    Columns: i) id - int auto increment primary key
             ii) username - varchar(10)
             iii) name - text
             iv) email - varchar(50)
             v) mobile_number - decimal(10)
             vi) password - varchar(50)
             vii) signup_time - timestamp (default current_timestamp)
    
    Table name: orders
    Columns: i) id - int auto increment primary key
             ii) username - varchar(10)
             iii) name - text
             iv) pet_name - text
             v) price - int
             vi) email - varchar(50)
             vii) mobile_number - decimal(10)
             viii) comments - varchar(100)
             ix) order_time - timestamp (default current_timestamp)

7) Open a new tab in the browser and type "http://127.0.0.1/Petshop Management System/" to open the Home page of the project.
8) Creating account, logging in, buying pets, viewing account dashboard, etc. are some the functionalities that are available for the users.
9) Now, play around with the project as you wish!