<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkmark extends Component
{
    public $item;
    public $number;
    /**
     * Create a new component instance.
     */
    public function __construct($item, $number)
    {
        $this->item = $item;
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.checkmark');
    }
}
