<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    protected $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products.product-component',[
            'product' => $this->product
        ]);
    }
}
