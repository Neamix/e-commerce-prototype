<section class="container mt-3">
    <h2 class="h2 py-2">Brands</h2>
    <div class="owl-carousel owl-theme">
        @foreach ($brands as $brand)
            <div class="card d-flex justify-content-center align-items-center" style="width: 18rem;">
                <img class="card-img-top" src=" {{ asset('storage/brands/'.$brand->image) }} " alt="Card image cap" width="80">
                <div class="card-body">
                    <h5 class="card-title">{{ $brand->name  }}</h5>
                </div>
            </div>
        @endforeach
    </div>
</section>