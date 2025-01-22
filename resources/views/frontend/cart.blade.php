<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Stylish Store</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">
</head>

<body>
    <header>
        <div class="logo">Stylish Store</div>
        <nav>
            <ul>
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li><a href="{{ route('front.category') }}">Categories</a></li>
                <li><a href="{{ route('front.products') }}">Products</a></li>
                <li><a href="{{ route('front.cart') }}">Cart</a></li>
                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="cart">
        <h2>Your Cart</h2>
        <div class="cart-items">
            <!-- Cart Item 1 -->
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="{{ asset('frontend/images/single-product-thumb2.jpg') }}" alt="Product Image">
                </div>
                <div class="cart-item-details">
                    <h3>Stylish T-Shirt</h3>
                    <p class="price">$29.99</p>
                    <div class="quantity-control">
                        <button class="btn-quantity" onclick="updateQuantity(-1)">-</button>
                        <span class="quantity">1</span>
                        <button class="btn-quantity" onclick="updateQuantity(1)">+</button>
                    </div>
                    <button class="btn-remove" onclick="removeItem()">Remove</button>
                </div>
            </div>

            <!-- Cart Item 2 -->
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="{{ asset('frontend/images/single-product-thumb1.jpg') }}" alt="Product Image">
                </div>
                <div class="cart-item-details">
                    <h3>Stylish Hoodie</h3>
                    <p class="price">$49.99</p>
                    <div class="quantity-control">
                        <button class="btn-quantity" onclick="updateQuantity(-1)">-</button>
                        <span class="quantity">2</span>
                        <button class="btn-quantity" onclick="updateQuantity(1)">+</button>
                    </div>
                    <button class="btn-remove" onclick="removeItem()">Remove</button>
                </div>
            </div>
        </div>

        <div class="cart-total">
            <h3>Total: $79.98</h3>
            <button class="btn-checkout" onclick="checkout()">Proceed to Payment</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Stylish Store. All rights reserved.</p>
    </footer>

    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>