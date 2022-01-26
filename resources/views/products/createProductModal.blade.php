<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="createProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">{{ __('Create product') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="createProduct" class="createProduct">
                <div class="mb-3">
                    <label for="create_name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" name="create_name" dusk="create_name">
                </div>

                <div class="mb-3">
                    @include('products.categories')
                </div>

                <div class="mb-3">
                    <label for="create_description">{{ __('Description') }}</label>
                    <textarea class="form-control" name="description" cols="30" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="brand">{{ __('Brand') }}</label>
                    <input type="text" class="form-control" name="brand" dusk="brand">
                </div>

                <div class="mb-3">
                    <label for="url_image">{{ __('URL Image') }}</label>
                    <input type="text" class="form-control" name="url_image" dusk="url_image" placeholder="https://image.png">
                </div>

                <div class="mb-3">
                    <label for="create_price" class="mt-3">{{ __('Price') }}</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">{{ env('CURRENCY') }}</span>
                        </div>
                        <input type="text" class="form-control" name="create_price" dusk="create_price">
                    </div>
                </div>
            </form>
        </div>
        <div class="mx-auto p-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
            <button onclick="createProduct()"
                id="save-product"
                type="button"
                class="btn btn-success"
                data-dismiss="modal"
            >{{ __('Create') }}</button>
        </div>
        </div>
    </div>
</div>
