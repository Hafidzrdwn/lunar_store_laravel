<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class Wishlist extends Component
{
    public $wishlistItems = [
        [
            'id' => 1,
            'name' => 'Premium Mobile App',
            'description' => 'Advanced productivity app',
            'price' => 199000,
            'color' => 'blue'
        ],
        [
            'id' => 2,
            'name' => 'Game Currency Pack',
            'description' => 'Mobile Legends diamonds',
            'price' => 89000,
            'color' => 'purple'
        ]
    ];

    public function addToCart($itemId)
    {
        // Add to cart logic
        session()->flash('message', 'Item added to cart successfully!');
    }

    public function removeFromWishlist($itemId)
    {
        // Remove from wishlist logic
        $this->wishlistItems = collect($this->wishlistItems)->reject(fn($item) => $item['id'] == $itemId)->toArray();
        session()->flash('message', 'Item removed from wishlist!');
    }

    public function render()
    {
        return view('livewire.client.profile.wishlist');
    }
}
