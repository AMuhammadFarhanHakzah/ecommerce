<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $total_count = 0;

    public function mount() {
        $cart_items = CartManagement::getCartItemsFromCookie();

        if(is_array($cart_items)){
            $this->total_count = count($cart_items);
        } else{
            $this->total_count = 0;
        }
    }

    #[On('update-cart-count')]
    public function updateCartCount($total_count) {
        $this->total_count = $total_count;
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
