<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pricing-plan.css') }}" rel="stylesheet">
    @stack('fontawesome')
    <style>
        .done {
            color: green;
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Plans selector -->
    <script type="text/x-template" id="plan-selector-template">
             <div class="plans">
                <plan-selector-item v-for="plan in plans" :name="plan" @select="selectPlan" :selected-plan="selectedPlan" ></plan-selector-item>
            </div>
    </script>

    <!-- Plan -->
    <script type="text/x-template" id="plan-selector-item-template">
        <div class="plan" @click="select" :class="{'active-plan': isSelected}">
            <div class="description">
                <span class="title">
                    @{{name}}
                </span>
            </div>
        </div>
    </script>

    <script type="text/x-template" id="card-layout-template">
        <div class="card">
            <div class="card-header">
                <slot name="header"></slot>
            </div>
            <div class="card-body">
                <slot name="body"></slot>
            </div>
        </div>
    </script>
    
    <script type="text/x-template" id="todo-item-template">
        <div>
            <input type="checkbox" v-model="completed">
            <span :class="{done: completed}">
                <slot></slot>
            </span>
            <p>
                <slot name="description"></slot>
            </p>
            
            <button type="submit" class="btn btn-primary">
                <slot name="button-text"></slot>
            </button>
        </div>
    </script>
</body>
</html>
