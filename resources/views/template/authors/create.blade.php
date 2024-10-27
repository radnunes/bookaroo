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

    <form method="POST" action="{{route('admin.authors.store')}}">
        @csrf

        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Create Author</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-4">
                            <label for="Birthdate">Birthdate</label>
                            <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-4">
                            <label for="nationality">Nationality</label>
                            <input type="text" id="nationality" name="nationality" class="form-control" placeholder="Nationality">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mb-4">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" class="form-control" placeholder="Gender">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="awards">Awards</label>
                                <select class="form-control select2-multi" id="award" name="award[]" multiple="multiple">
                                    @foreach($awards as $award)
                                        <option value="{{$award->id}}">{{$award->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <label for="literary_moviment_id">Literary Movements</label>
                                <select class="form-control select2-multi" id="literary_moviment_id" name="literary_moviment_id[]" multiple="multiple">
                                    @foreach($literary_moviments as $lm)
                                        <option value="{{$lm->id}}">{{$lm->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow mb-3">
                            <div class="card-body">
                                <label for="books">Books</label>
                                <select class="form-control select2-multi" id="books" name="books[]" multiple="multiple">
                                    @foreach($books as $book)
                                        <option value="{{$book->id}}">{{$book->title}}</option>
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
                            <textarea class="form-control" id="bio" name="bio" placeholder="Bio" rows="4" style="height: 94px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <button type="submit" class="btn mb-1 btn-outline-primary">Create</button>
                            <a href="{{route('home')}}"><i class="fa-solid fa-ban"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
