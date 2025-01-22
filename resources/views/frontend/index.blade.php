<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Stylish Store</title>
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

    <section class="hero"
        style="background: url('{{ asset('frontend/images/summary-item1.jpg') }}') no-repeat center center/cover; color: #fff; height: 400px;;">
        <h1>Welcome to Stylish Store</h1>
        <p>Discover the latest trends in fashion and accessories.</p>
        <a href="{{ route('front.category') }}" class="btn">Shop Now</a>
    </section>

    <footer>
        <p>&copy; 2023 Stylish Store. All rights reserved.</p>
    </footer>
</body>

</html>