@extends('app')

@section('content')
    
<div class="col-10 mx-auto">
    <div class="row">
        <h1 class="mx-auto mt-5">
            Products
        </h1>
    </div>
    <div class="row">
        <h2 class="mx-auto mt-5">
            <a href="{{ route('product.index') }}">
                {{ __('Go to list') }}
            </a>
        </h2>
    </div>
</div>

@endsection