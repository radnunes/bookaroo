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

        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Show</h5>
                <a type="button" class="btn btn-outline-primary" href="{{ route('authors.edit', ['author' => $author]) }}">Edit</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group mb-4">
                            <label for="id">Id</label>
                            <input type="text" id="id" value="{{$author->id}}" readonly="" class="form-control-plaintext" disabled>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group mb-4">
                            <label for="title">Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{old('name', $author->name)}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthdate" value="{{old('birthdate', $author->birthdate)}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="nationality">Nationality</label>
                            <input type="text" id="nationality" name="nationality" class="form-control" value="{{old('nationality', $author->nationality)}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" class="form-control" value="{{old('gender', $author->gender)}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Bio</h5>
                                <p>
                                    {{$author->bio}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Awards</h5>
                                <div>
                                    @if($author->awards->isEmpty())
                                        <p>No books associated with this author.</p>
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
                    <div class="col-md-6">
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
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
