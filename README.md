# 🎓 EduMatrix

![PHP](https://img.shields.io/badge/Backend-PHP_7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Design-Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Status](https://img.shields.io/badge/Status-Maintained-success?style=for-the-badge)

> **Overview:** EduMatrix is a dynamic **Educational Program Management Platform**. It simplifies the academic browsing experience by organizing courses into intuitive categories, displaying real-time pricing with smart discount logic, and ensuring a seamless experience across all devices.

---

## 📑 Table of Contents

* [✨ Key Features](#-key-features)
* [🛠️ Tech Stack](#-tech-stack)
* [📸 Interface Preview](#-interface-preview)
* [🗄️ Database Setup](#-database-setup)
* [⚙️ Configuration](#-configuration)
* [📂 File Structure](#-file-structure)
* [🚀 Getting Started](#-getting-started)
* [🤝 Contributing](#-contributing)

---

## ✨ Key Features

* **📚 Dynamic Course Catalog:** Organized listings of educational programs fetched directly from the database.
* **💲 Smart Pricing System:** Automatically calculates and displays original vs. discounted prices (e.g., <del>৳1000</del> → <span style="color:green">৳800</span>).
* **📱 Fully Responsive:** Built with **Tailwind CSS** to ensure a beautiful interface on mobile, tablet, and desktop.
* **🖼️ Visual Learning:** Categories and courses support high-quality image uploads.
* **⚡ Admin Architecture:** Backend structure ready for managing coupons, courses, and categories.

---

## 🛠️ Tech Stack

| Component | Technology | Description |
| :--- | :--- | :--- |
| **Backend** | `PHP (Native)` | Server-side logic and database communication. |
| **Database** | `MySQL` | Relational storage for categories, programs, and pricing. |
| **Frontend** | `Tailwind CSS` | Utility-first CSS framework for rapid UI development. |
| **Server** | `Apache` | Web server (via XAMPP/WAMP). |

---

## 📸 Interface Preview

> *Visualizing the platform's flow.*

| **Program Categories** | **Course Details** |
| :---: | :---: |
| ![Category Page](uploads/category_placeholder.png) | ![Course Page](uploads/course_placeholder.png) |

*(Note: Please upload screenshots to your `uploads/` folder and update these filenames)*

---

## 🗄️ Database Setup

To run EduMatrix, you need to set up the database schema.

**1. Create the Database**
Open PHPMyAdmin and create a database named `edumatrix`.

**2. Import the Schema**
Run the following SQL commands in the SQL tab:

```sql
-- Create Categories Table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(255) NOT NULL,
    image VARCHAR(255)
);

-- Create Programs Table
CREATE TABLE programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    class VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    discount_price DECIMAL(10,2),
    image VARCHAR(255),
    description TEXT
);

-- Insert Sample Data
INSERT INTO categories (category, image) VALUES
('School Program - SSC 30', 'uploads/class_6.jpeg'),
('School Program - SSC 29', 'uploads/class_7.jpeg');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('Math 101', 'School Program - SSC 30', 1000.00, 800.00, 'uploads/math101.jpg', 'Introduction to Algebra'),
('Math 102', 'School Program - SSC 30', 1200.00, NULL, NULL, 'Advanced Algebra');
````

-----

## ⚙️ Configuration

Ensure your application can connect to the database by editing `includes/db_connect.php`:

```php
<?php
$host = 'localhost';
$db   = 'edumatrix';
$user = 'root';      // Default XAMPP username
$pass = '';          // Default XAMPP password is empty

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

-----

## 📂 File Structure

```text
edumatrix/
├── includes/
│   ├── db_connect.php     # Database connection settings
│   ├── header.php         # Navbar & Tailwind CSS CDN
│   └── footer.php         # Footer & Scripts
├── uploads/               # Stores dynamic images (courses/categories)
├── programs.php           # Main landing page displaying categories
├── category_courses.php   # Page displaying courses for a specific category
└── README.md              # Project documentation
```

-----

## 🚀 Getting Started

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/shafin027/EduMatriix.git](https://github.com/shafin027/EduMatriix.git)
    ```
2.  **Move Files:**
    Place the project folder inside your server's root directory:
      * **XAMPP:** `C:/xampp/htdocs/edumatrix`
      * **MAMP:** `/Applications/MAMP/htdocs/edumatrix`
3.  **Start Server:**
    Launch Apache and MySQL via your control panel.
4.  **Launch App:**
    Visit `http://localhost/edumatrix/programs.php` in your browser.

-----

## 🤝 Contributing

1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature/AmazingFeature`).
3.  Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4.  Push to the branch (`git push origin feature/AmazingFeature`).
5.  Open a Pull Request.

-----

### 🛡️ Security Note

This project utilizes **MySQLi** for database interactions. For a production environment, ensure that prepared statements are consistently used for all user inputs to prevent SQL injection, and implement robust input validation.

-----

**EduMatrix** | Developed by [Shafin027](https://github.com/shafin027)

