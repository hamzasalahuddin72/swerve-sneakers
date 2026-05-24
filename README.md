# SWERVE Sneakers

SWERVE is a prototype web application for a sneaker rental marketplace. The idea behind the project was to explore an alternative to traditional sneaker resale or purchase by creating a platform where users could browse, discover and rent sneakers for short-term use.

The project was built as an early full-stack prototype using HTML, CSS, JavaScript and PHP, with sneaker data pulled through an external API and account-related flows handled through PHP and MySQL.

## Project Idea

The original concept behind SWERVE was simple:

* make sneaker discovery feel modern and brand-led
* let users browse trending or branded sneakers in one place
* experiment with a rental-first user journey rather than a buy-only marketplace
* support basic account flows such as sign up, log in and password recovery
* include the supporting pages a real consumer platform would need, such as About, Help, Privacy Policy and Terms & Conditions

Instead of focusing only on sneaker ownership, the project was planned as a fashion-tech concept where users could temporarily access premium or desirable trainers through a rental flow.

## Original Planning Goals

From a product and interface perspective, the prototype was planned around five core goals:

### 1. Brand identity

Create a recognisable product name and landing page with a strong visual message around sneaker culture and rental.

### 2. Multi-page browsing experience

Build more than a single landing page by adding supporting pages and a clearer website structure.

### 3. Sneaker catalogue and product flow

Allow users to browse a sneaker listing page, filter by brand, and move into a more detailed product experience.

### 4. Rental interaction

Prototype how a rental journey might work by introducing rental actions, popups and duration-based interaction.

### 5. Authentication and supporting backend logic

Add basic signup, login and account handling to move the project beyond a purely static front-end demo.

## What Was Implemented

The repository currently includes a working prototype structure with multiple pages and features:

* **Landing page** with branding, navigation and featured sneaker sections
* **Sneaker catalogue page** powered through a PHP/API integration
* **Login and signup flow** using PHP and MySQL
* **Rental popup interaction** for sneaker detail/rental pages
* **Help, About, Terms, and Privacy pages** to simulate a fuller consumer product
* **JavaScript-based UI interactions** such as responsive navigation, popups and search-related controls

## Tech Stack

* HTML
* CSS
* JavaScript
* PHP
* MySQL
* External sneaker API

## Implementation Notes

This project was developed as a prototype rather than a production-ready platform. The main focus was on proving the concept and building an end-to-end user journey across the interface.

The implementation combines static pages with dynamic PHP handling. Front-end pages provide the browsing and brand experience, while PHP files handle sneaker retrieval and account-related logic. JavaScript is used for user interaction, including navigation behaviour, popup handling, and rental UI controls.

## Current Strengths

* Clear and memorable product concept
* Strong attempt at building a real consumer-facing platform rather than a basic coursework page
* Multi-page structure that goes beyond a single static mock-up
* Full-stack ambition through the use of front-end, backend and API integration

## Current Limitations

This repository reflects an early prototype stage and still needs substantial improvement before being treated as a polished portfolio project or production-ready application.

Key limitations include:

* authentication and security logic need to be rebuilt properly
* secrets and credentials must be removed from the codebase and history
* code structure needs refactoring for maintainability
* data flow and rental business logic need to be clarified
* the repository needs better documentation, screenshots and setup instructions

## Project Structure

```text
swerve-sneakers/
├── css/
├── index.html
├── sneakers.php
├── sneakers-redirect.php
├── sneakers-redirect.js
├── login.php
├── signup.php
├── userlogin.php
├── usersignup.php
├── forgotpassword.php
├── function.js
├── login.js
├── signup.js
├── about.html
├── help.html
├── privacypolicy.html
├── termsconditions.html
├── cart.html
├── popular.html
├── blog.html
└── reviews.php
```

## What I Learned

Building SWERVE helped me practise:

* designing a branded product concept from scratch
* structuring a multi-page web application
* combining front-end UI with PHP backend logic
* integrating third-party sneaker data into a web interface
* thinking about real user journeys such as signup, login, browsing and renting
* identifying the gap between a working prototype and a production-ready application

## Future Improvements

Planned improvements for the next version include:

* secure authentication with hashed passwords and proper verification
* environment variables for API keys and database credentials
* cleaner backend structure and reusable functions
* better product filtering and search
* a more complete rental system with pricing, availability, deposits and returns
* improved mobile responsiveness and accessibility
* screenshots, deployment instructions and clearer GitHub presentation

## Status

Prototype / early portfolio project.

This project demonstrates the original idea and implementation direction, but it still requires security, code quality and documentation improvements before being presented as a strong professional portfolio piece.
