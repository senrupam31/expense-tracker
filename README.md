# 💰 Laravel 11 Daily Expense Tracker

A simple and clean expense tracking application built with **Laravel 11**, **MySQL**, and **Tailwind CSS**. It supports:

- User Registration & Login
- Role-based access (Admin & User)
- Admins can manage Item Groups and Items
- Users can add/view their own expenditures

---

## 🚀 Features

- Laravel Breeze Authentication (Login, Register, Logout)
- Role-based access control
- Admin dashboard to manage ItemGroups & Items
- Users can track expenses under Items
- MySQL database
- Tailwind CSS for styling

---

## 📦 Requirements

- PHP >= 8.2
- Composer
- MySQL
- Node.js and npm (for front-end assets)

---

## 🛠️ Installation Guide

Follow these simple steps to get the project running on your local machine:

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/daily-expense-tracker.git
cd daily-expense-tracker
```

### 2️⃣ Install PHP Dependencies

```bash
composer install
```

### 3️⃣ Copy `.env` File & Generate App Key

```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Set Up Database

- Create a new MySQL database (e.g., `expense_tracker`)
- Update `.env` file with your DB credentials:

```
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 5️⃣ Run Migrations

```bash
php artisan migrate
```

Optional: Seed data (create dummy admin/user):

```bash
php artisan db:seed
```

### 6️⃣ Install & Build Frontend

```bash
npm install && npm run build
```

### 7️⃣ Run the Application

```bash
php artisan serve
```

Then open:

```
http://127.0.0.1:8000
```

---

## 🔐 Default Roles

After registering:

- You are created as a **User**
- To make an Admin:
  - Go to the database `users` table in phpMyAdmin
  - Change the value of `role` column to `admin` for that user

---

## 🌐 Application Routes

Here are all the major routes with usage:

### 🔐 Auth Routes

| URL | Method | Role | Description |
|-----|--------|------|-------------|
| `/register` | GET/POST | Guest | Register as new user |
| `/login` | GET/POST | Guest | Login as user |
| `/logout` | POST | Auth | Logout user |

---

### 🧑‍💼 Admin Routes

| URL | Method | Description |
|-----|--------|-------------|
| `/admin/dashboard` | GET | Admin dashboard |
| `/admin/item-groups` | GET | View all item groups |
| `/admin/item-groups/create` | GET/POST | Create a new item group |
| `/admin/items` | GET | View all items |
| `/admin/items/create` | GET/POST | Create a new item under group |

---

### 👤 User Routes

| URL | Method | Description |
|-----|--------|-------------|
| `/dashboard` | GET | User dashboard |
| `/expenditures` | GET | View personal expenditures |
| `/expenditures/create` | GET/POST | Add new expenditure |

---

## 🧪 Example Walkthrough

1. Register a new user.
2. Change their `role` to `admin` in the database to access `/admin/dashboard`.
3. As admin:
   - Create Item Groups (e.g., Groceries, Utilities).
   - Create Items under those groups (e.g., Milk, Electricity).
4. As a regular user:
   - Login, go to `/expenditures/create`, and add your expenses.
   - View them on `/expenditures`.

---

## 📂 Folder Structure (Important Files)

```
app/
 └── Http/
      └── Controllers/
          ├── AdminController.php
          ├── ItemGroupController.php
          ├── ItemController.php
          └── ExpenditureController.php
routes/
 └── web.php
resources/
 └── views/
      ├── admin/
      ├── expenditures/
      └── dashboard.blade.php
```

---

##  Author

Made with  using Laravel by Rupam Sen
