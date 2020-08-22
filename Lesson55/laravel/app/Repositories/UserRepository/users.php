<?php

return [
        [
            'id'=>15,
            'name'=>'Sally',
            'email'=>'sally@example.com',
            'password'=>Hash::make('secret'),
            'created_at'=> date('Y-m-d H:i:s', time())
    

        ],
        [
            'id'=>16,
            'name'=>'Rob',
            'email'=>'rob@example.com',
            'password'=>Hash::make('secret'),
            'created_at'=> date('Y-m-d H:i:s', time())

        ],
    ];