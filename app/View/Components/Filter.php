<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Filter extends Component
{
    public $booksCount;
    public $authorsCount;
    /**
     * Create a new component instance.
     */

    public function __construct($booksCount, $authorsCount)
    {
        $this->booksCount = $booksCount;
        $this->authorsCount = $authorsCount;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter');
    }
}
