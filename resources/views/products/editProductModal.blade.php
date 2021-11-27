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
