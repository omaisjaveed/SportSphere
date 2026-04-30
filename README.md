# 🏆 SportSphere

A Laravel-based social sports platform where users can connect, chat, share posts, and access premium features.

---

## 🚀 Features

### 👤 User Features

* User registration & authentication
* Profile system with **verified badge (✔️)**
* Premium subscription with **double blue tick**
* Stripe payment integration

### 💬 Social & Chat

* Create and join **chat rooms**
* Real-time group chatting
* Users can delete only their own chat rooms

### 📝 Posts & Engagement

* Create posts with **#hashtags**
* Hashtag **auto-suggestion feature**
* Like and comment on posts

### 💳 Premium System

* Stripe-based payments
* Verified user badge
* Premium subscription system

### 🛠️ Admin Panel

* Full site management
* Dynamic content control for all pages
* User and activity management

---

## 🧑‍💻 Tech Stack

* **Backend:** Laravel
* **Frontend:** Blade / JS / CSS
* **Database:** MySQL
* **Payments:** Stripe

---

## ⚙️ Installation

```bash
git clone <your-repo-url>
cd project-folder
composer install
cp .env.example .env
php artisan key:generate
```

### Setup Database

* Create a database
* Update `.env` file

```bash
php artisan migrate
```

### Run Project

```bash
php artisan serve
```

---

## 🔐 Important Notes

* `.env` file is not included (security reasons)
* Run `composer install` to install dependencies

---

## 📌 Future Improvements

* Real-time notifications
* Mobile app integration
* Advanced search & filters

---

## 👨‍💼 Author

Developed by Omaisjaveed

---
