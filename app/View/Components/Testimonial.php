<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $image;
    public $quote;
    public $person;
    public $place;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $quote, $person, $place)
    {
        $this->image = $image;
        $this->quote = $quote;
        $this->person = $person;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
