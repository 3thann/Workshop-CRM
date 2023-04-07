@echo off
title Installation du CRM
composer install && npm install && php artisan key:generate && php artisan migrate:fresh --seed && npm run dev
pause