@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    {{--Mensagem de erro do topo--}}
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

    <form method="POST" action="{{route('books.update',$book)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header">
                <h3 class="card-title my-auto">{{$book->title}}</h3>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card border-0 bg-transparent">
                            @if(is_null($book->image_name))
                                <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded mx-auto" style="max-width: 150px; max-height: 200px; width: auto; height: auto;">
                            @else
                                <img src="{{ asset('storage/images/' . $book->image_name . '.'. $book->image_type) }}" alt="{{ $book->title }}" class="card-img-top img-fluid rounded mx-auto" style="max-width: 400px; max-height: 550px;">
                            @endif
                        </div>
                        <!-- Book Cover Input -->
                        <div class="my-3 justify-content-around">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="id">Id</label>
                                    <input type="text" id="id" value="{{$book->id}}" readonly class="form-control-plaintext">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <input type="text" id="language" name="language" class="form-control" placeholder="Language" value="{{old('language', $book->language)}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pages">Pages</label>
                                    <input type="text" id="pages" name="pages" class="form-control" placeholder="Pages" value="{{old('pages', $book->pages)}}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{old('title', $book->title)}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{old('subtitle', $book->subtitle)}}" placeholder="Subtitle">
                                <small class="form-text text-muted">The subtitle can be blank</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description" rows="4">{{old('description', $book->description)}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" id="ISBN" name="ISBN" class="form-control" maxlength="17" placeholder="___-_-__-______-_" value="{{old('ISBN', $book->ISBN)}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="publication_date">Publication Date</label>
                                <input type="date" id="publication_date" name="publication_date" class="form-control" value="{{old('publication_date', $book->publication_date)}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Publisher" value="{{old('publisher', $book->publisher)}}">
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <label for="genres">Genres</label>
                                    <select class="form-control select2-multi" id="genres" name="genres[]" multiple="multiple">
                                        @foreach($genres as $genre)
                                            <option value="{{$genre->id}}" @if($book->genres->contains($genre->id)) selected @endif>{{$genre->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <label for="authors">Authors</label>
                                    <select class="form-control select2-multi" id="authors" name="authors[]" multiple="multiple">
                                        @foreach($authors as $author)
                                            <option value="{{$author->id}}" @if($book->authors->contains($author->id)) selected @endif>{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                            <a href="{{route('books.genres')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection


