@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    {{--Mensagem de erro do topo--}}
    @if($errors->any())
        <div class="row p-2">
            <div class="alert alert-danger" role="alert">
                Verifique os dados inseridos
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
                            <label for="input_id">Id</label>
                            <input type="text" id="input_id" value="{{$book->id}}" readonly="" class="form-control-plaintext">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group mb-4">
                            <label for="input_title">Title</label>
                            <input type="text" id="input_title" name="input_title" class="form-control" placeholder="Title" value="{{old('title', $book->title)}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="input_subtitle">Subtitle</label>
                            <input type="text" id="input_subtitle" class="form-control" value="{{old('subtitle', $book->subtitle)}}" placeholder="Subtitle">
                            <span class="help-block"><small>The subtitle can be blank</small></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="input_language">Language</label>
                            <input type="text" id="input_language" name="input_language" class="form-control" placeholder="Language" value="{{old('language', $book->language)}}" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="input_pages">Pages</label>
                            <input type="text" id="input_pages" name="input_pages" class="form-control" placeholder="Pages" value="{{old('pages', $book->pages)}}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="input_isbn">ISBN</label>
                            <input type="text" id="input_isbn" name="input_isbn" class="form-control input-isbn" autocomplete="off" maxlength="17" placeholder="___-_-__-______-_" value="{{old('ISBN', $book->ISBN)}}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="input_pub_date">Publication Date</label>
                            <input type="date" id="input_pub_date" name="input_pub_date" class="form-control" placeholder="Publication Date" value="{{old('publication_date', $book->publication_date)}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="input_publisher">Publisher</label>
                            <input type="text" id="input_publisher" name="input_publisher" class="form-control" placeholder="Publisher" value="{{old('publisher', $book->publisher)}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="multi-select2">Genres</label>
                                <select class="form-control select2-multi" id="select-genres">
                                    @foreach($genres as $genre)
                                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="input_description">Description</label>
                            <textarea class="form-control" id="input_description" name="input_description" placeholder="Description" rows="4" style="height: 94px;" required>{{old('description', $book->description)}}</textarea>
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


