<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class Filter extends Component
{
    public $resourceCount;
    public $genres;
    public $publishers;
    public $languages;
    public $authors;
    public $request;

    /**
     * Create a new component instance.
     */

    public function __construct($resourceCount, $genres, $publishers, $languages, $authors, Request $request)
    {
        $this->resourceCount = $resourceCount;
        $this->genres = $genres;
        $this->publishers = $publishers;
        $this->languages = $languages;
        $this->authors = $authors;
        $this->request = $request;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter');
    }
}
