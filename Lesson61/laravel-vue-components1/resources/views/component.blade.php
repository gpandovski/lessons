@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h4>Single use component</h4></div>

                <div class="card-body">

                        <progress-view inline-template>
                            <div>
                                <h1>Your progress through this course is @{{completionRate}}</h1>
                                <p><button @click="completionRate +=10" class="btn btn-primary">Update Completion Rate</button> </p>
                            </div>
                         </progress-view>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Single file component</div>

                <div class="card-body">
                    <event-list />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection