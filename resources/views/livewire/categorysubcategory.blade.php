<div>
    <label for="category_id" class="fw-bold mb-2">Select A Category for Your Product:</label>
    <select class="form-control mb-2" wire:model.live="selectCategory" name="category_id">
        <option value="">Select A Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <label for="subcategory_id" class="fw-bold mb-2">Select A SubCategory for Your Product:</label>
    <select class="form-control mb-2" name="subcategory_id">
        <option value="">Select A SubCategory</option>
        @foreach ($subCategories as $subcategory)
        <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
        @endforeach
    </select>
</div>