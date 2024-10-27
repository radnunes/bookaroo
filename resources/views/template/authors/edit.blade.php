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

    <form method="POST" action="{{route('admin.authors.update',$author)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header">
                <h3 class="card-title my-auto">{{$author->name}}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 bg-transparent">
                            @if(is_null($author->image_name))
                                <img src="{{ asset('assets/images/no-image-found.svg') }}" alt="No image found" class="card-img-top img-fluid rounded mx-auto" style="max-width: 150px; max-height: 200px; width: auto; height: auto;">
                            @else
                                <img src="{{ asset('storage/images/' . $author->image_name . '.'. $author->image_type) }}" alt="{{ $author->name }}" class="card-img-top img-fluid rounded mx-auto" style="max-width: 400px; max-height: 550px;">
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
                                <div class="form-group mb-2">
                                    <label for="id">Id</label>
                                    <input type="text" id="id" value="{{$author->id}}" readonly="" class="form-control-plaintext">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-4">
                                    <label for="gender">Gender</label>
                                    <input type="text" id="gender" name="gender" class="form-control" placeholder="Gender" value="{{old('gender', $author->gender)}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-4">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" id="nationality" name="nationality" class="form-control" value="{{old('nationality', $author->nationality)}}" placeholder="Nationality">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-4">
                                    <label for="birthdate">Birthdate</label>
                                    <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate" value="{{old('birthdate', $author->birthdate)}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{old('name', $author->name)}}">
                        </div>
                        <div class="form-group my-4">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" placeholder="Bio" rows="4" style="height: 94px;">{{old('bio', $author->bio)}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="literary_moviment_id">Literary Movements</label>
                                <select class="form-control select2-multi" id="literary_moviment_id" name="literary_moviment_id[]" multiple="multiple">
                                    @foreach($literary_moviments as $lm)
                                        <option value="{{$lm->id}}"
                                                @if($author->literary_moviment_id == $lm->id) selected @endif>
                                            {{$lm->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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


