@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Learning Vue</h1>
            <div class="card">
                <div class="card-header"> @{{ header }}

                <button class="btn btn-success btn-sm mx-1 float-right" v-if="state==='hide'" @click="changeState('show')">Add item</button>
                <button class="btn btn-danger  btn-sm mx-1 float-right" v-else @click="changeState('hide')">Cancel</button>
                </div>

                <div class="card-body">
                    <div class="form-row my-2" v-if="state==='show'">
                        <div class="col-8">
                            <input type="text" class="form-control" v-model="newItem" v-on:keyup.enter="saveItem">
                            <small class="form-text text-muted">Total chacters @{{charCount}}/50</small>
                        </div>
                        <div class="col-auto">
                            <button @click="saveItem" class="btn btn-primary" :disabled="isButtonDisabled()">Add new item</button>
                        </div>
                    
                    </div>

                    <ul class="list-group">
                        <li v-if="items.length === 0">There is no items</li>
                        <li v-for="item in reversedItems" class="list-group-item" :class="{striked:item.strikedout}" @click="toggleItem(item)"> <span>@{{item.label}}</span> </li>
                    </ul>
                    <input type="text" class="form-control my-2" v-model="link">
                    <a v-bind:href="link" target="_blank">Open new page</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection