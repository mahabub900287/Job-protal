# Laravel Job Portal

## Overview
Welcome to the Laravel Job Portal! This platform connects job seekers with employers, allowing users to browse job listings, apply for positions, and manage applications. Employers can post job opportunities and review applicants.

---

## Features

### Job Seekers
- 📝 **User Registration & Authentication**
- 🔍 **Browse Jobs** by category or keyword.
- 📤 **Apply for Jobs** with an uploaded resume.
- 📊 **Track Applications** via a personal dashboard.

### Employers
- 🏢 **Post Job Listings** to attract candidates.
- 📋 **Manage Applicants** and view resumes.

### Admin
- 🛠 **Admin Dashboard** for managing users, jobs, and categories.
- 📈 **Reports and Analytics**.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: Laravel Framework
- **Database**: MySQL
- **Storage**: File storage for CVs
- **Tools**: Faker for seeding, Pagination for UI optimization

---

## Installation

### Prerequisites
- PHP 8.0+
- MySQL
- Composer
- Node.js (optional for asset compilation)

### Steps
```bash
# Clone the repository
git clone https://github.com/your-repo/job-portal.git

# Navigate to the project folder
cd job-portal

# Install dependencies
composer install
npm install

# Set up environment file
cp .env.example .env


# Run migrations
php artisan migrate

# Seed the database
php artisan db:seed

# Link storage
php artisan storage:link

# Serve the application
php artisan serve


app/
├── Models/        # Eloquent models
database/
├── migrations/    # Table migrations
├── seeders/       # Data seeders
resources/
├── views/         # Blade templates
routes/
├── web.php        # Web routes
public/
├── assets/        # Static files (CSS/JS)
