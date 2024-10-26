<div class="container p-1">
    <div class="row">
        <div class="col-md-12 p-3">
            <div class="card">
                <div class="card-body text-center bg-light rounded p-2 m-0" style="height: 100%">
                    @if(is_null($book->image_name))
                        <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded">
                    @else
                        <img src="{{ asset('storage/images/' . $book->image_name . '.' . $book->image_type) }}" alt="{{ $book->title }}" class="card-img-top img-fluid rounded">
                    @endif
                    <div class="card-text text-left mt-3">
                        <h6 class=" card-paragraph">{{ $book->title }}</h6>
                        @if($book->subtitle)
                            <p class="small text-muted card-paragraph" >{{ $book->subtitle }}</p>
                        @endif
                    </div>
                    <div class="card-text text-left mt-2">
                        @if($book->authors->isNotEmpty())
                            <p class="mb-1">
                                @foreach($book->authors as $author)
                                    {{ $author->name }}{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </p>
                        @else
                            <p class="mb-1 badge badge-danger text-white">No authors available.</p>
                        @endif
                        @if($book->genres->isNotEmpty())
                            @foreach($book->genres as $genre)
                                    <small class="badge badge-primary text-white">{{ $genre->name }}</small>
                            @endforeach
                        @else
                            <p class="mb-1 badge badge-danger text-white">No genres available.</p>
                        @endif
                    </div>
                        <div class="card-footer p-0 m-0">
                            <div class="row align-items-end justify-content-end pr-2">
                                <div class="p-0">
                                    <div class="file-action">
                                        <button type="button" class="btn dropdown-toggle more-vertical p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('books.edit', $book->id) }}">
                                                <i class="fe fe-edit mr-2"></i>Edit
                                            </a>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit">
                                                    <i class="fe fe-delete mr-2"></i>Delete
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
</div>

