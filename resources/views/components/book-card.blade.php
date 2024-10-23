<div class="container p-1">
    <div class="row px-0">
        <div class="col-md-12">
            <div class="card custom-card">
                <div class="card-body text-center p-2 bg-light rounded" style="min-height: 400px">
                    @if(is_null($book->image_name))
                        <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded">
                    @else
                        <img src="{{ asset('storage/images/' . $book->image_name . '.'. $book->image_type) }}" alt="{{ $book->title }}" class="card-img-top img-fluid rounded">
                    @endif
                    <div class="card-text text-left mt-2">
                        <strong class="card-title my-0">{{ $book->title }}</strong>
                        @if($book->subtitle)
                            <p class="small text-muted mb-0">{{ $book->subtitle }}</p>
                        @endif
                    </div>
                        <div class="card-text text-left mt-2">
                            <strong class="card-title my-0">{{ $book->author }}</strong>
                        </div>
                </div>

                <div class="card-footer">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="file-action">
                                <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu m-1">
                                    <a class="dropdown-item" href="{{ route('books.edit', $book->id) }}">
                                        <i class="fe fe-edit fe-12 mr-4"></i>Edit
                                    </a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">
                                            <i class="fe fe-delete fe-12 mr-4"></i>Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
