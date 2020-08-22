<?php

/*

Queues

email sending, video processing, third API calls, image processing

We can see queues like pizza time :

Think about one pizzeria receiving the orders via phone calls:

You can handle them Synchronous -> 
1) when order comes in 
2) you pickup the phone
3) you go immediatily make pizza
4) you jump into the car
5) you deliver it to the customer
6) you come back, and only on this point you answer on next call

Asynchronous approach
1) Phone calls - you take an order (but you dont do it yourself), put it on piece of paper
2) You throw this  on stack of yellow pieces of paper ( we will call this a queue ) - we throw a job into a queue 
3) you dont make the pizza you just take order and deliever it, so you just have pizza majstor, they have a stack of orders that they will need to make the
4) Important thing - when they work on making and delivering pizza - you works with customer and take orders, as quickly as possible
5) So the customers dont need to wait all process and get the pizza asap
6) so we do this to improve the response time for the user



Routes:



    // dispatch(function() {
    //     logger("I have to tell you something about the feature.");
    // })->delay(now()->addMinutes(2));

    // dispatch(new App\Jobs\ReconcileAccount(App\User::first()));
    // return "Finished";

    // ReconcileAccount::dispatch();
    
logger("hello there");
return "Finished";

 composer require predis/predis
 redis-cli set foo bar
 redis-cli get foo

 refresh the page - look in logs : there is nothing
 php artisan ( look at queue section);

 we need to run worker

 php artisan queue:work

 if its on we will see immidiately that work is done
 Ctrl+C - close

 Show delay in minutes

     dispatch(function() {
        logger("I have to tell you something about the feature.");
    })->delay(now()->addMinutes(2));

    we can run queues with clousure or JobClass

    User sign up - 30 minutes after user registered


    --- Part 2

    php artisan help make:job

    php artisan make:job ReconcileAccount  (sync or async?)
    php artisan make:job ReconcileAccount --sync (sync or async?)
    overview the Jobs/ReconcileAccount.php job class

    function handle()
    logger("Recocile the user");

    In route:

    dispatch(new ReconcileAccount)

    // SerializeModels - helps to serizalize eloquent model class
    // explain we can add any dependency in handle() method

    if we make the file in handle method it will not be created untill we restart the queue
    because queue is hanging in the memory
    its relate to the CODE itself, code will not be picked up in memory

    Important thing to understand -> if you run artisan queue

    php artisan help queue:work
    - it runs as a __ deamon __ - its running in the memory and all changes you have made are not will be done untill you restart the queue

    php artisan work:restart

    overview the Dispatchable trait


    Happy path:

    What if error ?

    throw new \Exception("Whoops!"); in handle() method

    refresh the page: see in terminal queue is running all time

    Set a tries - how many times I should try this job and throuw away
    php artisan help queue:work


    php artisan queue:work --tries=3

    Ok where this failed jobs will go?

    php artisan  - queue:failed + queue:failed-table

    Show failed jobs table,

    If we run the queue again it will not run this job it will stay in failed jobs 

    Restart:

    php artisan queue:retry 1 or allow

    run again:

    php artisan queue:work --tries=3

    - now it will process the job

    Remember every time you run queue worker set minumum number of tries

    Laravel Horizon

    Installation
    composer require laravel/horizon
    php artisan horizon:install

    php artisan horizon:publish
    

    look in config file:

    in Providers look into Service provider
    specify sms/email/slack notification will come
    Authorization gate

    In public/vendor/horizon you have your horizon files

    If not active - you need to run 
    php artisan horizon
    as queue:work + horizon stuff

    https://laravel-queue.test/horizon

    Show completed jobs,
    Show failed jobs

    Dont forget to restart horizon

    Make overview of Horizon web view

    Horizon tags:

    add In job file:

    public function tags() {
        return ['accounts'];
    }

    Authorization : 
    add to gate 'john@example.com' 
*/