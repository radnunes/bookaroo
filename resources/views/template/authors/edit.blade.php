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

    <form method="POST" action="{{route('authors.update',$author)}}">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Edit Author</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group mb-4">
                            <label for="id">Id</label>
                            <input type="text" id="id" value="{{$author->id}}" readonly="" class="form-control-plaintext">
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="form-group mb-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{old('name', $author->name)}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-4">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate" value="{{old('birthdate', $author->birthdate)}}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-4">
                            <label for="nationality">Nationality</label>
                            <input type="text" id="nationality" name="nationality" class="form-control" value="{{old('nationality', $author->nationality)}}" placeholder="Nationality">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mb-4">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" class="form-control" placeholder="Gender" value="{{old('gender', $author->gender)}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="awards">Awards</label>
                                <select class="form-control select2-multi" id="award" name="award[]" multiple="multiple">
                                    @foreach($awards as $award)
                                        <option value="{{$award->id}}"
                                                @if($author->awards->contains($award->id)) selected @endif>
                                            {{$award->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="books">Books</label>
                                <select class="form-control select2-multi" id="books" name="books[]" multiple="multiple">
                                    @foreach($books as $book)
                                        <option value="{{$book->id}}"
                                                @if($author->books->contains($book->id)) selected @endif>
                                            {{$book->title}}
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
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" placeholder="Bio" rows="4" style="height: 94px;">{{old('bio', $author->bio)}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <button type="submit" class="btn mb-1 btn-outline-primary">Atualizar</button>
                            <a href="{{route('home')}}"><i class="fa-solid fa-ban"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


