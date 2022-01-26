@extends('app')

@section('content')

<!-- Button trigger modal -->
<div class="col-10 mx-auto m-4">
    <h5>{{ __('Products') }}</h5>
    <div>
        <a href="{{ route('product.index') }}"
            class="btn btn-secondary mb-2"
            style="float: right"
        >
            {{ __('Go back') }}
        </a>

        <div class="row">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="row">
            <p>
                {{ $product->description }}<br>
                Brand {{ $product->brand }}<br>
                ${{ $product->price }}<br>
            </p>
        </div>
        <div class="row">
            <img
                src="{{ $product->image }}"
                alt="{{ $product->name }}"
                class="rounded img-fluid"
            >
        </div>
    </div>
</div>

@endsection
