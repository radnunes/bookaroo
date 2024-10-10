<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
            <div class="card shadow">
                <div class="card-body py-4 mb-1">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Physical</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Digital</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Special Formats</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="tab-content mb-4" id="v-pills-tabContent">
                                <!--2000's-->
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <a href="{{route('books.format',['format'=>'hardcover'])}}" class="btn mb-2 btn-light genre-button w-100">Hardcover</a>
                                    <a href="{{route('books.format',['format'=>'paperback'])}}" class="btn mb-2 btn-light genre-button w-100">Paperback</a>
                                    <a href="{{route('books.format',['format'=>'board'])}}" class="btn mb-2 btn-light genre-button w-100">Board Books</a>
                                    <a href="{{route('books.format',['format'=>'spiralbound'])}}" class="btn mb-2 btn-light genre-button w-100">Spiral-bound</a>
                                </div>
                                <!--1900's-->
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <a href="{{route('books.format',['format'=>'pdf'])}}" class="btn mb-2 btn-light genre-button w-100">PDF</a>
                                    <a href="{{route('books.format',['format'=>'epub'])}}" class="btn mb-2 btn-light genre-button w-100">ePub</a>
                                    <a href="{{route('books.format',['format'=>'mobi'])}}" class="btn mb-2 btn-light genre-button w-100">Mobipocket</a>
                                    <a href="{{route('books.format',['format'=>'azw'])}}" class="btn mb-2 btn-light genre-button w-100">AZW</a>
                                    <a href="{{route('books.format',['format'=>'cd'])}}" class="btn mb-2 btn-light genre-button w-100">CD</a>
                                    <a href="{{route('books.format',['format'=>'mp3'])}}" class="btn mb-2 btn-light genre-button w-100">MP3</a>
                                </div>
                                <!--1800's-->

                                <!--1700's-->
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <a href="{{route('books.format',['format'=>'boxset'])}}" class="btn mb-2 btn-light genre-button w-100">Box Sets</a>
                                    <a href="{{route('books.format',['format'=>'collectors'])}}" class="btn mb-2 btn-light genre-button w-100">Collector's Editions</a>
                                    <a href="{{route('books.format',['format'=>'largeprint'])}}" class="btn mb-2 btn-light genre-button w-100">Large Print</a>
                                    <a href="{{route('books.format',['format'=>'graphicnovel'])}}" class="btn mb-2 btn-light genre-button w-100">Graphic Novels</a>
                                    <a href="{{route('books.format',['format'=>'comics'])}}" class="btn mb-2 btn-light genre-button w-100">Comics</a>
                                    <a href="{{route('books.format',['format'=>'braille'])}}" class="btn mb-2 btn-light genre-button w-100">Braille</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROWS -->

    <div class="col-md-9 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Books</h5>
                <p class="card-text">List of books based on selected format.</p>
                <button type="button" class="btn mb-1 btn-outline-primary">Create new book</button>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Nº of Pages</th>
                        <th>Publication Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @if(!count($books))
                        <tdbody>
                            <tr>
                                <td>
                                    <h2>{{"No books found!"}}</h2>
                                </td>
                            </tr>
                        </tdbody>


                    @elseif(count($books))
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->title}}</td>
                                <td>
                                    <ul style="padding: 0">
                                        @foreach($book->authors as $author)
                                            <li style="padding: 0">{{$author->name}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{$book->pages}}</td>
                                <td>{{$book->publication_date}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1" style="">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif


</div>

