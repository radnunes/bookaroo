<div class="row justify-content-center">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2 class="h4 mb-1">Books</h2>
                <p class="mb-3">All books available</p>
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table table-borderless table-hover">
                            <thead>
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
                                    <tr onclick="window.location='{{ route('books.show', ['id' => $book->id]) }}'" style="cursor: pointer;">
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
                        <nav aria-label="Table Paging" class="mb-0 text-muted">
                            {{ $books->appends(request()->input())->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div> <!-- Books -->

        <div class="row">
            <!-- Authors table -->
            <div class="col-md-12 my-4">
                <h2 class="h4 mb-1">Authors</h2>
                <p class="mb-3">All authors matching your search</p>
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table table-borderless table-hover">
                            <thead>
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
                                    <tr onclick="window.location='{{ route('authors.show', ['id' => $author->id]) }}'" style="cursor: pointer;">
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
        </div> <!-- Authors -->
    </div>
</div>
