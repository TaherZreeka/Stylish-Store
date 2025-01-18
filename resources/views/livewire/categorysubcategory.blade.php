<div>
    <select class="form-control" wire:model.live="selectCategory">
        <option value="">Select A Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <select class="form-control">
        <option value="">Select A SubCategory</option>
        @foreach ($subCategories as $subcategory)
        <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
        @endforeach
    </select>
</div>
