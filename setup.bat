@echo off
title Installation du CRM
composer install
npm install
npm run dev
php artisan key:generate
php artisan migrate:fresh --seed
pause