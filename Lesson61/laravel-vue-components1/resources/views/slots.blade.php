@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <card-layout>
                <template #header>
                    <h1>Header</h1>
                </template>
                <template #body>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, qui?</p>
                    
                    <todo-item>
                        What to do?
                        <template #description> Checkbox description </template> 
                        <template #button-text> Make a choice </template> 
                    </todo-item>

                    <todo-item>
                        Todo 2
                        <template #description> Checkbox description </template> 
                        <template #button-text> Make a choice </template> 
                    </todo-item>

                    <todo-item>
                        Todo 3
                        <template #description> Checkbox description </template> 
                        <template #button-text> Make a choice </template> 
                    </todo-item>
                </template>
            </card-layout>

        </div>
    </div>
</div>
@endsection
