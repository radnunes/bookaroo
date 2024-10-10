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

    <form method="POST" action="{{route('books.update',$book)}}">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Editar Livro</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="id">Id</label>
                            <input type="text" id="id" value="{{$book->id}}" readonly="" class="form-control-plaintext">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group mb-4">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{old('title', $book->title)}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{old('subtitle', $book->subtitle)}}" placeholder="Subtitle">
                            <span class="help-block"><small>The subtitle can be blank</small></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="language">Language</label>
                            <input type="text" id="language" name="language" class="form-control" placeholder="Language" value="{{old('language', $book->language)}}">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="pages">Pages</label>
                            <input type="text" id="pages" name="pages" class="form-control" placeholder="Pages" value="{{old('pages', $book->pages)}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="ISBN">ISBN</label>
                            <input type="text" id="ISBN" name="ISBN" class="form-control input-isbn" autocomplete="off" maxlength="17" placeholder="___-_-__-______-_" value="{{old('ISBN', $book->ISBN)}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="publication_date">Publication Date</label>
                            <input type="date" id="publication_date" name="publication_date" class="form-control" placeholder="Publication Date" value="{{old('publication_date', $book->publication_date)}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="publisher">Publisher</label>
                            <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Publisher" value="{{old('publisher', $book->publisher)}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="multi-select2">Genres</label>
                                <select class="form-control select2-multi" id="genres" name="genres[]" multiple="multiple">
                                    @foreach($genres as $genre)
                                        <option value="{{$genre->id}}"
                                                @if($book->genres->contains($genre->id)) selected @endif>
                                            {{$genre->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="multi-select2">Authors</label>
                                <select class="form-control select2-multi" id="authors" name="authors[]" multiple="multiple">
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}"
                                                @if($book->authors->contains($author->id)) selected @endif>
                                            {{$author->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="4" style="height: 94px;">{{old('description', $book->description)}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <button type="submit" class="btn mb-1 btn-outline-primary">Atualizar</button>
                            <a href="{{route('books.genres')}}"><i class="fa-solid fa-ban"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


