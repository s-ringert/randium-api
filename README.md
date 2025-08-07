# About
* Simple Laravel Backend to manage categories and items
* Laravel
* Filament
* MySQL

# Setup
## install application
```shell
sail up -d
sail composer install
sail artisan migrate:fresh --seed
```
## create user & bearer token
```shell
sail artisan make:filament-user
sail artisan create:token 1
```
# TODO
- filament category
- filament items
- filament user
