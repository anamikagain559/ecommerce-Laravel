# Laravel E-Commerce Application

A fully-featured E-Commerce web application built with Laravel. This project includes multi-authentication for Admins and Users, advanced product management, shopping cart functionality, and secure payment gateways.

## 🚀 Features

- **Multi-Authentication System:** Separate login and dashboard for Admin and Users.
- **Product Management:** Dynamic categories, subcategories, and brand management.
- **Shopping Cart & Checkout:** Add to cart, update quantity, and smooth checkout process.
- **Wishlist:** Users can save their favorite products.
- **Payment Gateways:**
  - Stripe Integration (Credit/Debit Cards)
  - Cash on Delivery (COD)
- **Order Management:** Admins can view, process, and track pending orders.
- **Responsive UI:** Fully responsive frontend design for mobile and desktop viewing.

## 🛠️ Tech Stack

- **Framework:** Laravel 9 (Upgraded)
- **Frontend:** HTML, CSS, Bootstrap, jQuery, AJAX
- **Database:** MySQL
- **Payment API:** Stripe

## ⚙️ Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/anamikagain559/ecommerce-Laravel.git
   cd ecommerce-Laravel
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   Copy the example environment file and set your database credentials.
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Database Configuration:**
   Update your `.env` file with your database name (e.g., `multiauth`):
   ```env
   DB_DATABASE=multiauth
   DB_USERNAME=root
   DB_PASSWORD=
   
   STRIPE_SECRET=your_stripe_secret_key
   ```
   *Note: Ensure you add your Stripe Secret Key to process payments.*

6. **Run Migrations or Import SQL:**
   You can either import the provided `multiauth.sql` file directly into your MySQL database.

7. **Start the Development Server:**
   ```bash
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000` in your browser.

## 📄 License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).
