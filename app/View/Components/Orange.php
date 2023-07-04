<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Orange extends Component
{
    public $image;
    public $name;
    public $title;
    public $quote;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $name, $title, $quote)
    {
        $this->image = $image;
        $this->name = $name;
        $this->title = $title;
        $this->quote = $quote;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.orange');
    }
}
