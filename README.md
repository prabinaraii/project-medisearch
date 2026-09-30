# MediSearch – Online Pharmacy E-Commerce System

MediSearch is a web-based online pharmacy system built as a BCA academic project using **PHP, MySQL, HTML, CSS and JavaScript**.

Customers can search for medicines, add them to a cart or wishlist and go through checkout. Registered pharmacies can list their medicines and manage stock.

---

## Features

### Customer
- Registration and login (session-based)
- Search and browse medicines
- View medicine details
- Add, update and remove items in the shopping cart
- Add and remove medicines from the wishlist
- Checkout and payment interface
- View order/booking information
- Password reset

### Pharmacy / Seller
- Pharmacy registration and login
- Manage pharmacy information
- Add and manage medicines, stock and pricing
- Manage customer orders

### Admin
- Manage registered users and pharmacies
- Verify pharmacies

---

## Technologies Used

| Technology | Purpose |
| --- | --- |
| PHP | Backend |
| MySQL (MariaDB in XAMPP) | Database |
| HTML | Page structure |
| CSS | Styling |
| JavaScript | Client-side functionality |
| XAMPP | Local server |
| phpMyAdmin | Database management |
| Visual Studio Code | Code editor |

---

## Project Structure

```text
project-medisearch/
├── action/    # Server-side PHP scripts
├── config/    # Database connection settings
├── css/       # Stylesheets
├── image/     # Images used by the site
├── js/        # JavaScript files
├── uploads/   # Uploaded files
└── view/      # Page files (user interface)
```

---

## Database

Database name: `medisearch_db`

Main tables: `patients`, `pharmacy`, `medicine`, `cart`, `booking`, `password_reset_tokens`, `pharmacy_update_requests`

---

## How the Shopping Process Works

```text
Register / Login → Search Medicines → View Details → Add to Cart → Checkout → Payment → Order / Booking
```

---

## Installation and Setup

1. **Install XAMPP** (Apache, MySQL, PHP, phpMyAdmin).
2. **Download or clone** this project into the XAMPP `htdocs` folder, for example `C:\xampp\htdocs\MEDISEARCH`.
3. **Start Apache and MySQL** from the XAMPP Control Panel.
4. **Create a database** named `medisearch_db` in phpMyAdmin (`http://localhost/phpmyadmin`).
5. **Import the SQL file** into `medisearch_db` if one is included in the project.
6. **Set the database connection** in `config/database.php`. Example for a default XAMPP setup:

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "medisearch_db";
```

7. **Open the project** in your browser: `http://localhost/MEDISEARCH/`

---

## What We Learned

- PHP backend development and session management
- MySQL database design and SQL queries
- CRUD operations and form handling
- Connecting frontend, backend and database
- Debugging and working as a team

---

## Future Improvements

- Online payment gateway integration
- Advanced medicine filtering
- Order tracking
- Pharmacy ratings and reviews
- Email/SMS notifications
- Better security and input validation

---

## Developers

- **Prabina Rai**
- **Lizan Shrestha**

Bachelor of Computer Applications (BCA), Texas International College, Tribhuvan University

---

## License

This project was developed for academic purposes.
