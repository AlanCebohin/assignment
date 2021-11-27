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
                <label for="create_name">{{ __('Name') }}</label>
                <input type="text" class="form-control" name="create_name" dusk="create_name">

                <label for="create_price" class="mt-3">{{ __('Price') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">{{ env('CURRENCY') }}</span>
                    </div>
                    <input type="text" class="form-control" name="create_price" dusk="create_price">
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
