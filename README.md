![image](https://github.com/user-attachments/assets/0b78f68d-2094-4985-9b76-c457a98d7c28)
# Quote Generator

## Overview
This project is a simple web-based "Random Quote Generator" that fetches a random quote from a MySQL database. The application is built using HTML, CSS, JavaScript, PHP, and MySQL, and runs locally using XAMPP.

---

## How to Run the Project

1. **Install XAMPP**:
   - Download and install [XAMPP](https://www.apachefriends.org/download.html).
   - Launch XAMPP and start both **Apache** and **MySQL**.

2. **Create MySQL Database and Table**:
   - Open [phpMyAdmin](http://localhost/phpmyadmin) in your browser.
   - Create a new database named `ai_quotes`.
   - Inside the `ai_quotes` database, create a table named `quotes` with the following fields:
     - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
     - `quote_text` (TEXT)
     - `author` (VARCHAR(100))

3. **Add Quotes to the Table**:
   - Manually add a few quotes to the `quotes` table through phpMyAdmin.

4. **Place the Files in XAMPP's htdocs Directory**:
   - Place your project folder (e.g., `quote-generator`) inside the `C:\xampp\htdocs\` directory.
   - Your folder structure should look like this:
     ```
     C:\xampp\htdocs\quote-generator\
     ├── index.html
     ├── styles.css
     ├── app.js
     └── server\
         └── fetch_quote.php
     ```

5. **Access the App**:
   - Open your browser and go to `http://localhost/quote-generator/` to view the app.

---

## Technologies Used
- **XAMPP (Apache & MySQL)**: Local server setup.
- **HTML**: Structure of the page.
- **CSS**: Page styling.
- **JavaScript**: Fetching data from PHP using AJAX.
- **PHP & MySQL**: Backend to retrieve random quotes from the database.

---

## Features
- Click the "Get Quote" button to fetch and display a random quote from the MySQL database.

---

## Troubleshooting
- **No quote displayed**: Ensure that the MySQL server is running and the `quotes` table has data.
- **Connection issues**: Verify your MySQL credentials in the PHP file and ensure that XAMPP is running.

---

## License:
This project is open source under the [MIT License](https://opensource.org/licenses/MIT).
