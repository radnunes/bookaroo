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
                                <th>Publication date</th>
                                <th>Action</th>
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
                                        <td>{{ \Carbon\Carbon::parse($book->publication_date)->format('d/m/Y') }}</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </td>
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
                                <th>Books</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($authors->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">No authors found with name "{{ $search }}".</td>
                                </tr>
                            @else
                                @foreach($authors as $author)
                                    <tr>
                                        <td>{{ $author->id }}</td>
                                        <td>{{ $author->name }}</td>
                                        <td>
                                            @foreach($author->books as $book)
                                                <li style="padding: 0">{{ $book->title }}</li>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </td>
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
