# Cinephilia PHP MongoDB E-Shop

An e-commerce web application for eco-friendly movie posters inspired by cinema and independent artists.

This project was developed as part of the **E-Business** course and combines business analysis, user experience design, and web development. The platform supports customer and administrator workflows, shopping cart functionality, wishlists, product search, and order management.

## Related Project

This repository contains the **PHP and MongoDB implementation** of the Cinephilia e-commerce concept.

A second implementation of the same business idea, developed using Java, JSP, RESTful Web Services, and MySQL, can be found here: [[link] https://github.com/charis-ant/cinephilia-java-rest-eshop]

*The purpose of maintaining the two implementations separately is to demonstrate the same business concept using different technologies and architectural approaches.*

---

## Overview

**Cinephilia** is an online store specializing in eco-friendly decorative movie posters featuring designs inspired by classic and contemporary cinema.

The project was designed around a niche audience of movie enthusiasts and collectors while incorporating modern e-commerce practices such as responsive design, wishlists, voice search, and environmentally conscious branding.

### Business Concept

- Eco-friendly movie poster store
- Independent artists and unique designs
- Niche audience targeting movie enthusiasts
- Sustainable production philosophy
- European market orientation

**Slogan**

```text
Aesthetics & Cinema Combined.
```

## Features

### Customer Features

- User registration
- User login/logout
- Profile management
- Product browsing
- Product search
- Voice search
- Shopping cart management
- Wishlist management
- Product filtering
- Order placement
- Order history
- Responsive design

### Administrator Features

- Product management
  - Add products
  - Update products
  - Delete products

- User management
  - View users
  - Update user information
  - Delete user accounts
  - Add custom user fields

- Order management
  - View orders
  - Cancel orders


## E-Business Components

Beyond implementation, this project includes extensive business and UX analysis:

### Business Analysis

- Market research
- Competitive analysis
- SWOT analysis
- Business Model Canvas
- Proof of Concept validation

### User Research

- User requirements survey
- Customer interviews
- User Personas
- User Stories

### UX Design

- Visual Sitemap
- Wireframes
- High-fidelity Mockups
- Responsive design

### Branding

- Brand identity design
- Logo design
- Color palette definition
- Typography selection


## Modern E-Commerce Trends Implemented

The project incorporates several modern e-commerce practices:

- Green Consumerism
- Responsive Mobile Shopping
- Multiple Payment Methods
- Voice Search
- Wishlist Functionality
- User Personalization


## Technology Stack

### Frontend

- HTML
- CSS
- Bootstrap
- JavaScript
- jQuery

### Backend

- PHP

### Database

- MongoDB

### Development Tools

- XAMPP
- MongoDB Server


## Database Structure

Database:

```text
cinephiliaDB
```

### Users Collection

Contains:

- User information
- Shopping cart data
- Wishlist data
- Order history

### Products Collection

Contains:

- Product information
- Product categories
- Product pricing
- Product images

Database files are available in:

```text
database/
├── Products.json
└── Users.json
```


## Project Structure

```text
.
│
├── database/
│   ├── Products.json
│   └── Users.json
│
├── docs/
│   └── technical_and_business_report.pdf
│
├── WebContent/
│   ├── assets/
│   ├── cinephilia.css
│   ├── cinephilia.js
│   │
│   ├── cinephilia_home.php
│   ├── cinephilia_shop.php
│   ├── cinephilia_search.php
│   ├── cinephilia_cart.php
│   ├── cinephilia_account.php
│   ├── cinephilia_checkout.php
│   │
│   ├── cinephilia_admin_home.php
│   ├── cinephilia_admin_products.php
│   ├── cinephilia_admin_users.php
│   └── ...
│
└── README.md
```

## Running the Project

### Requirements

- PHP
- MongoDB
- XAMPP (Apache)
- Modern web browser

### Setup

1. Start MongoDB.
2. Start Apache through XAMPP.
3. Import the JSON files into MongoDB.
4. Copy the contents of `WebContent` into the web server directory.
5. Open:

```text
http://localhost/
```

6. Navigate through the application.

## Documentation

Full technical and business documentation is included in:

```text
docs/technical_and_business_report.pdf
```

The report contains:

- Business idea validation
- Market research
- Competitive analysis
- SWOT analysis
- Business Model Canvas
- User Personas
- User Stories
- Database analysis
- Wireframes and mockups
- Installation guide
- User manual

## Learning Outcomes


- E-commerce systems
- PHP web development
- MongoDB databases
- User authentication
- Shopping cart workflows
- Requirements analysis
- User research
- UX design
- Responsive web design
- Product validation
- Business modeling
- Technical documentation


## Academic Context

This project was completed individually as part of the E-Business course during my BSc studies in Digital Systems at the University of Piraeus.
