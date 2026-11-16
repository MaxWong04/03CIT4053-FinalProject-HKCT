# 🌐 03CIT4053 Final Project - Dynamic Web Application
---
## 🎯 (Project Overview)
This project is the Final Project for the 03CIT4053 course, designed to develop a dynamic website system based on PHP and MySQL. The system provides a complete user authentication mechanism, event management functionality, user interaction pages, and email integration services, demonstrating modern web application backend logic and frontend interaction design.
---
## ✨Key Features
### 🔐 User Authentication System
- **English:** Provides secure registration, login, and password recovery functions, using Sessions to manage user states.
### 📅 Event Management Module
- **English:** Includes event listing browsing and event detail display, supporting dynamic data rendering.
### 📞 User Interaction Pages
- **English:** Features a contact us form and Frequently Asked Questions (FAQ) page to enhance user experience.
### 📊 Personalized Dashboard
- **English:** Provides a dedicated dashboard for logged-in users to manage personal information and view data.
### 📧 Email Integration
- **English:** Integrates Gmail API demo to implement the system's automatic notification email sending function.
---
## 🛠️ Tech Stack
| Tech Layer | Technologies Used |
|---|---|
| **(Backend)** | PHP 7.3+ |
| **(Database)** | MySQL / MariaDB |
| **(Frontend)** | HTML5, CSS3, JavaScript |
| **(Server)** | Apache (via XAMPP) |
| **(Version Control)** | Git & GitHub |
---
## 📁 Project Structure
```text
htdocs/
├── assets/              # 靜態資源資料夾 (Static resources folder: CSS, JS, Images)
├── dashboard/           # 使用者儀表板模組 (User dashboard module)
├── gmail_demo/          # Gmail API 整合示範 (Gmail API integration demo)
├── includes/            # 共用 PHP 元件 (Shared PHP components: header, footer, db config)
├── webalizer/           # 網站流量分析工具 (Website traffic analyzer - XAMPP default)
├── index.php            # 網站首頁/登入入口 (Website homepage/login entry)
├── login.php            # 使用者登入頁面 (User login page)
├── register.php         # 使用者註冊頁面 (User registration page)
├── contact.php          # 聯絡我們頁面 (Contact us page)
├── events.php           # 活動列表頁面 (Events listing page)
├── event-detail.php     # 活動詳情頁面 (Event detail page)
├── faq.php              # 常見問題頁面 (FAQ page)
├── forget-password.php  # 忘記密碼頁面 (Forgot password page)
└── text.php             # 文字內容處理頁 (Text content processing page)
