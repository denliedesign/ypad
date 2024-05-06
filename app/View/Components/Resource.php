<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Resource extends Component
{
    public $pdf;
    public $name;
    public $target;
    /**
     * Create a new component instance.
     */
    public function __construct($pdf, $name, $target)
    {
        $this->pdf = $pdf;
        $this->name = $name;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.resource');
    }
}
