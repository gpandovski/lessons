# Laravel artisan commands

More commands are available if you type ```php artisan help```    

### Controllers

```php artisan help make:controller```  - Controller generation help.   
```php artisan make:controller ProjectsController```  - generate ProjectsController class ( empty ).   
```php artisan make:controller ProjectsController -r```  - Generate Resourse controller with resourse actions (index, create, edit, destroy, store, show, update).   
```php artisan make:controller ProjectsController -r -m ModelName ```  - Generate Resourse controller with model.   


### Database

```php artisan migrate``` - migrate database.   
```php artisan migrate:rollback``` - rollback (undo) last migration, which you run with command "php artisan migrate".   
```php artisan migrate:fresh``` - remove everything (all tables with all data) from database.   
```php artisan migrate:migration create_tableName_table``` - create migration, where "tableName" your table name in database for example - posts, articles, users.   

### Models

```php artisan make:model Posts``` - generate model Posts.   
```php artisan make:model Posts -mc``` - generate model Posts, migration create_posts_table and PostController.    

