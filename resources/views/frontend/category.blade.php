<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Stylish Store</title>
    <link rel="stylesheet" href="{{asset('frontend/styles.css')}}">
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

    <section class="categories">
        <h2>Shop by Category</h2>
        <div class="category-list">
            <div class="category-item">
                <img src="{{asset('frontend/images/card-image6.jpg')}}" alt="Men's Fashion">
                <h3>Men's Fashion</h3>
            </div>
            <div class="category-item">
                <img src="{{asset('frontend/images/card-image3.jpg')}}" alt="Women's Fashion">
                <h3>Women's Fashion</h3>
            </div>
            <div class="category-item">
                <img src="{{asset('frontend/images/card-image2.jpg')}}" alt="Accessories">
                <h3>Accessories</h3>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Stylish Store. All rights reserved.</p>
    </footer>
</body>

</html>