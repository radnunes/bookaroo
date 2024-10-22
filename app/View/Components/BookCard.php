<?php

namespace App\View\Components;

use App\Models\Book;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookCard extends Component
{
    public $book;
    /**
     * Create a new component instance.
     */
    public function __construct($book) // Remove the Book model type-hint
    {
        $this->book = $book; // Assign the passed book to the property
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.book-card');
    }
}
