@extends('app')

@section('content')
    
<div class="col-10 mx-auto">
    <div class="row">
        <h1 class="mx-auto mt-5">
            <img src="https://calcueasy.com/wp-content/uploads/2018/01/calcueasy_logo_blue_retina.png" alt="">
        </h1>
    </div>
    <div class="row">
        <h2 class="mx-auto mt-5">
            <a href="{{ route('product.index') }}">
                {{ __('Products') }}
            </a>
        </h2>
    </div>
</div>

@endsection