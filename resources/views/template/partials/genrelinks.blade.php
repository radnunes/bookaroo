<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
                <div class="card shadow">
                    <div class="card-body py-4 mb-1">
                        <div class="row">
                            <div class="col-5">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Fiction</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Non-Fiction</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">For Children</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Others</a>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="tab-content mb-4" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <a href="{{route('books.genres',['genres'=>'Adventure'])}}" class="btn mb-2 btn-light genre-button w-100">Adventure</a>
                                        <a href="{{route('books.genres',['genres'=>'Romance'])}}" class="btn mb-2 btn-light genre-button w-100">Romance</a>
                                        <a href="{{route('books.genres',['genres'=>'Mystery'])}}" class="btn mb-2 btn-light genre-button w-100">Mystery</a>
                                        <a href="{{route('books.genres',['genres'=>'Thriller'])}}" class="btn mb-2 btn-light genre-button w-100">Thriller</a>
                                        <a href="{{route('books.genres',['genres'=>'Science Fiction'])}}" class="btn mb-2 btn-light genre-button w-100">Science Fiction</a>
                                        <a href="{{route('books.genres',['genres'=>'Fantasy'])}}" class="btn mb-2 btn-light genre-button w-100">Fantasy</a>
                                        <a href="{{route('books.genres',['genres'=>'Historical Fiction'])}}" class="btn mb-2 btn-light genre-button w-100">Historical Fiction</a>
                                        <a href="{{route('books.genres',['genres'=>'Horror'])}}" class="btn mb-2 btn-light genre-button w-100">Horror</a>
                                        <a href="{{route('books.genres',['genres'=>'Dystopian'])}}" class="btn mb-2 btn-light genre-button w-100">Dystopian</a>
                                        <a href="{{route('books.genres',['genres'=>'Magical Realism'])}}" class="btn mb-2 btn-light genre-button w-100">Magical Realism</a>
                                        <a href="{{route('books.genres',['genres'=>'Paranormal'])}}" class="btn mb-2 btn-light genre-button w-100">Paranormal</a>
                                        <a href="{{route('books.genres',['genres'=>'Young Adult'])}}" class="btn mb-2 btn-light genre-button w-100">Young Adult (YA)</a>

                                    </div>
                                    <div class="tab-pane fade mb-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <a href="{{route('books.genres',['genres'=>'Biography'])}}" class="btn mb-2 btn-light genre-button w-100">Biography</a>
                                        <a href="{{route('books.genres',['genres'=>'Memoir'])}}" class="btn mb-2 btn-light genre-button w-100">Memoir</a>
                                        <a href="{{route('books.genres',['genres'=>'Self-help'])}}" class="btn mb-2 btn-light genre-button w-100">Self-help</a>
                                        <a href="{{route('books.genres',['genres'=>'True Crime'])}}" class="btn mb-2 btn-light genre-button w-100">True Crime</a>
                                        <a href="{{route('books.genres',['genres'=>'History'])}}" class="btn mb-2 btn-light genre-button w-100">History</a>
                                        <a href="{{route('books.genres',['genres'=>'Science'])}}" class="btn mb-2 btn-light genre-button w-100">Science</a>
                                        <a href="{{route('books.genres',['genres'=>'Travel'])}}" class="btn mb-2 btn-light genre-button w-100">Travel</a>
                                        <a href="{{route('books.genres',['genres'=>'Philosophy'])}}" class="btn mb-2 btn-light genre-button w-100">Philosophy</a>
                                        <a href="{{route('books.genres',['genres'=>'Religion/Spirituality'])}}" class="btn mb-2 btn-light genre-button w-100">Religion/Spirituality</a>
                                        <a href="{{route('books.genres',['genres'=>'Essays'])}}" class="btn mb-2 btn-light genre-button w-100">Essays</a>
                                        <a href="{{route('books.genres',['genres'=>'Journalism'])}}" class="btn mb-2 btn-light genre-button w-100">Journalism</a>

                                    </div>
                                    <div class="tab-pane fade mb-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <a href="{{route('books.genres',['genres'=>'Picture Books'])}}" class="btn mb-2 btn-light genre-button w-100">Picture Books</a>
                                        <a href="{{route('books.genres',['genres'=>'Early Readers'])}}" class="btn mb-2 btn-light genre-button w-100">Early Readers</a>
                                        <a href="{{route('books.genres',['genres'=>'Middle Grade Fiction'])}}" class="btn mb-2 btn-light genre-button w-100">Middle Grade Fiction</a>
                                        <a href="{{route('books.genres',['genres'=>'Fairytales & Fables'])}}" class="btn mb-2 btn-light genre-button w-100">Fairytales & Fables</a>
                                        <a href="{{route('books.genres',['genres'=>"Children's Fantasy"])}}" class="btn mb-2 btn-light genre-button w-100">Children's Fantasy</a>

                                    </div>
                                    <div class="tab-pane fade mb-4" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <a href="{{route('books.genres',['genres'=>'Graphic Novels/Comics'])}}" class="btn mb-2 btn-light genre-button w-100">Graphic Novels/Comics</a>
                                        <a href="{{route('books.genres',['genres'=>'Poetry'])}}" class="btn mb-2 btn-light genre-button w-100">Poetry</a>
                                        <a href="{{route('books.genres',['genres'=>'Satire'])}}" class="btn mb-2 btn-light genre-button w-100">Satire</a>
                                        <a href="{{route('books.genres',['genres'=>'Anthologies'])}}" class="btn mb-2 btn-light genre-button w-100">Anthologies</a>
                                        <a href="{{route('books.genres',['genres'=>'Plays'])}}" class="btn mb-2 btn-light genre-button w-100">Plays</a>

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
                <h5 class="card-title">Striped rows</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genres</th>
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
                        <td>
                            <ul style="padding: 0">
                                @foreach($book->genres as $genre)
                                    <li style="padding: 0">{{$genre->name}}</li>
                                @endforeach
                            </ul>
                        </td>
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

