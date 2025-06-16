<?php

namespace App\Livewire\Client;

use App\Services\Client\ProductService;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Product Details')]
class ProductDetails extends Component
{
    public $productId;
    public $product = null;

    // Form data - these will be updated by JavaScript
    public $selectedPlan = null;
    public $selectedDuration = null;
    public $selectedPrice = 0;
    public $selectedPlanText = '-';
    public $selectedDurationText = '-';

    protected $productService;

    public function boot(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function mount($id)
    {
        $this->productId = $id;
        $this->loadProduct();
    }

    public function loadProduct()
    {
        $this->product = $this->productService->getProductDetails($this->productId);

        if (!$this->product) {
            abort(404, 'Product not found');
        }
    }

    public function addToCart()
    {
        try {
            if (!$this->selectedDuration) {
                session()->flash('error', 'Please select a duration');
                return;
            }

            $cartData = [
                'product_id' => $this->productId,
                'product_detail_id' => $this->selectedDuration,
                'plan_id' => $this->selectedPlan,
                'price' => $this->selectedPrice,
                'quantity' => 1
            ];

            $this->productService->addToCart($cartData);

            session()->flash('success', 'Item added to cart successfully!');
            $this->dispatch('cart-updated');
            $this->dispatch('show-success-modal');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to add item to cart. Please try again.');
        }
    }

    public function formatPrice($price)
    {
        return $this->productService->formatPrice($price);
    }

    public function render()
    {
        return view('livewire.client.product-details');
    }
}
