@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <x-filter
                :resourceCount="$authorsCount"
                :genres="$genres"
                :publishers="$publishers"
                :languages="$languages"
                :authors="$authors"
                :request="request()"
            />
            <div class="row bg-light-dark rounded border-top border-warning">
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Authors</h2>
                    <p class="mb-3">All authors matching your search</p>
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- table -->
                            <table class="table table-borderless table-hover">
                                <thead>
                                @role('admin')
                                <a type="button" class="btn mb-1 btn-outline-primary" href="{{route('admin.authors.create')}}">Create new author</a>
                                @endrole
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Nationality</th>
                                    <th>Books</th>
                                    <th>Gender</th>
                                    <th>Birthdate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($authors->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">No authors found with name "{{ $search }}".</td>
                                    </tr>
                                @else
                                    @foreach($authors as $author)
                                        <tr onclick="window.location='{{ route('authors.show', ['author' => $author->id]) }}'" style="cursor: pointer;">
                                            <td>{{ $author->id }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->nationality }}</td>
                                            <td>
                                                @foreach($author->books as $book)
                                                    <li style="padding: 0">{{ $book->title }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                @if($author->gender == 'M' || $author->gender  == 'm')
                                                    Male
                                                @elseif($author->gender  == 'F' || $author->gender  == 'f')
                                                    Female
                                                @endif
                                            </td>
                                            <td>{{ $author->birthdate }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <nav aria-label="Authors Paging" class="mb-0 text-muted">
                                {{ $authors->appends(['books_page' => $books->currentPage()])->links('pagination::bootstrap-5') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div> <!-- Books -->

            <div class="row">
                <!-- Authors table
                <div class="col-md-6 my-4">
                    <h2 class="h4 mb-1">Authors</h2>
                    <p class="mb-3">All authors matching your search</p>
                    <div class="card shadow">
                        <div class="card-body">

                            <table class="table table-borderless table-hover">
                                <thead>
                                <a type="button" class="btn mb-1 btn-outline-primary" href="{{route('admin.authors.create')}}">Create new author</a>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Nationality</th>
                                    <th>Books</th>
                                    <th>Gender</th>
                                    <th>Birthdate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($authors->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No authors found with name "{{ $search }}".</td>
                                    </tr>
                                @else
                    @foreach($authors as $author)
                        <tr onclick="window.location='{{ route('authors.show', ['author' => $author->id]) }}'" style="cursor: pointer;">
                                            <td>{{ $author->id }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->nationality }}</td>
                                            <td>
                                                @foreach($author->books as $book)
                            <li style="padding: 0">{{ $book->title }}</li>
                                                @endforeach
                        </td>
                        <td>
    @if($author->gender == 'M' || $author->gender  == 'm')
                            Male
    @elseif($author->gender  == 'F' || $author->gender  == 'f')
                            Female
    @endif
                        </td>
                        <td>{{ $author->birthdate }}</td>
                                        </tr>
                                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>  Authors -->
            </div>
        </div>
    </div>
    @include('template.partials.modalsidebar')
@endsection
