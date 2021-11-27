@extends('app')

@section('content')

<!-- Button trigger modal -->
<div class="col-10 mx-auto m-4">
    <h5>{{ __('Products') }}</h5>
    <div>
        <button onclick="document.getElementById('createProduct').reset();"
            id="create-product"
            type="button"
            class="btn btn-success mb-2"
            data-toggle="modal"
            data-target="#createProductModal"
            style="float: right"
        >
            {{ __('Create product') }}
        </button>

        <table class="table border" id="table-products">
            <thead>
                <tr>
                    <th class="border">{{ __('Name') }}</th>
                    <th class="border">{{ __('Price') }}</th>
                    <th class="border">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
            @forelse ( $products as $product )
                <tr class="products" id="product-{{ $product->id }}">
                    <td
                        class="border"
                        id="product-name-{{ $product->id }}"
                    >
                        {{ $product->name }}
                    </td>
                    <td
                        class="border"
                        id="product-price-{{ $product->id }}"
                    >
                        {{ $product->price }}
                    </td>
                    <td>
                        <span dusk="edit-product-{{ $product->id }}"
                            class="pointer"
                            id="openModal"
                            data-toggle="modal"
                            data-target="#editProductModal"
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->name }}"
                            data-price="{{ $product->price }}"
                            onclick="setDataModal(this)"
                        >{{ __('Edit') }}</span> /
                        <span dusk="delete-product-{{ $product->id }}"
                            class="pointer"
                            data-toggle="modal"
                            onclick="youSure({{ $product }})"
                        >{{ __('Delete') }}</span>
                    </td>
                </tr>
            @empty
                <tr id="empty">
                    <td>
                        {{ __('There are no products yet') }}
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Modals -->
    @include('products.createProductModal')
    @include('products.editProductModal')
</div>

@endsection
