<div class="container p-0">
    <div class="row">
        <div class="col-md-12 px-3 py-1">
            <div class="card d-flex flex-column card-book">
                <div class="card-body text-center bg-light rounded p-2 m-0 flex-grow-1">
                    <a href="{{ route('books.show', $book->id) }}" class="book-link">
                        @if(is_null($book->image_name))
                            <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded book-image">
                        @else
                            <img src="{{ asset('storage/images/' . $book->image_name . '.' . $book->image_type) }}" alt="{{ $book->title }}" class="card-img-top img-fluid rounded book-image">
                        @endif
                        <div class="overlay">
                            <h4 class="overlay-title mx-2">{{ $book->title }}</h4>
                            @if($book->authors->isNotEmpty())
                                <p class="overlay-author small text-muted mb-0">
                                    {{ $book->authors->pluck('name')->join(', ') }}
                                </p>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
