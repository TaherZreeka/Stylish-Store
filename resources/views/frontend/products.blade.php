<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Stylish Store</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">
</head>

<body>
    <header>
        <div class="logo">Stylish Store</div>
        <nav>
            <ul>
                <li><a href="{{route('front.index')}}">Home</a></li>
                <li><a href="{{route('front.category')}}">Categories</a></li>
                <li><a href="{{route('front.products')}}">Products</a></li>
                <li><a href="{{route('front.cart')}}">Cart</a></li>
                <li><a href="{{route('front.contact')}}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="product-detail">
        <h1>Featured Products</h1><br>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('frontend/images/single-product-thumb1.jpg') }}" alt="Product Image">
                </div>
                <div class="product-info">
                    <h2>Stylish T-Shirt</h2>
                    <p class="price">$29.99</p>
                    <p class="description">A comfortable and stylish t-shirt for everyday wear.</p>
                    <button class="btn" onclick="addToCart()">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('frontend/images/single-product-thumb1.jpg') }}" alt="Product Image">
                </div>
                <div class="product-info">
                    <h2>Stylish T-Shirt</h2>
                    <p class="price">$29.99</p>
                    <p class="description">A comfortable and stylish t-shirt for everyday wear.</p>
                    <button class="btn" onclick="addToCart()">Add to Cart</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('frontend/images/single-product-thumb1.jpg') }}" alt="Product Image">
                </div>
                <div class="product-info">
                    <h2>Stylish T-Shirt</h2>
                    <p class="price">$29.99</p>
                    <p class="description">A comfortable and stylish t-shirt for everyday wear.</p>
                    <button class="btn" onclick="addToCart()">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('frontend/images/single-product-thumb1.jpg') }}" alt="Product Image">
                </div>
                <div class="product-info">
                    <h2>Stylish T-Shirt</h2>
                    <p class="price">$29.99</p>
                    <p class="description">A comfortable and stylish t-shirt for everyday wear.</p>
                    <button class="btn" onclick="addToCart()">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Stylish Store. All rights reserved.</p>
    </footer>

    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>