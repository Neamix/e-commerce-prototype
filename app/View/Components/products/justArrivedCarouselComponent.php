<?php

namespace App\View\Components\products;

use App\Models\Product;
use Illuminate\View\Component;

class justArrivedCarouselComponent extends Component
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
        $justArrivedProducts = Product::filter(['just_arrived' => 1])->take(8)->with('tag')->get();
        return view('components.products.just-arrived-carousel-component',[
            'products' => $justArrivedProducts
        ]);
    }
}
