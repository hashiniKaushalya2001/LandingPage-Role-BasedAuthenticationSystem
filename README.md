# 🔐 Laravel Role-Based Authentication System

A Laravel-based **Role Authentication System** with separate **Admin** and **User** dashboards.  
It demonstrates how to implement **role-based login redirection** and secure dashboards with a modern **Tailwind CSS UI**.

---

## ✨ Features
- ✅ Authentication with Laravel Breeze  
- ✅ Role-based redirection after login (Admin/User)  
- ✅ Admin Dashboard – Manage users, content, and reports  
- ✅ User Dashboard – Personalized welcome screen  
- ✅ Middleware protection for secure routes  
- ✅ Tailwind CSS styled dashboards  
- ✅ Database seeder with default Admin and User  

---

## 🚀 Tech Stack
- **Framework**: Laravel 10  
- **Language**: PHP 8+  
- **Database**: MySQL
- **Frontend**: Blade + Tailwind CSS  

---

## ⚙️ Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/laravel-role-auth.git
cd laravel-role-auth
2️⃣ Install dependencies
bash
Copy code
composer install
npm install && npm run dev
3️⃣ Setup environment
Copy .env.example into .env:

bash
Copy code
cp .env.example .env
Then update your database credentials inside .env.

4️⃣ Run migrations & seeders
bash
Copy code
php artisan migrate --seed
This will create tables and insert one admin user and one normal user.

👥 Default Users (Seeded)
Admin

Email: admin@example.com

Password: password

User

Email: user@example.com

Password: password

▶️ Usage
Visit /login to log in

Admins will be redirected to /admin/dashboard

Users will be redirected to /user/dashboard

📂 Project Structure
bash
Copy code
app/
 └── Http/
     └── Controllers/
         └── Auth/
             ├── AuthenticatedSessionController.php
             └── RegisteredUserController.php
resources/
 └── views/
     ├── admin/dashboard.blade.php
     └── user/dashboard.blade.php
```
📸 Screenshots

Landing Page
<img width="1107" height="604" alt="ss1" src="https://github.com/user-attachments/assets/aea7204d-01d7-452f-91c6-25283b73f4e5" />
<img width="1255" height="609" alt="ss2" src="https://github.com/user-attachments/assets/e3315661-defd-4081-b8cc-3df11690c5a1" />

Footer
<img width="1283" height="653" alt="ss5" src="https://github.com/user-attachments/assets/75c17602-8f2f-4318-adf7-28057c0fcf55" />

Admin Dashboard
<img width="1152" height="632" alt="ss3" src="https://github.com/user-attachments/assets/de5c4ae9-6267-472e-8878-34cc2f74a140" />

User Dashboard
<img width="1389" height="729" alt="ss4" src="https://github.com/user-attachments/assets/ddbf8ad8-8cbc-47d0-a541-6bd42c18c629" />
