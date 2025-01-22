<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Stylish Store</title>
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

    <section class="contact-form">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Stylish Store. All rights reserved.</p>
    </footer>
</body>

</html>