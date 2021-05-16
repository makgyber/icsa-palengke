<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Marketplace extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.marketplace', 
        [
            'products' => Product::paginate(12),
            'randImgs' => ['pizza.jpeg', 'fries.jpg', 'pancakes.webp']
        ]);

    }
}
