 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('products.list',['category_id' => $category->id]) }}">{{ $category->name  }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>