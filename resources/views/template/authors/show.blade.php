@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')

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

    <form method="POST" action="{{route('authors.update',$author)}}">
        @csrf
        @method('PUT')

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0">{{old('name', $author->name)}}</h5>
                </div>
                <div>
                    <a type="button" class="btn btn-outline-primary" href="{{ route('authors.edit', ['author' => $author]) }}">Edit</a>
                    <form action="{{ route('authors.destroy', ['author' => $author]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
                    </form>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"> <!-- PHOTO -->
                        <div class="card border-0 bg-transparent">
                            @if(is_null($author->image_name))
                                <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded">
                            @else
                                <img src="{{ asset('storage/images/' . $author->image_name . '.'. $author->image_type) }}" alt="{{ $author->title }}" class="card-img-top img-fluid rounded">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3"> <!-- center -->
                        <div class="form-group">
                            <div class="row">
                                <!-- Column for ID -->
                                <div class="col-md-2"> <!-- Adjust width as needed -->
                                    <div class="form-group mb-1">
                                        <label for="id" class="mb-0">Id</label>
                                        <input type="text" id="id" value="{{$author->id}}" readonly class="form-control-plaintext" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Bio</h5>
                                <p>
                                    {{$author->bio}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row"> <!-- Add a row for Language and Pages fields -->
                            <div class="col-md-4 mr-2"> <!-- Left Column for Language -->
                                <div class="form-group mb-2">
                                    <label for="language">Nationality</label>
                                    <input type="text" id="nationality" name="nationality" class="form-control" value="{{ old('nationality', $author->nationality) }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-5 mr-2"> <!-- Right Column for Pages -->
                                <div class="form-group mb-4">
                                    <label for="pages">Birthdate</label>
                                    <input type="text" id="birthdate" name="birthdate" class="form-control" value="{{ old('birthdate', $author->birthdate) }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mr-2"> <!-- Right Column for Pages -->
                                <div class="form-group mb-4">
                                    <label for="pages">Literary Movement</label>
                                    <input type="text" id="pages" name="pages" class="form-control" value="{{ old('literary_moviment', $author->literary_moviments->name) }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-5 mr-2">
                                <div class="form-group mb-4 mr-2">
                                    <label for="publisher">Gender</label>
                                    @if($author->gender == 'M' || $author->gender == 'm')
                                    <input type="text" id="male" name="male" class="form-control" value="{{ old('publisher', 'Male') }}" disabled>
                                    @elseif($author->gender == 'F' || $author->gender == 'f')
                                        <input type="text" id="female" name="female" class="form-control"  value="{{ old('publisher', 'Female') }}" disabled>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Books</h5>
                                <div>
                                    @if($author->books->isEmpty())
                                        <p>No books associated with this author.</p>
                                    @else
                                        @foreach($author->books as $book)
                                            <p>
                                                {{$book->title}}
                                            </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Awards</h5>
                                <div>
                                    @if($author->awards->isEmpty())
                                        <p>No awards associated with this author.</p>
                                    @else
                                        @foreach($author->awards as $award)
                                            <p>
                                                {{$award->name}}
                                            </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
