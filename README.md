Meow-t & Mingle Café Website 
[Visit the Cat Café Website](https://nuvashrestha.github.io/CatCafe/index.html)

Project Overview
The Meow-t & Mingle Café website is an interactive platform designed for a cat-themed café. The website allows users to make reservations, learn about the café's resident cats, and manage their accounts. The goal of the project is to create a user-friendly interface that integrates seamlessly with a secure backend system for managing customer data and reservations.

Features
User Registration and Login: Users can create accounts and log in to manage their reservations and personal information.
Reservation System: Customers can make reservations for specific time slots, with backend validation to prevent overbooking.
Admin Panel: An admin user (User ID: 100) has access to manage reservations and view information about the resident cats.
Responsive Design: The website is designed to be compatible across various devices, including desktops, tablets, and smartphones.
Technologies Used
Frontend:
HTML5
CSS3
JavaScript
Backend:
PHP
PostgreSQL
Frameworks & Libraries:
Bootstrap
Tailwind CSS (optional)
Database:
PostgreSQL

Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/nuvashrestha/CatCafe.git
Set Up the Database:

Create a PostgreSQL database named catcafe.
Run the SQL scripts provided in the database folder to set up the necessary tables and triggers.
Configure the Backend:

Update the database connection details in the config.php file.
Ensure that your web server (e.g., Apache) has PHP and PostgreSQL support enabled.
Run the Website:

Host the website on a local server using XAMPP, WAMP, or similar, or deploy it on a live server.
Navigate to http://localhost/CatCafe or your live URL to access the site.
Usage

User Registration and Login
Users can sign up for an account by providing their details on the registration page.
Upon successful registration, they can log in using their credentials.

Making Reservations
After logging in, users can make reservations by selecting a time and date within the available slots.
The system will prevent more than 5 reservations per day, ensuring no overbooking.

Admin Access
The admin user with User ID 100 can log in to access the admin panel, where they can view and manage all reservations and information about the café's cats.

Database Schema
The database includes the following key tables:

users: Stores user information (ID, name, email, password, etc.).
reservations: Manages reservation data, including time, date, and user information.
cats: Contains information about the resident cats in the café.
Refer to the SQL scripts in the database folder for the detailed schema and table structures.
