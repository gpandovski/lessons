<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue - routing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>
 
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <router-link to="/">Home</router-link>
            <router-link :to="{name: 'about'}">About</router-link>
            <router-link :to="{name: 'user', params: { username: 'john'}}">User</router-link>
            <hr>
            <router-view></router-view>
        </div>
    </body>
</html>
