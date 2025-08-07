🎯 Objective
This project converts a static HTML blog page into a dynamic and maintainable Laravel application using Blade templating. The goal is to demonstrate proficiency with layouts, components, Blade directives, and Laravel form handling.

✅ Features & Structure
🔧 1. Setup & Layout
A fresh Laravel project was created.

A base layout file layouts/app.blade.php was built using:

@extends, @section, and @yield to structure dynamic content.

Tailwind CSS and FontAwesome linked via CDN and @vite for local resources.

🧩 2. Components & Partials
Shared UI sections were extracted into reusable partials:

layouts/partials/navbar.blade.php

layouts/partials/footer.blade.php

layouts/partials/about.blade.php

layouts/partials/categories.blade.php

layouts/partials/newsLetter.blade.php

layouts/partials/popularTags.blade.php

layouts/partials/profileNavbar.blade.php

layouts/partials/login.blade.php

layouts/partials/register.blade.php

📄 3. Page Conversion
Multiple dynamic views were created:

home/index.blade.php

posts/index.blade.php

categories/show.blade.php

profile/index.blade.php

single/index.blade.php


These pages extend the base layout and include relevant components.

🎨 4. Styling & Assets
All custom styles and scripts were moved to resources/css/style.css and resources/js/script.js.

Assets are linked using Blade’s asset() or @vite() helper for proper loading.


📌 Blade Features Used
@extends, @section, @yield

@include for partials/components

Blade syntax for conditionals and loops (where required)

Asset management using @vite and asset() helpers

🚀 How to Run

# Install dependencies

# 📦 Install PHP dependencies
composer install

# ⚙️ Copy .env file
cp .env.example .env

# 🔑 Generate application key
php artisan key:generate

# 💻 Install JS dependencies and compile assets
npm install && npm run dev



# Serve the project
php artisan serve and npm run dev
🔗 Repository
[Provide your GitHub repo link here once uploaded.](https://github.com/Omarabdullah99/ic-assignment1)

