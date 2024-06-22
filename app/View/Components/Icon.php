<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public $item;
    public $number;
    public $link;
    /**
     * Create a new component instance.
     */
    public function __construct($item, $number, $link)
    {
        $this->item = $item;
        $this->number = $number;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.icon');
    }
}
