<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">{{ __("Edit product") }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="editProduct">
                @csrf
                <input type="hidden" value="id" id="valueId">

                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control" dusk="edit_name" name="edit_name" id="nameId">

                <div class="mb-3">
                    @include('products.categories')
                </div>

                <div class="mb-3">
                    <label for="create_description">{{ __('Description') }}</label>
                    <textarea class="form-control" id="description" name="description" cols="30" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="brand">{{ __('Brand') }}</label>
                    <input type="text" class="form-control" name="brand" id="brand" dusk="brand">
                </div>

                <div class="mb-3">
                    <label for="url_image">{{ __('URL Image') }}</label>
                    <input type="text" class="form-control" name="url_image" id="url_image" dusk="url_image" placeholder="https://image.png">
                </div>

                <label for="price" class="mt-3">{{ __('Price') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">DKK</span>
                    </div>
                    <input type="text" class="form-control" dusk="edit_price" name="edit_price" id="priceId">
                </div>
            </form>
        </div>
        <div class="mx-auto p-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
            <button dusk="edit-product"
                type="button"
                class="btn btn-success"
                data-dismiss="modal"
                onclick="editProduct()"
            >{{ __('Edit') }}</button>
        </div>
        </div>
    </div>
</div>
