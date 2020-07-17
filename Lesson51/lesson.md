# Lesson 51

### Seeders

Commands 

1. php artisan make:seeder PostSeeder
2. php artisan db:seed --class=UserSeeder
3. php artisan db:seed
4. php artisan migrate:fresh --seed

You might need to run ```composer dump-autoload``` (if changes in Seeders are not working)

### Authorization & Policies

Commans to create policy

1. php artisan help make:policy 
2. php artisan make:policy PostPolicy --model=Post