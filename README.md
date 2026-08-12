# 💊 Pharmacy Management System

<p align="center">
  <strong>A web-based pharmacy management platform for inventory, customers, suppliers, purchases, invoices, and sales reporting.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-4.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/XAMPP-Local%20Server-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP">
</p>

<p align="center">
  <a href="https://github.com/Samruddhi-Shinde-2024/Pharmacy-Management-System">
    <img src="https://img.shields.io/badge/GitHub-Repository-181717?style=flat-square&logo=github" alt="GitHub Repository">
  </a>
  <img src="https://img.shields.io/badge/Status-Completed-2ea44f?style=flat-square" alt="Project Status">
</p>

---

## 📌 Overview

**Pharmacy Management System** is a web-based application designed to simplify day-to-day pharmacy operations through a centralized management interface.

The system provides functionality for managing medicines, customers, suppliers, stock, purchases, invoices, and reports. It also includes dashboard statistics and data visualizations to make operational information easier to understand.

The project was developed using **PHP, MySQL, JavaScript, Bootstrap, HTML, and CSS**, with XAMPP used as the local development environment.

---

## ✨ Key Features

### 📊 Dashboard

* Centralized pharmacy overview
* Customer, supplier, medicine, stock, and invoice statistics
* Out-of-stock and expiry visibility
* Today's sales/purchase summary
* Quick access to frequently used operations

### 👥 Customer Management

* Add customers
* View and manage customer records
* Search customers
* Edit customer information
* Delete customer records

### 🏢 Supplier Management

* Add suppliers
* View and manage supplier records
* Search suppliers
* Edit supplier information
* Delete supplier records

### 💊 Medicine Management

* Add medicines
* Manage medicine information
* Search medicines
* Update medicine details
* Track medicine-related information

### 📦 Stock Management

* Monitor medicine stock
* Identify out-of-stock medicines
* Track expiry-related information
* Manage stock records

### 🛒 Purchase Management

* Record purchases
* Associate purchases with suppliers
* Add medicines and quantities
* Calculate purchase totals
* Search and manage purchase records

### 🧾 Invoice & Sales Management

* Create customer invoices
* Add medicines to invoices
* Calculate quantities and totals
* Apply available billing calculations
* Manage existing invoices
* Search invoice records

### 📈 Reports & Analytics

* Sales reports
* Purchase reports
* Date-based report filtering
* Sales/customer visualizations
* Supplier-related visualizations
* Invoice/sales charts
* Printable report functionality

### 🔐 Authentication

* Admin login
* Session-based authentication state
* Protected application pages
* Logout functionality

---

## 🖥️ Screenshots

A glimpse of the Pharmacy Management System interface, management modules, and analytics dashboard.

<table>
  <tr>
    <td width="50%">
      <img src="assets/dashboard.png" alt="Pharmacy Management System Dashboard">
    </td>
    <td width="50%">
      <img src="assets/manage-customer.png" alt="Customer Management">
    </td>
  </tr>
  <tr>
    <td width="50%">
      <img src="assets/manage-supplier.png" alt="Supplier Management">
    </td>
    <td width="50%">
      <img src="assets/sales-analytics.png" alt="Sales Analytics">
    </td>
  </tr>
</table>

> The repository contains additional screenshots covering the application's management, billing, reporting, and dashboard interfaces.

---

## 🏗️ System Architecture

```mermaid
flowchart TD
    A[👤 Admin / User] --> B[🌐 Browser]
    
    B --> C[PHP Web Pages]
    
    C --> D[JavaScript + AJAX]
    
    D --> E[PHP Backend Endpoints]
    
    E --> F[(MySQL Database)]
    
    C --> G[Bootstrap + CSS]
    
    C --> H[📊 Reports & Charts]
    
    F --> H
```

### Application Flow

```mermaid
flowchart LR
    A[Login] --> B[Dashboard]
    B --> C[Customers]
    B --> D[Suppliers]
    B --> E[Medicines]
    B --> F[Stock]
    B --> G[Purchases]
    B --> H[Invoices]
    
    G --> I[Purchase Reports]
    H --> J[Sales Reports]
    
    I --> K[Charts]
    J --> K
```

---

## 🧩 Core Modules

| Module             | Purpose                                            |
| ------------------ | -------------------------------------------------- |
| **Dashboard**      | Overview of pharmacy operations and key statistics |
| **Customers**      | Manage customer records                            |
| **Suppliers**      | Manage supplier information                        |
| **Medicines**      | Maintain medicine records                          |
| **Medicine Stock** | Monitor inventory and stock status                 |
| **Purchases**      | Record and manage purchases                        |
| **Invoices**       | Generate and manage sales invoices                 |
| **Reports**        | Analyze sales and purchase information             |
| **Charts**         | Visualize operational data                         |
| **Authentication** | Manage admin login and sessions                    |

---

## 🛠️ Tech Stack

| Technology          | Usage                                    |
| ------------------- | ---------------------------------------- |
| **PHP**             | Server-side application logic            |
| **MySQL / MariaDB** | Relational database                      |
| **JavaScript**      | Client-side interaction and AJAX         |
| **HTML5**           | Application structure                    |
| **CSS3**            | Custom styling                           |
| **Bootstrap**       | Responsive UI components and layout      |
| **XAMPP**           | Local Apache + MySQL/MariaDB environment |

---

## 🗄️ Database

The project includes a complete database dump:

```text
pharmacy.sql
```

The primary database is:

```text
pharmacy
```

Major entities include:

