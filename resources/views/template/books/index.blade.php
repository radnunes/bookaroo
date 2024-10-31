@extends('template.layout')

@section('title', 'Bookaroo')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <x-filter :resourceCount="$booksCount" />
            <div class="row bg-light-dark rounded border-top border-warning">
                <div class="col-md-12">
                    <h2 class="h4 mt-4">Books</h2>
                    <h6 class="mb-3">All books matching your search</h6>

                    <div class="card-grid">
                        <!--
                        <div class="">
                            table -->
                        <!--
                        <table class="table table-borderless table-hover">
                            <thead>
                            @role('admin')
                        <a type="button" class="btn mb-1 btn-outline-primary" href="{{route('admin.books.create')}}">Create new book</a>
                            @endrole
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Genre</th>
                            <th>Pages</th>
                            <th>Publisher</th>
                            <th>Publication date</th>
                        </tr>
                        </thead>
                        <tbody>
@if($books->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">No books found with title "{{ $search }}".</td>
                                </tr>
                            @else
                            @foreach($books as $book)

                                <tr onclick="window.location='{{ route('books.show', ['book' => $book->id]) }}'" style="cursor: pointer;">
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>
                                            @foreach($book->authors as $author)
                                    <li style="padding: 0">{{ $author->name }}</li>
                                            @endforeach
                                </td>
                                <td>
@foreach($book->genres as $genre)
                                    <li style="padding: 0">{{ $genre->name }}</li>
                                            @endforeach
                                </td>
                                <td>{{$book->pages}}</td>
                                        <td>{{$book->publisher}}</td>
                                        <td>{{$book->publication_date}}</td>
                                    </tr>

                                @endforeach

                        @endif
                        </tbody>
                    </table>


                </div>
-->
                    </div>

                    <!-- resources/views/your-view-name.blade.php -->
                    <div class="p-0 pb-2"> <!-- Added a container to control the layout -->
                        <div class="row card-grid mx-0">
                            @role('admin')
                            <div class="col-12 mb-3">
                                <a type="button" class="btn btn-outline-primary" href="{{ route('admin.books.create') }}">Create new book</a>
                            </div>
                            @endrole

                            @foreach($books as $book)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2  p-0">
                                    <x-book-card :book="$book"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <nav aria-label="Books Paging" class="mb-0 text-muted">
                        {{ $books->appends(['books_page' => $books->currentPage()])->links('pagination::bootstrap-5') }}
                    </nav>
                </div>
            </div> <!-- Books -->
            </div>
        </div>
    @include('template.partials.modalsidebar')
@endsection
