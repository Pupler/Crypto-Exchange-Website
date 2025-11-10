# 💶 Crypto-Exchange-Website

**Crypto-Exchange-Website** is a cryptocurrency exchange web application built with **PHP (Laravel)**. This project demonstrates a trading interface, database management, and responsive web design. It was designed as a **portfolio project** to showcase web development skills and familiarity with modern web technologies.

## 📸 Preview

<img width="1903" height="1080" alt="grafik" src="https://github.com/user-attachments/assets/c9911f1d-c36a-4cf7-88f3-b4e7dfa72337" />
<img width="1903" height="1030" alt="grafik" src="https://github.com/user-attachments/assets/79ba0f6d-40bf-47dd-9ce1-3fe9636819d0" />

## 🗂 Project Structure

| Folder / File | Description |
|----------------|-------------|
| `app/` | Contains the main application logic, controllers, models, and services. |
| `bootstrap/` | Framework bootstrap files. |
| `config/` | Configuration files for Laravel. |
| `database/` | Migrations, seeders, and database-related logic. |
| `public/` | Publicly accessible files, including CSS, JavaScript, and images. |
| `resources/` | Views, language files, and frontend assets. |
| `routes/` | Application route definitions (`web.php`, `api.php`). |
| `storage/` | Logs, cache, and compiled templates. |
| `tests/` | PHPUnit tests for application functionality. |

#### ⚙️ Additional Configuration and Project Files

| File | Description |
|------|-------------|
| `.editorconfig` | Editor configuration. |
| `.env.example` | Example environment variables. |
| `.gitattributes` | Git attributes configuration. |
| `.gitignore` | Ignored files for Git. |
| `README.md` | Project documentation. |
| `artisan` | Laravel command-line interface. |
| `composer.json`, `composer.lock` | PHP dependencies and package versions. |
| `package.json` | Node.js dependencies. |
| `phpunit.xml` | PHPUnit configuration. |
| `postcss.config.js`, `tailwind.config.js`, `vite.config.js` | Frontend build configuration for TailwindCSS and Vite. |

## ✨ Features

- Cryptocurrency trading interface  
- Database-driven application logic  
- Responsive web design using CSS  
- Portfolio demonstration of full-stack web development skills  

## 🛠 Technology Stack

- PHP 8+ (Laravel Framework)  
- MySQL  
- HTML5 / CSS3 / JavaScript 
- PHPUnit for testing  

## 🚀 Installation, Testing & Notes

```bash
# Clone the repository
git clone https://github.com/Pupler/Crypto-Exchange-Website.git
cd Crypto-Exchange-Website

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Configure environment variables
cp .env.example .env
# Update database and other configuration as needed

# Run migrations and seeders
php artisan migrate --seed

# Start development server
php artisan serve
npm run dev

# Run PHPUnit tests
php artisan test
```


## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## ℹ️ Notes

This project is a portfolio project and may not include full production-level features.
It is designed to demonstrate practical knowledge of Laravel, database handling, and frontend integration.
