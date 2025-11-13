
# Student Result Management System

> A web-based application for managing student results in schools and colleges.

## Table of Contents
- [Overview](#overview)  
- [Features](#features)  
- [Tech Stack](#tech-stack)  
- [Project Structure](#project-structure)  
- [Installation](#installation)  
- [Usage](#usage)  
- [Screenshots](#screenshots)  
- [Future Enhancements](#future-enhancements)  
- [Author](#author)  
- [License](#license)  

---

## Overview  
This “Student Result Management System” (SRMS) allows educational institutions to manage student data, subjects, examination results and reporting in one platform.  
Built using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**, it provides a user-friendly interface for admins and students alike.

---

## Features  
- Admin login and access control  
- Add/Edit/Delete student details, subjects, and results  
- Automatic calculation of total marks, percentage, and grade  
- Students can search their result via roll number  
- Responsive design suitable for desktop and mobile devices  

---

## Tech Stack  
- Front-end: HTML5 · CSS3 · JavaScript  
- Back-end: PHP (Server-side scripting)  
- Database: MySQL  
- Environment: XAMPP / WAMP / LAMP (Apache + MySQL)  

---

## Project Structure  
```

student-result-management-system/
│
├── admin/                  # Admin dashboard pages
│   ├── add-student.php
│   ├── manage-results.php
│   └── …
│
├── includes/               # Configurations and session handling
│   ├── config.php
│   ├── dbconnect.php
│   └── session.php
│
├── assets/                 # CSS, JS, image files
├── index.php               # Student result search page
└── result.php              # Display student result page

```

---

## Installation  
### Prerequisites  
- A web server running PHP (e.g., XAMPP or WAMP)  
- MySQL database  

### Setup Steps  
1. Copy the project folder into your server’s root (e.g., `htdocs/` in XAMPP)  
2. Create a database (for example: `srms_db`) via phpMyAdmin  
3. Import the SQL file if included (e.g., `database/srms_db.sql`)  
4. Configure the connection in `includes/config.php` (database host, user, password)  
5. Start Apache + MySQL and visit:  
```

[http://localhost/student-result-management-system/](http://localhost/student-result-management-system/)

```
6. Log in as admin (default credentials, if provided)  

---

## Usage  
- Navigate to Admin → Login → Add students, subjects  
- Enter examination results → System computes total and percentage  
- Students can open main page → Enter roll number → View result  
- Admin can edit or remove records as needed  

---

## Screenshots  
![Dashboard](assets/screenshot1.png)  
![Result Search](assets/screenshot2.png)  

---

## Future Enhancements  
- Add charts/analytics for student performance  
- Student login portal with secured access  
- Export results as PDF or Excel  
- Email notification when results are published  

---

## Author  
**Karthik Rajesh Shet**  
MCA Graduate | Full Stack Developer  
GitHub: [karthikrshet](https://github.com/karthikrshet)  
Email: <kartikrshet@gmail.com>

---

## License  
This project is licensed under the MIT License — see the `LICENSE` file for details.
```

