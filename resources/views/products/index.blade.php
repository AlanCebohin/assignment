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
                    <th class="border">{{ __('Image') }}</th>
                    <th class="border">{{ __('Brand') }}</th>
                    <th class="border">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
            @forelse ( $products as $product )
                <tr class="products" id="product-{{ $product->slug }}">
                    <td
                        class="border"
                        id="product-name-{{ $product->slug }}"
                    >
                        <a id="product-show-{{ $product->slug }}" href="{{ route('product.show', $product->slug) }}">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td
                        class="border"
                        id="product-price-{{ $product->slug }}"
                    >
                        {{ $product->price }}
                    </td>
                    <td class="border w-25">
                        <img id="product-image-{{ $product->slug }}"
                            src="{{ $product->image }}"
                            alt="{{ $product->name }}"
                            class="rounded img-fluid w-25 p-3"
                        >
                    </td>
                    <td
                        class="border"
                        id="product-brand-{{ $product->slug }}"
                    >
                        {{ $product->brand }}
                    </td>
                    <td>
                        <span dusk="edit-product-{{ $product->id }}"
                            class="pointer"
                            id="openModal"
                            data-toggle="modal"
                            data-target="#editProductModal"
                            data-id="{{ $product->slug }}"
                            data-name="{{ $product->name }}"
                            data-price="{{ $product->price }}"
                            data-category="{{ $product->category_id }}"
                            data-description="{{ $product->description }}"
                            data-brand="{{ $product->brand }}"
                            data-url_image="{{ $product->image }}"
                            onclick="setDataModal(this)"
                            style="color: #3498db"
                        ><i class="fas fa-edit"></i></span>
                        <span dusk="delete-product-{{ $product->slug }}"
                            class="pointer"
                            data-toggle="modal"
                            onclick="youSure({{ $product }})"
                            style="color: #9b59b6"
                        ><i class="fas fa-trash-alt"></i></span>
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
            <tfoot>
                <tr>
                    <td colspan="5">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modals -->
    @include('products.createProductModal')
    @include('products.editProductModal')
</div>

@endsection
