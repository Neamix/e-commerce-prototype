<?php

namespace App\View\Components\products;

use Illuminate\View\Component;

class productCardComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    protected $image;
    protected $title;
    protected $isWhished;

    public function __construct($image,$title,$isWhished)
    {
        $this->title = $title;
        $this->image = $image;
        $this->isWhished = $isWhished;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products.product-card-component',[
            'title' => $this->title,
            'image' => $this->image,
            'is_whished' => $this->isWhished
        ]);
    }
}
