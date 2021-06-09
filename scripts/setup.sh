#!/bin/bash

# Determine the project root
project_root="$(dirname $(dirname $(realpath $0)) )"

# Copy environment-specific files
echo 'Copying environment-specific files...'
if [ ! -f "$project_root/.env" ]; then
    cp "$project_root/.env.example" "$project_root/.env"
fi

if [ ! -f ".php_cs" ]; then
    cp "$project_root/.php_cs.dist" "$project_root/.php_cs"
fi

# Install dependencies
echo 'Installing application dependencies...'
cd "$project_root"
composer install
npm install

echo 'Installing code quality tools...'
cd "$project_root/tools"
composer install

cd "$project_root"
husky install

# Generate application key
echo 'Generating the application key...'
cd "$project_root"
php artisan key:generate
