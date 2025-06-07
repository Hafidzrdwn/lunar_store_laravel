<div class="p-8">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">My Wishlist</h1>
            <p class="text-gray-600">Items you've saved for later.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @foreach ($wishlistItems as $item)
                <div
                    class="bg-white rounded-3xl border border-gray-100 p-4 hover:shadow-2xl hover:shadow-gray-200/50 transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-full h-40 bg-gradient-to-br from-{{ $item['color'] }}-100 via-{{ $item['color'] }}-50 to-{{ $item['color'] }}-200 rounded-2xl mb-6 flex items-center justify-center shadow-inner group-hover:shadow-lg transition-shadow duration-300">
                        @include('components.client.icons.mobile', [
                            'class' => 'w-16 h-16 text-' . $item['color'] . '-600 drop-shadow-sm',
                        ])
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-gray-700 transition-colors">
                                {{ $item['name'] }}</h3>
                            <p class="text-gray-600 text-md">{{ $item['description'] }}</p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-blue-500 font-medium text-sm">Starting From</span>
                                <span class="text-lg font-semibold text-blue-500">Rp
                                    {{ number_format($item['price']) }}</span>
                            </div>
                            <div class="flex flex-col space-y-3">
                                <button wire:click="addToCart({{ $item['id'] }})"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-blue-500/25 active:scale-95">
                                    <i class="fas fa-cart-plus me-1"></i> Add to Cart
                                </button>
                                <button wire:click="removeFromWishlist({{ $item['id'] }})"
                                    class="w-full bg-gray-100 hover:bg-red-50 text-gray-700 hover:text-red-600 font-medium py-3 px-4 rounded-xl transition-all duration-200 border border-gray-200 hover:border-red-200">
                                    Remove from Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
