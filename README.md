## Overview

FasaLug Website Developed with Laravel 11.3(php 8.2) / Nodejs / Tailwindcss / HTML5 

## Prerequisites

Before running this application, ensure you have the following prerequisites installed:

- PHP >= 8.2 (you can use WAMMP , XAMMP , Laragon)
- Composer
- MySQL or any other compatible database (included inside WAMMP , XAMMP , Laragon , or you can use links)
- Node.js and NPM (for asset compilation)

## Installation

1. Clone the repository:
    
    bashCopy code
    
    `git clone https://github.com/FasaLug/FasaLug.git`
    
2. Navigate to the project directory:
    
    bashCopy code
    
    `cd FasaLug`  
3. Install PHP dependencies:
    
    Copy code
    
    `composer install`
    
4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database connection settings accordingly.
    
5. Generate the application key:
    
    vbnetCopy code
    
    `php artisan key:generate`
    
6. Run the database migrations to create necessary tables:
    
    Copy code
    
    `php artisan migrate`
    
7. (Optional) Seed the database with sample data:
    
    Copy code
    
    `php artisan db:seed`
    
8. Install Node.js dependencies and compile assets:
    
    arduinoCopy code
    
    `npm install && npm run dev`
    

## Usage

1. Start the development server:
    
    Copy code
    
    `php artisan serve`
    
2. Access the application in your web browser at `http://localhost:8000`.
    
3. Register a new user or login with existing credentials.
    
4. As an administrator, you can manage users, roles, and permissions from the admin dashboard.
    

## Contributing

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

#### Additional Resources

- [PHP Documentation](https://www.php.net/docs.php)
- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)


If you're looking for video tutorials to learn , Here's how you can find tutorials on these topics:

1. **PHP (with Laravel)**:
    
    - Search for "PHP tutorial" or "Laravel tutorial" on YouTube.
    - Look for channels that specialize in web development or PHP/Laravel specifically.
    - Check for tutorials that cover topics such as setting up Laravel, creating routes, controllers, views, migrations, and interacting with databases.
2. **Node.js**:
    
    - Search for "Node.js tutorial" on YouTube.
    - Look for tutorials that cover basic to advanced concepts of Node.js, including setting up a Node.js environment, working with npm packages, creating APIs, handling asynchronous operations, and using frameworks like Express.js.
3. **Tailwind CSS**:
    
    - Search for "Tailwind CSS tutorial" on YouTube.
    - Look for tutorials that introduce Tailwind CSS, demonstrate its utility-first approach, explain how to set it up in a project, and showcase its features for building responsive and customizable user interfaces.
