# Coffee Co Shop - E-Commerce Website

## Overview
Coffee Co Shop is an online platform for purchasing coffee products, featuring a user-friendly interface for browsing and buying items. It includes essential e-commerce functionalities such as product listings, a shopping cart, order history, customer reviews, and an admin panel for managing products, orders, and users.

## Features
### **User Features:**
- **User Registration & Login:** Secure authentication system.
- **Product Browsing:** Detailed product listings with images and descriptions.
- **Shopping Cart Management:** Add, update, or remove products.
- **Secure Checkout Process:** Order completion with shipping and payment details.
- **Order Tracking:** View past orders and their status.
- **Wishlist:** Save products for future purchases.

### **Admin Features:**
- **Admin Dashboard:** Access a dedicated panel for store management.
- **Product Management:** Add, edit, and remove product listings.
- **Order Management:** Track and update customer orders.
- **Admin User Management:** Add and manage administrator accounts.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (with PDO for database interactions)
- **Database:** MySQL
- **Security:** Password hashing, SQL injection prevention, XSS protection, CSRF token implementation

## Installation & Setup
### **Prerequisites:**
- PHP 7.4+
- MySQL Database
- Apache Server (XAMPP or LAMP recommended)

### **Installation Steps:**
1. **Setup the Database:**
   - Create a MySQL database named `aryana_coffee`.
   - Import the SQL file from the `database/` folder.
2. **Configure Database Connection:**
   - Edit `components/connection.php` with your database credentials.
3. **Upload Website Files:**
   - Place all project files inside the server directory (`public_html/` for web hosting or `htdocs/` for XAMPP).
4. **Run the Installation Script:**
   - Open `install_db.php` in a browser to create database tables.
   - Delete or rename this script after running it.
5. **Verify Installation:**
   - Open `index.php` in a browser and check if the site loads properly.

## Security Features
- **Password Hashing:** Secure user authentication using `password_hash()` and `password_verify()`.
- **Prepared Statements:** SQL queries use PDO with prepared statements to prevent SQL injection.
- **Session Management:** Regenerates session ID upon login to prevent session fixation attacks.
- **XSS Protection:** User input is sanitized before displaying on web pages.
- **CSRF Protection:** Forms handling sensitive data include CSRF tokens to prevent CSRF attacks.

## File Structure
```
/ Coffee Co Shop
│── /admin          # Admin panel files
│── /components     # Database connection and common functions
│── /database       # Database setup files
│── /css            # Stylesheets
│── /js             # JavaScript files
│── /images         # Product images
│── /includes       # Header, footer, and common UI elements
│── index.php       # Homepage
│── cart.php        # Shopping cart page
│── checkout.php    # Checkout process
│── login.php       # User login page
│── register.php    # User registration page
│── order.php       # Order management
│── wishlist.php    # Wishlist feature
```

## Deployment
To deploy the site, upload all files to a hosting server supporting PHP and MySQL (e.g., cPanel, AWS, DigitalOcean). Configure the database connection and set file permissions appropriately.

## License
This project is licensed under the MIT License.

---
For any issues or assistance, feel free to contact the development team.

