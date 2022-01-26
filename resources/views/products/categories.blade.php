<label for="create_name">{{ __('Category') }}</label>
<select class="form-select form-control category" 
    name="category_id"
    aria-label="Default select example"
>
    <option value="">Select Category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>