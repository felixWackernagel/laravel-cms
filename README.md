# laravel-cms
Example website with laravel 8 and custom cms.

# php commands
- get all artisan commands: [project-root] php artisan list
- start local app server: [project-root] php artisan serve
- create new controller: [project-root] php artisan make:controller MyControllerName
- get all url routes: [project-root] php artisan route:list
- create new migration: [project-root] php artisan make:migration myposts
- run migrations: [project-root] php artisan migrate

# mysql commands
- login: mysql -u root -p -h localhost
- list databases: show databases;
- create database: create database <database-name>;
- use database: use <database-name>;
- list tables: show tables;
- show table schema: desc <table-name>;
- logout: exit

# js and css resources
All resources bundled with webpack in webpack.mix.js. It compiles scss and js and 
copied everything to public folder.

- compile resources: [project-root] npx mix