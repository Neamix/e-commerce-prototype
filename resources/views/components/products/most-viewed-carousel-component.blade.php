<section class="container mt-3">
    <h2 class="h2 py-2">Most Viewed Products</h2>
    <div class="owl-carousel owl-theme">
        @foreach ($products as $product)
            <x-products.product-component :product="$product"></x-products.product-component>
        @endforeach
    </div>
</section>