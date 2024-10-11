@if($errors->any())
    <div class="row p-2">
        <div class="alert alert-danger" role="alert">
            Please check the entered data
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<form method="POST" action="{{route('books.update',$book)}}">
    @csrf
    @method('PUT')

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0">{{old('title', $book->title)}}</h5>
            </div>
            <a type="button" class="btn btn-outline-primary" href="{{ route('books.edit', ['book' => $book]) }}">Edit</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-3"> <!-- PHOTO -->
                    <div class="card border-0 bg-transparent">
                        <img src="{{ asset('assets/images/no-image-found.svg')}}" alt="..." class="card-img-top img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-3"> <!-- center -->
                    <div class="form-group">
                        <div class="row">
                            <!-- Column for ID -->
                            <div class="col-md-2"> <!-- Adjust width as needed -->
                                <div class="form-group mb-1">
                                    <label for="id" class="mb-0">Id</label>
                                    <input type="text" id="id" value="{{$book->id}}" readonly class="form-control-plaintext" disabled>
                                </div>
                            </div>

                            <!-- Column for Subtitle -->
                            <div class="col-md-10"> <!-- Adjust width as needed -->
                                <div class="form-group mb-1">
                                    <label for="subtitle">Subtitle</label>
                                    @if($book->subtitle)
                                        <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ old('subtitle', $book->subtitle) }}" placeholder="Subtitle" disabled>
                                    @else
                                        <p>No subtitle found.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 for="multi-select2" class="mb-3">Description</h5>
                            <p>
                                {{$book->description}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row"> <!-- Add a row for Language and Pages fields -->
                        <div class="col-md-4 mr-2"> <!-- Left Column for Language -->
                            <div class="form-group mb-2">
                                <label for="language">Language</label>
                                <input type="text" id="language" name="language" class="form-control" placeholder="Language" value="{{ old('language', $book->language) }}" disabled>
                            </div>
                        </div>

                        <div class="col-md-4 mr-2"> <!-- Right Column for Pages -->
                            <div class="form-group mb-4">
                                <label for="pages">Pages</label>
                                <input type="text" id="pages" name="pages" class="form-control" placeholder="Pages" value="{{ old('pages', $book->pages) }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="publisher">Publisher</label>
                        <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Publisher" value="{{ old('publisher', $book->publisher) }}" disabled>
                    </div>
                    <div class="form-group mb-4">
                        <label for="ISBN">ISBN</label>
                        <input type="text" id="ISBN" name="ISBN" class="form-control input-isbn" autocomplete="off" maxlength="17" placeholder="___-_-__-______-_" value="{{ old('ISBN', $book->ISBN) }}" disabled>
                    </div>
                    <div class="form-group mb-4">
                        <label for="publication_date">Publication Date</label>
                        <input type="date" id="publication_date" name="publication_date" class="form-control" placeholder="Publication Date" value="{{ old('publication_date', $book->publication_date) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 for="multi-select2" class="mb-3">Authors</h5>
                            <div>
                                @if($book->authors->isEmpty())
                                    <p>No authors associated with this book.</p>
                                @else
                                    @foreach($book->authors as $author)
                                        <p>
                                            {{$author->name}}
                                        </p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 for="multi-select2" class="mb-3">Genres</h5>
                            @foreach($book->genres as $genre)
                                <p>
                                    {{$genre->name}}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
