@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-4">
            @foreach ( $products as $product)
                <div class="col-lg-3 col-md-4 col-6">
                    <x-products.product-component :product="$product"></x-products.product-component>
                </div>
            @endforeach

            {{ $products->withQueryString()->onEachSide(2)->links() }}

        </div>
    </div>
@endsection