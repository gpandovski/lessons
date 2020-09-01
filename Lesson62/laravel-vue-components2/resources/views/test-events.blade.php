@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <coupon @applied="onCouponApplied"> </coupon>
            <h1 v-if="couponApplied">You used a coupon</h1>
        </div>
    </div>
</div>
@endsection

