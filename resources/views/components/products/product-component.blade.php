<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="
    @if( $product->placeholder ) 
        {{ asset('storage/product/medium/'.$product->placeholder->name) }} 
    @else 
        {{ asset('storage/placeholder/product.jpg') }} 
    @endif" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $product->title  }}</h5>
        <div class="my-1">
            <p>Tag: <span>{{  $product->tag->name }}</span></p>
        </div>
         <div class="my-1">
            <p>Created At: <span>{{  date('d M Y',strtotime($product->created_at)) }}</span></p>
        </div>
        <span class="my-2 h6">{{ $product->price }} LE</span>
        <p class="card-text">{{ $product->description }}</p>

        @auth 

        @if(! Auth::user()->is_whished($product->id))
            <button class="btn btn-primary whishlist_btn" product_id="{{ $product->id }}">Add To Whishlist</button>
        @else
            <button class="btn btn-primary whishlist_btn whished" product_id="{{ $product->id }}">Whished</button>
        @endif

        @endauth
    </div>
</div>