```mermaid
erDiagram
    ADMIN_CREDENTIALS {
        varchar USERNAME
        varchar PASSWORD
    }

    CUSTOMERS {
        int CUSTOMER_ID
    }

    SUPPLIERS {
        int SUPPLIER_ID
    }

    MEDICINES {
        int MEDICINE_ID
    }

    MEDICINES_STOCK {
        int STOCK_ID
    }

    PURCHASES {
        int PURCHASE_ID
    }

    INVOICES {
        int INVOICE_ID
    }

    CUSTOMERS ||--o{ INVOICES : receives
    SUPPLIERS ||--o{ PURCHASES : supplies
    MEDICINES ||--o{ MEDICINES_STOCK : tracked
```

> The exact columns and relationships are defined in `pharmacy.sql`.

---

## 🚀 Getting Started

### Prerequisites

Install:

* [XAMPP](https://www.apachefriends.org/)
* A modern web browser

### 1. Clone the repository

```bash
git clone https://github.com/Samruddhi-Shinde-2024/Pharmacy-Management-System.git
```

### 2. Move the project into XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The final path should be:

```text
C:\xampp\htdocs\Pharmacy-Management-System
```

### 3. Start XAMPP

Open XAMPP Control Panel and start:

```text
Apache
MySQL
```

### 4. Create the database

Open:

```text
http://localhost/phpmyadmin/
```

Create a database named:

```text
pharmacy
```

### 5. Import the database

Select the `pharmacy` database and import:

```text
pharmacy.sql
```

### 6. Open the application

Visit:

```text
http://localhost/Pharmacy-Management-System/
```

---

## 🔑 Demo Credentials

The included demonstration database contains the default admin credentials:

```text
Username: admin
Password: admin123
```

> For a real production deployment, credentials should never be kept as plaintext and default credentials should be changed.

---

## 📁 Project Structure

```text
Pharmacy-Management-System/
│
├── bootstrap/                 # Bootstrap CSS, JS and fonts
│
├── charts/                    # Chart pages and chart data endpoints
│   ├── DEMO/
│   ├── Invoices/
│   └── Sales/
│
├── css/                       # Application stylesheets
│
├── images/                    # Images and project screenshots
│   └── screen-shots/
│
├── js/                        # Client-side JavaScript
│
├── php/                       # Backend PHP endpoints
│   ├── db_connection.php
│   ├── report.php
│   ├── suggestions.php
│   └── ...
│
├── sections/                  # Shared HTML fragments
│
├── index.php                  # Application entry point
├── login.php                  # Login page
├── home.php                   # Dashboard
├── new_invoice.php            # Invoice creation
├── purchase_report.php        # Purchase reporting
├── sales_report.php           # Sales reporting
├── pharmacy.sql               # Database dump
└── .gitignore
```

---

## 🔄 Application Workflow

```mermaid
sequenceDiagram
    actor Admin
    participant UI as Web Interface
    participant PHP as PHP Backend
    participant DB as MySQL Database

    Admin->>UI: Login
    UI->>PHP: Submit credentials
    PHP->>DB: Validate credentials
    DB-->>PHP: Authentication result
    PHP-->>UI: Create session / response
    UI-->>Admin: Dashboard

    Admin->>UI: Manage records
    UI->>PHP: AJAX request
    PHP->>DB: Execute operation
    DB-->>PHP: Result
    PHP-->>UI: Updated data
    UI-->>Admin: Updated interface
```

---

## 🧪 Validation & Testing

The final project was audited for its core demonstration workflows.

### Verified

* Login/session/logout flow
* Dashboard data
* Customer search endpoints
* Supplier search endpoints
* Medicine search endpoints
* Stock search endpoints
* Invoice search endpoints
* Purchase search endpoints
* Customer/supplier/medicine suggestions
* Sales report endpoints
* Purchase report endpoints
* Chart data endpoints
* Main application page loading
* PHP syntax
* JavaScript syntax
* CSS consistency
* Modal layering and interaction
* Purchase report column alignment

The final source and local XAMPP copies were synchronized before the GitHub repository was finalized.

---

## ⚠️ Known Limitations

The current imported database schema does not contain the additional pharmacy profile fields expected by the existing **My Profile** and **Forgot Password** screens.

Therefore, these optional flows are not recommended for the primary demonstration.

The core pharmacy workflow remains usable without them.

A local jQuery asset is also referenced by some pages but is not required by the project's core JavaScript flows.

---

## 🔮 Future Enhancements

Possible future improvements include:

* Secure password hashing and credential management
* Role-based access for multiple pharmacy staff members
* Complete administrator profile management
* Password reset through verified email
* Advanced inventory alerts
* Low-stock notifications
* Supplier payment tracking
* More detailed sales analytics
* Exportable PDF/CSV reports
* Production deployment with secure environment configuration

---

## 🎯 Project Highlights

* Centralized pharmacy management dashboard
* Inventory and stock monitoring
* Customer and supplier management
* Purchase and invoice workflows
* Sales and purchase reporting
* Data visualization
* AJAX-based interactions
* Responsive Bootstrap interface
* MySQL-backed data persistence
* Session-based authentication

---

## 👩‍💻 Author

### Samruddhi Shinde

Information Technology Student at **Vishwakarma Institute of Technology, Pune**

Interested in:

* Full Stack Development
* Machine Learning
* AI-powered applications
* Software Engineering

<p align="center">
  <a href="https://github.com/Samruddhi-Shinde-2024">GitHub</a>
  •
  <a href="https://www.linkedin.com/in/samruddhi-shinde-37a3862a8/">LinkedIn</a>
</p>

---

<p align="center">
  ⭐ If you found this project useful, consider giving the repository a star!
</p>
