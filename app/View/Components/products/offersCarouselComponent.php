<?php

namespace App\View\Components\products;

use App\Models\Product;
use Illuminate\View\Component;

class offersCarouselComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $offeredProduct = Product::filter(['special_offer' => SPECIAL_OFFER])->with('tag')->take(10)->get();
        return view('components.products.offers-carousel-component',[
            'products' => $offeredProduct
        ]);
    }
}
