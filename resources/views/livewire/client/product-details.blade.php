@push('styles')
    <style>
        :root {
            --primary-blue: #2563eb;
            --primary-blue-dark: #1d4ed8;
            --primary-blue-light: #3b82f6;
            --accent-blue: #60a5fa;
            --success-green: #10b981;
            --warning-amber: #f59e0b;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
        }

        * {
            box-sizing: border-box;
        }

        .product-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .product-header {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            margin-bottom: 2rem;
            border: 1px solid var(--gray-100);
        }

        .product-info {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            padding: 3rem;
            align-items: center;
        }

        .product-image-container {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: var(--gray-50);
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        .product-details h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .category-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);
        }

        .product-description {
            font-size: 1.125rem;
            color: var(--gray-600);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .product-note {
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            border: 1px solid #f59e0b;
            border-radius: 12px;
            padding: 1rem;
            margin-top: 1rem;
        }

        .product-note-content {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .product-note-icon {
            color: var(--warning-amber);
            font-size: 1.25rem;
            margin-top: 0.125rem;
        }

        .product-note-text {
            color: #92400e;
            font-weight: 500;
            font-size: 0.875rem;
        }

        .plans-section {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            border: 1px solid var(--gray-100);
        }

        .plans-header {
            padding: 2rem 3rem;
            border-bottom: 1px solid var(--gray-100);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .plans-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .plans-subtitle {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-blue));
            border-radius: 2px;
        }

        .add-to-cart-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-to-cart-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.4);
        }

        .add-to-cart-btn:disabled {
            background: var(--gray-400);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .add-to-cart-btn.success-animation {
            animation: successPulse 0.6s ease;
        }

        @keyframes successPulse {
            0% {
                background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            }

            50% {
                background: linear-gradient(135deg, var(--success-green), #059669);
            }

            100% {
                background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            }
        }

        .plans-content {
            padding: 3rem;
        }

        .plans-grid {
            display: grid;
            gap: 2rem;
        }

        .plans-grid.with-types {
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        }

        .plans-grid.without-types {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .plan-card {
            border: 2px solid var(--gray-200);
            border-radius: 16px;
            padding: 2rem;
            background: white;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .plan-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-blue));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .plan-card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-4px);
            box-shadow: 0 12px 25px -5px rgba(37, 99, 235, 0.25);
        }

        .plan-card:hover::before {
            transform: scaleX(1);
        }

        .plan-card.selected {
            border-color: var(--primary-blue);
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            transform: translateY(-4px);
            box-shadow: 0 12px 25px -5px rgba(37, 99, 235, 0.25);
        }

        .plan-card.selected::before {
            transform: scaleX(1);
        }

        .plan-header {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .plan-radio {
            width: 24px;
            height: 24px;
            border: 2px solid var(--gray-300);
            border-radius: 50%;
            position: relative;
            cursor: pointer;
            transition: all 0.2s ease;
            flex-shrink: 0;
            margin-top: 0.25rem;
        }

        .plan-radio.selected {
            border-color: var(--primary-blue);
            background: var(--primary-blue);
        }

        .plan-radio.selected::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
        }

        .plan-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .plan-description {
            color: var(--gray-600);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .durations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .duration-card {
            border: 1px solid var(--gray-200);
            border-radius: 12px;
            padding: 1rem;
            background: white;
            cursor: pointer;
            transition: all 0.2s ease;
            position: relative;
        }

        .duration-card:hover {
            border-color: var(--primary-blue);
            background: var(--gray-50);
        }

        .duration-card.selected {
            border-color: var(--primary-blue);
            background: var(--primary-blue);
            color: white;
            transform: scale(1.02);
        }

        .duration-card.selected .duration-price {
            color: white;
        }

        .duration-name {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 0.5rem;
        }

        .duration-card.selected .duration-name {
            color: white;
        }

        .duration-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .duration-notes {
            font-size: 0.75rem;
            color: var(--gray-500);
            margin-top: 0.25rem;
        }

        .duration-card.selected .duration-notes {
            color: rgba(255, 255, 255, 0.8);
        }

        .no-types-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 2rem;
            text-align: center;
        }

        .duration-card-large {
            border: 2px solid var(--gray-200);
            border-radius: 16px;
            padding: 2rem;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
        }

        .duration-card-large:hover {
            border-color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.2);
        }

        .duration-card-large.selected {
            border-color: var(--primary-blue);
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.4);
        }

        .duration-card-large .duration-name {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .duration-card-large .duration-price {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .duration-card-large.selected .duration-name,
        .duration-card-large.selected .duration-price,
        .duration-card-large.selected .duration-notes {
            color: white;
        }

        .best-value-badge {
            position: absolute;
            top: -8px;
            right: 1rem;
            background: linear-gradient(135deg, var(--success-green), #059669);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(4px);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: translateY(20px) scale(0.95);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0) scale(1);
        }

        .modal-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .modal-subtitle {
            color: var(--gray-600);
        }

        .order-summary {
            background: var(--gray-50);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .summary-row:last-child {
            margin-bottom: 0;
            padding-top: 0.75rem;
            border-top: 1px solid var(--gray-200);
            font-weight: 600;
        }

        .summary-label {
            color: var(--gray-600);
        }

        .summary-value {
            font-weight: 500;
            color: var(--gray-900);
        }

        .total-price {
            font-size: 1.25rem;
            color: var(--primary-blue);
        }

        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .btn-secondary {
            background: white;
            border: 2px solid var(--gray-300);
            color: var(--gray-700);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            border-color: var(--gray-400);
            background: var(--gray-50);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px -2px rgba(37, 99, 235, 0.3);
        }

        .success-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, var(--success-green), #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }

        .success-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .not-found {
            text-align: center;
            padding: 4rem 2rem;
        }

        .not-found-icon {
            font-size: 4rem;
            color: var(--gray-400);
            margin-bottom: 1rem;
        }

        .not-found h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .not-found p {
            color: var(--gray-600);
            margin-bottom: 2rem;
        }

        .btn-link {
            background: var(--primary-blue);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
            display: inline-block;
        }

        .btn-link:hover {
            background: var(--primary-blue-dark);
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                padding: 1rem;
            }

            .product-info {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 2rem;
            }

            .product-details h1 {
                font-size: 2rem;
            }

            .plans-header {
                padding: 1.5rem 2rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .plans-content {
                padding: 2rem;
            }

            .plans-grid.with-types {
                grid-template-columns: 1fr;
            }

            .plans-grid.without-types {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .durations-grid {
                grid-template-columns: 1fr;
            }

            .modal-actions {
                flex-direction: column;
            }

            .success-actions {
                flex-direction: column;
            }
        }

        .plan-card,
        .duration-card,
        .duration-card-large {
            cursor: pointer;
        }

        .plan-card *,
        .duration-card *,
        .duration-card-large * {
            cursor: inherit;
        }
    </style>
@endpush

<div class="product-container">
    @if ($product)
        <!-- Product Header -->
        <div class="product-header">
            <div class="product-info">
                <div class="product-image-container">
                    @if ($product['cover_img'])
                        <img src="{{ asset('uploads/' . $product['cover_img']) }}" alt="{{ $product['app_name'] }}"
                            class="product-image"
                            onerror="this.src='https://placehold.co/400x400?text={{ $product['app_name'] }}'">
                    @else
                        <img src="https://placehold.co/400x400?text={{ $product['app_name'] }}"
                            alt="{{ $product['app_name'] }}" class="product-image">
                    @endif
                </div>

                <div class="product-details">
                    <h1>{{ $product['app_name'] }}</h1>
                    <div class="category-badge">{{ $product['category'] }}</div>
                    <p class="product-description">{{ $product['description'] }}</p>

                    @if ($product['notes'])
                        <div class="product-note">
                            <div class="product-note-content">
                                <i class="fas fa-exclamation-triangle product-note-icon"></i>
                                <div class="product-note-text">
                                    <strong>Important Note:</strong> {{ $product['notes'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Plans Section -->
        <div class="plans-section">
            <div class="plans-header">
                <div>
                    <h2 class="plans-title">Choose Your Plan</h2>
                    <div class="plans-subtitle"></div>
                </div>
                <button type="button" id="addToCartBtn" class="add-to-cart-btn" disabled>
                    <i class="fas fa-shopping-cart"></i>
                    Add to Cart
                </button>
            </div>

            <div class="plans-content">
                @if ($product['have_product_type'])
                    <div class="plans-grid with-types">
                        @foreach ($product['plans'] as $plan)
                            <div class="plan-card" data-plan-id="{{ $plan['id'] }}"
                                data-plan-name="{{ $plan['name'] }}">
                                <div class="plan-header">
                                    <div class="plan-radio" data-plan="{{ $plan['id'] }}"></div>
                                    <div class="plan-info">
                                        <h3>{{ $plan['name'] }}</h3>
                                        @if ($plan['description'])
                                            <p class="plan-description">{{ $plan['description'] }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="durations-grid">
                                    @foreach ($plan['durations'] as $duration)
                                        <div class="duration-card" data-plan="{{ $plan['id'] }}"
                                            data-duration="{{ $duration['id'] }}"
                                            data-price="{{ $duration['price'] }}"
                                            data-duration-text="{{ $duration['duration'] }}">
                                            <div class="duration-name">{{ $duration['duration'] ?: 'No Duration' }}
                                            </div>
                                            <div class="duration-price">{{ $this->formatPrice($duration['price']) }}
                                            </div>
                                            @if ($duration['notes'])
                                                <div class="duration-notes">{{ $duration['notes'] }}</div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="no-types-title">Select Your Duration</h3>
                    <div class="plans-grid without-types">
                        @foreach ($product['durations'] as $duration)
                            <div class="duration-card-large" data-duration="{{ $duration['id'] }}"
                                data-price="{{ $duration['price'] }}"
                                data-duration-text="{{ $duration['duration'] }}">
                                <div class="best-value-badge">Best Value</div>
                                <div class="duration-name">{{ $duration['duration'] }}</div>
                                <div class="duration-price">{{ $this->formatPrice($duration['price']) }}</div>
                                @if ($duration['notes'])
                                    <div class="duration-notes">{{ $duration['notes'] }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal-overlay" id="confirmModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Confirm Your Order</h3>
                    <p class="modal-subtitle">Please review your selection before adding to cart</p>
                </div>

                <div class="order-summary">
                    <div class="summary-row">
                        <span class="summary-label">Product:</span>
                        <span class="summary-value">{{ $product['app_name'] }}</span>
                    </div>

                    @if ($product['have_product_type'])
                        <div class="summary-row">
                            <span class="summary-label">Plan:</span>
                            <span class="summary-value" id="modalPlan">-</span>
                        </div>
                    @endif

                    <div class="summary-row">
                        <span class="summary-label">Duration:</span>
                        <span class="summary-value" id="modalDuration">-</span>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Total Price:</span>
                        <span class="summary-value total-price" id="modalPrice">Rp 0</span>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-secondary" id="cancelBtn">Cancel</button>
                    <button type="button" class="btn-primary" id="confirmBtn">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Success Modal -->
        <div class="modal-overlay" id="successModal">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3 class="modal-title">Successfully Added!</h3>
                    <p class="modal-subtitle">Your item has been added to the cart</p>
                </div>

                <div class="success-actions">
                    <a href="{{ route('catalog') }}" class="btn-secondary">Continue Shopping</a>
                    <a href="" class="btn-primary">View Cart</a>
                </div>
            </div>
        </div>
    @else
        <div class="not-found">
            <div class="not-found-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <h3>Product Not Found</h3>
            <p>The product you're looking for doesn't exist or is no longer available.</p>
            <a href="{{ route('catalog') }}" class="btn-link">Browse Products</a>
        </div>
    @endif
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
                    // State variables
                    let selectedPlan = null;
                    let selectedDuration = null;
                    let selectedPrice = 0;
                    let selectedPlanText = '-';
                    let selectedDurationText = '-';
                    let hasProductType = {{ $product['have_product_type'] ? 'true' : 'false' }};

                    // DOM elements
                    const addToCartBtn = document.getElementById('addToCartBtn');
                    const confirmModal = document.getElementById('confirmModal');
                    const successModal = document.getElementById('successModal');
                    const cancelBtn = document.getElementById('cancelBtn');
                    const confirmBtn = document.getElementById('confirmBtn');

                    const modalPlan = document.getElementById('modalPlan');
                    const modalDuration = document.getElementById('modalDuration');
                    const modalPrice = document.getElementById('modalPrice');

                    const planCards = document.querySelectorAll('.plan-card');
                    const durationCards = document.querySelectorAll('.duration-card, .duration-card-large');

                    // Utility functions
                    function formatRupiah(price) {
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0
                        }).format(price);
                    }

                    function updateButtonState() {
                        const isEnabled = hasProductType ? (selectedPlan && selectedDuration) : selectedDuration;
                        addToCartBtn.disabled = !isEnabled;
                    }

                    function updateLivewireState() {
                        if (typeof @this !== 'undefined') {
                            @this.set('selectedPlan', selectedPlan);
                            @this.set('selectedPlanText', selectedPlanText);
                            @this.set('selectedDuration', selectedDuration);
                            @this.set('selectedDurationText', selectedDurationText);
                            @this.set('selectedPrice', selectedPrice);
                        }
                    }

                    // Plan selection handler
                    function handlePlanSelection(planId, planName) {
                        console.log('Plan selected:', planId, 'Currently selected:', selectedPlan);

                        if (selectedPlan === planId) {
                            // Deselect current plan
                            selectedPlan = null;
                            selectedPlanText = '-';

                            // Clear duration selection
                            clearDurationSelection();
                        } else {
                            // Select new plan
                            selectedPlan = planId;
                            selectedPlanText = planName;

                            // Clear duration selection when changing plans
                            clearDurationSelection();
                        }

                        updateVisualSelection();
                        updateButtonState();
                        updateLivewireState();
                    }

                    // Duration selection handler
                    function handleDurationSelection(durationId, durationText, price, planId) {
                        console.log('Duration selected:', durationId, 'Plan:', planId, 'Currently selected:',
                            selectedDuration);

                        // If this duration belongs to a plan and we have product types
                        if (hasProductType && planId && selectedPlan !== planId) {
                            // Auto-select the plan first
                            const planCard = document.querySelector(`[data-plan-id="${planId}"]');
                        if (planCard) {
                            handlePlanSelection(planId, planCard.dataset.planName);
                        }
                    }

                    if (selectedDuration === durationId) {
                        // Deselect current duration
                        selectedDuration = null;
                        selectedDurationText = '-';
                        selectedPrice = 0;
                    } else {
                        // Select new duration
                        selectedDuration = durationId;
                        selectedDurationText = durationText;
                        selectedPrice = price;
                    }

                    updateVisualSelection();
                    updateButtonState();
                    updateLivewireState();
                }

                function clearDurationSelection() {
                    selectedDuration = null;
                    selectedDurationText = '-';
                    selectedPrice = 0;
                    durationCards.forEach(c => c.classList.remove('selected'));
                }

                function updateVisualSelection() {
                    // Update plan cards
                    planCards.forEach(card => {
                        const radio = card.querySelector('.plan-radio');
                        if (card.dataset.planId === selectedPlan) {
                            card.classList.add('selected');
                            if (radio) radio.classList.add('selected');
                        } else {
                            card.classList.remove('selected');
                            if (radio) radio.classList.remove('selected');
                        }
                    });

                    // Update duration cards
                    durationCards.forEach(card => {
                        if (card.dataset.duration === selectedDuration) {
                            card.classList.add('selected');
                        } else {
                            card.classList.remove('selected');
                        }
                    });
                }

                // Add event listeners
                planCards.forEach(card => {
                    card.addEventListener('click', function(e) {
                        // Prevent event from bubbling to parent elements
                        e.stopPropagation();
                        
                        const planId = this.dataset.planId;
                        const planName = this.dataset.planName;
                        handlePlanSelection(planId, planName);
                    });
                });

                durationCards.forEach(card => {
                    card.addEventListener('click', function(e) {
                        // Prevent event from bubbling to parent elements
                        e.stopPropagation();
                        
                        const durationId = this.dataset.duration;
                        const durationText = this.dataset.durationText;
                        const price = parseInt(this.dataset.price) || 0;
                        const planId = this.dataset.plan;
                        handleDurationSelection(durationId, durationText, price, planId);
                    });
                });

                // Add to cart button
                addToCartBtn.addEventListener('click', function() {
                    if (this.disabled) return;

                    // Update modal content
                    if (modalPlan && hasProductType) {
                        modalPlan.textContent = selectedPlanText;
                    }
                    modalDuration.textContent = selectedDurationText;
                    modalPrice.textContent = formatRupiah(selectedPrice);

                    // Show confirmation modal
                    confirmModal.classList.add('active');
                });

                // Modal event listeners
                cancelBtn.addEventListener('click', function() {
                    confirmModal.classList.remove('active');
                });

                confirmBtn.addEventListener('click', function() {
                    // Hide confirmation modal
                    confirmModal.classList.remove('active');

                    // Add success animation to button
                    addToCartBtn.classList.add('success-animation');
                    setTimeout(() => {
                        addToCartBtn.classList.remove('success-animation');
                    }, 600);

                    // Call Livewire method
                    if (typeof @this !== 'undefined') {
                        @this.call('addToCart').then(() => {
                            // Show success modal
                            setTimeout(() => {
                                successModal.classList.add('active');
                            }, 300);
                        }).catch(error => {
                            console.error('Error adding to cart:', error);
                            alert('Failed to add item to cart. Please try again.');
                        });
                    } else {
                        // Fallback if Livewire is not available
                        setTimeout(() => {
                            successModal.classList.add('active');
                        }, 300);
                    }
                });

                // Close modals when clicking outside
                [confirmModal, successModal].forEach(modal => {
                    modal.addEventListener('click', function(e) {
                        if (e.target === this) {
                            this.classList.remove('active');
                        }
                    });
                });

                // Close modals with Escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        confirmModal.classList.remove('active');
                        successModal.classList.remove('active');
                    }
                });

                // Listen for Livewire events
                if (typeof window.Livewire !== 'undefined') {
                    window.addEventListener('show-success-modal', () => {
                        setTimeout(() => {
                            successModal.classList.add('active');
                        }, 300);
                    });
                }

                // Initialize
                updateButtonState();
                console.log('Product details initialized', {
                    hasProductType,
                    planCards: planCards.length,
                    durationCards: durationCards.length
                });
            });
    </script>
@endpush
