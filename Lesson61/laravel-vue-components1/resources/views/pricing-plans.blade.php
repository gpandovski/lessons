@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title">Pricing plans</h1>

            <h2 class="subtitle">
                Please choose one of our pricing plans
            </h2>

            <plan-selector /> 
 
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
 
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- <coupon @applied="onCouponApplied"></coupon>
            <h1 v-if="couponApplied">You used a coupon</h1> -->
        </div>
    </div>
</div>

@endsection