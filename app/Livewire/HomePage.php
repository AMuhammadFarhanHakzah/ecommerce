<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('Homepage - M1l1Ze')]
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();


        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

}
