<?php

namespace App\View\Components\products;

use App\Models\Product;
use Illuminate\View\Component;

class mostViewedCarouselComponent extends Component
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
        $mostViewedProduct = Product::filter(['most_viewed' => MOST_VIEWED])->with('tag')->take(10)->get();
        return view('components.products.most-viewed-carousel-component',[
            'products' => $mostViewedProduct
        ]);
    }
}
