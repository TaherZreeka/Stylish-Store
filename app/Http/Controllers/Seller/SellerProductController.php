<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
class SellerProductController extends Controller
{
    public function index(){
         $authuserid = Auth::user()->id;
    $stores = Store::where('user_id', $authuserid)->get();
        return view('seller.product.create',compact('stores'));
    }
   public function manage()
{
    // Check if the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
    }

    // Get the ID of the currently authenticated seller
    $currentSellerId = Auth::id();

    // Fetch products associated with the current seller
    $products = Product::where('seller_id', $currentSellerId)->get();

    // Always pass the $products variable to the view, even if it's empty
    return view('seller.product.manage', compact('products'));
}
   public function store_product(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'sku' => 'required|string|unique:products,sku',
        'category_id' => 'required|exists:categories,id',
        'subcategory_id' => 'nullable|exists:subcategories,id',
        'store_id' => 'required|exists:stores,id',
        'regular_price' => 'required|numeric|min:0',
        'discount_price' => 'nullable|numeric|min:0',
        'tax_rate' => 'required|numeric|min:0|max:100',
        'stock_quantity' => 'required|integer|min:0',
        'stock_status' => 'required|string|in:In Stock,Out of Stock,Backorder',
        'images.*' => 'nullable|image|mimes:png,jpg,gif,jpeg|max:2048',
        'slug' => 'required|string|unique:products,slug',
        'visibility' => 'required|boolean',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:255',
        'status' => 'required|string|in:Draft,Published',
    ]);

    // Handle image uploads
    if ($request->hasFile('images')) {
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            $path = $image->store('products', 'public'); // Store images in the 'public/products' directory
            $imagePaths[] = $path;
        }
        $validatedData['images'] = json_encode($imagePaths); // Store image paths as JSON
    } else {
        $validatedData['images'] = null; // Set images to null if no files are uploaded
    }

    // Add the authenticated seller's ID
    $validatedData['seller_id'] = Auth::id();

    // Create the product
    Product::create($validatedData);

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Product created successfully!');
}
}