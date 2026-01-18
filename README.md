# WebCrafters-TY Business Website

A modern business website with a secure admin dashboard built using PHP, MySQL, Bootstrap, and modern UI principles.

This project represents a complete digital agency website with a contact system and an admin panel to manage incoming messages.

---

🚀 Features

* Modern responsive company website
* Contact form with database storage
* Admin login system
* Admin dashboard to manage messages
* Delete messages
* Change admin password
* Dark mode
* Arabic / English language support (RTL & LTR)
* Secure database connection

---

🛠 Technologies Used

* PHP
* MySQL
* Bootstrap 5
* HTML5
* CSS3
* JavaScript

---

📂 Project Structure

```
business-website/
│
├── index.php
├── contact.php
├── save.php
├── admin_login.php
├── admin_dashboard.php
├── delete_message.php
├── change_password.php
├── logout.php
├── config.php
├── database.sql
```

---

⚙ Installation

1. Clone the repository:

```
git clone https://github.com/your-username/webcrafters-ty-business-website.git
```

2. Move project to XAMPP htdocs:

```
C:\xampp\htdocs\business-website
```

3. Import database:

* Open phpMyAdmin
* Create database: `business_site`
* Import `database.sql`

4. Configure database connection:
   Edit `config.php`:

```php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "business_site";
```

5. Run project:

```
http://localhost/business-website
```

---

🔐 Admin Login

```
Username: admin
Password: 123456
```

---

👨‍💻 Developers

Taleb Amro
Yazan Mousa

WebCrafters-TY Digital Agency

---

📜 License

This project is open-source and free to use for learning and development purposes.
