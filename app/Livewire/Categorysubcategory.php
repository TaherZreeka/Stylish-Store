<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class Categorysubcategory extends Component
{
    public $categories = [];
    public $selectCategory;
    public $subCategories = [];

    public function mount()
    {
        // جلب جميع الفئات عند تحميل المكون
        $this->categories = Category::all();
    }

    public function updatedSelectCategory($category_Id)
    {
        // جلب الفئات الفرعية بناءً على الفئة المحددة
        if ($category_Id) {
            $this->subCategories = Subcategory::where('category_id', $category_Id)->get();
        } else {
            $this->subCategories = []; // إعادة تعيين إذا لم يتم تحديد فئة
        }
    }

    public function render()
    {
        return view('livewire.categorysubcategory');
    }
}