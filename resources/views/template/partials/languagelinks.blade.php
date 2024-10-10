<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
            <div class="card shadow">
                <div class="card-body py-4 mb-1">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">African</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Asian</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">European</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">North American</a>
                                <a class="nav-link" id="v-pills-1600-tab" data-toggle="pill" href="#v-pills-1600" role="tab" aria-controls="v-pills-settings" aria-selected="false">South American</a>
                                <a class="nav-link" id="v-pills-older-tab" data-toggle="pill" href="#v-pills-older" role="tab" aria-controls="v-pills-settings" aria-selected="false">Oceanian</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="tab-content mb-4" id="v-pills-tabContent">
                                <!--2000's-->
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'arabic']) }}" class="btn mb-2 btn-light genre-button w-100">Arabic</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'swahili']) }}" class="btn mb-2 btn-light genre-button w-100">Swahili</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'amharic']) }}" class="btn mb-2 btn-light genre-button w-100">Amharic</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'zulu']) }}" class="btn mb-2 btn-light genre-button w-100">Zulu</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'yoruba']) }}" class="btn mb-2 btn-light genre-button w-100">Yoruba</a>
                                </div>
                                <!--1900's-->
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'mandarin']) }}" class="btn mb-2 btn-light genre-button w-100">Mandarin Chinese</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'hindi']) }}" class="btn mb-2 btn-light genre-button w-100">Hindi</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'japanese']) }}" class="btn mb-2 btn-light genre-button w-100">Japanese</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'korean']) }}" class="btn mb-2 btn-light genre-button w-100">Korean</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'bengali']) }}" class="btn mb-2 btn-light genre-button w-100">Bengali</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'english']) }}" class="btn mb-2 btn-light genre-button w-100">English</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'french']) }}" class="btn mb-2 btn-light genre-button w-100">French</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'german']) }}" class="btn mb-2 btn-light genre-button w-100">German</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'spanish']) }}" class="btn mb-2 btn-light genre-button w-100">Spanish</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'russian']) }}" class="btn mb-2 btn-light genre-button w-100">Russian</a>

                                </div>
                                <!--1700's-->
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'english']) }}" class="btn mb-2 btn-light genre-button w-100">English</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'spanish']) }}" class="btn mb-2 btn-light genre-button w-100">Spanish</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'french']) }}" class="btn mb-2 btn-light genre-button w-100">French</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'haitian_creole']) }}" class="btn mb-2 btn-light genre-button w-100">Haitian Creole</a>
                                </div>
                                <!--1600's-->
                                <div class="tab-pane fade" id="v-pills-1600" role="tabpanel" aria-labelledby="v-pills-1600-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'spanish']) }}" class="btn mb-2 btn-light genre-button w-100">Spanish</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'portuguese']) }}" class="btn mb-2 btn-light genre-button w-100">Portuguese</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'quechua']) }}" class="btn mb-2 btn-light genre-button w-100">Quechua</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'guarani']) }}" class="btn mb-2 btn-light genre-button w-100">Guarani</a>
                                </div>
                                <!--Older-->
                                <div class="tab-pane fade" id="v-pills-older" role="tabpanel" aria-labelledby="v-pills-older-tab">
                                    <a href="{{ route('books.languages', ['languages'=> 'english']) }}" class="btn mb-2 btn-light genre-button w-100">English</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'maori']) }}" class="btn mb-2 btn-light genre-button w-100">Maori</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'samoan']) }}" class="btn mb-2 btn-light genre-button w-100">Samoan</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'fijian']) }}" class="btn mb-2 btn-light genre-button w-100">Fijian</a>
                                    <a href="{{ route('books.languages', ['languages'=> 'hawaiian']) }}" class="btn mb-2 btn-light genre-button w-100">Hawaiian</a>
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
                <p class="card-text">List of books based on selected language.</p>
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
                                            <a class="dropdown-item" href="{{route('books.edit',['book'=>$book])}}">Edit</a>
                                            <a class="dropdown-item" href="{{route('books.destroy', ['book'=>$book])}}">Remove</a>
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

