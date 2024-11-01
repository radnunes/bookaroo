<div class="container p-0">
    <div class="row">
        <div class="col-md-12 px-3 py-1">
            <div class="card">
                <div class="card-body text-center bg-light rounded p-2 m-0" style="height: 100%">
                    <a href="{{route('books.show', $book->id) }}">
                    @if(is_null($book->image_name))
                        <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded">
                    @else
                        <img src="{{ asset('storage/images/' . $book->image_name . '.' . $book->image_type) }}" alt="{{ $book->title }}" class="card-img-top img-fluid rounded">
                    @endif
                    </a>
                    <div class="card-text text-left mt-3">
                        <h6 class=" card-paragraph">{{ $book->title }}</h6>
                        @if($book->authors->isNotEmpty())
                            <p class="small text-muted card-paragraph mb-0">
                                {{ $book->authors->pluck('name')->join(', ') }}
                            </p>
                        @endif
                    </div>
                    @if(auth()->user())
                        <div class="card-footer p-0 m-0">
                            <div class="row align-items-end justify-content-end mr-2">
                                <div class="p-0">
                                    <div class="file-action">
                                        <button type="button" class="btn dropdown-toggle more-vertical p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if(auth()->user()->hasRole('admin'))
                                                <a class="dropdown-item" href="{{ route('admin.books.edit', $book->id) }}">
                                                    <i class="fe fe-edit mr-2"></i>Edit
                                                </a>
                                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">
                                                        <i class="fe fe-delete mr-2"></i>Delete
                                                    </button>
                                                </form>
                                            @else
                                                <a class="dropdown-item" href=""> <!-- route to add book to x list -->
                                                    <i class="fe fe-edit mr-2"></i>Add to...</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

