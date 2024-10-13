<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
            <div class="card shadow">
                <div class="card-body py-4 mb-1">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-classical" role="tab" aria-controls="v-pills-classical" aria-selected="true">Classical</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-renaissance" role="tab" aria-controls="v-pills-renaissance" aria-selected="false">Renaissance</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-18th19th" role="tab" aria-controls="v-pills-18th19th" aria-selected="false">18th to 19th century</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-20th" role="tab" aria-controls="v-pills-20th" aria-selected="false">Early 20th century</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-WWII" role="tab" aria-controls="v-pills-WWII" aria-selected="false">Post-World War II</a>
                                <a class="nav-link" id="v-pills-1600-tab" data-toggle="pill" href="#v-pills-contemporary" role="tab" aria-controls="v-pills-contemporary" aria-selected="false">Contemporary</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="tab-content mb-4" id="v-pills-tabContent">
                                <!--2000's-->
                                <div class="tab-pane fade active show" id="v-pills-classical" role="tabpanel" aria-labelledby="v-pills-classical-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Ancient'])}}" class="btn mb-2 btn-light genre-button w-100">Ancient</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Medieval'])}}" class="btn mb-2 btn-light genre-button w-100">Medieval</a>
                                </div>
                                <!--1900's-->
                                <div class="tab-pane fade" id="v-pills-renaissance" role="tabpanel" aria-labelledby="v-pills-renaissance-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Renaissance'])}}" class="btn mb-2 btn-light genre-button w-100">Renaissance</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Enlightenment'])}}" class="btn mb-2 btn-light genre-button w-100">Enlightenment</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-18th19th" role="tabpanel" aria-labelledby="v-pills-18th19th-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Romanticism'])}}" class="btn mb-2 btn-light genre-button w-100">Romanticism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Gothic'])}}" class="btn mb-2 btn-light genre-button w-100">Gothic</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Realism'])}}" class="btn mb-2 btn-light genre-button w-100">Realism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Naturalism'])}}" class="btn mb-2 btn-light genre-button w-100">Naturalism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Transcendentalism'])}}" class="btn mb-2 btn-light genre-button w-100">Transcendentalism</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-20th" role="tabpanel" aria-labelledby="v-pills-20th-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Modernism'])}}" class="btn mb-2 btn-light genre-button w-100">Modernism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Symbolism'])}}" class="btn mb-2 btn-light genre-button w-100">Symbolism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Surrealism'])}}" class="btn mb-2 btn-light genre-button w-100">Surrealism</a>
                                </div>
                                <!--1700's-->
                                <div class="tab-pane fade" id="v-pills-WWII" role="tabpanel" aria-labelledby="v-pills-WWII-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Postmodernism'])}}" class="btn mb-2 btn-light genre-button w-100">Postmodernism</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Beat Generation'])}}" class="btn mb-2 btn-light genre-button w-100">Beat Generation</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Magical Realism'])}}" class="btn mb-2 btn-light genre-button w-100">Magical Realism</a>
                                </div>
                                <!--1600's-->
                                <div class="tab-pane fade" id="v-pills-contemporary" role="tabpanel" aria-labelledby="v-pills-contemporary-tab">
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Contemporary'])}}" class="btn mb-2 btn-light genre-button w-100">Contemporary</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Postcolonial'])}}" class="btn mb-2 btn-light genre-button w-100">Postcolonial</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Cameroonian'])}}" class="btn mb-2 btn-light genre-button w-100">Cameroonian</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Cyberpunk and Science Fiction'])}}" class="btn mb-2 btn-light genre-button w-100">Cyberpunk and Science Fiction</a>
                                    <a href="{{route('authors.literary_movements',['literary_movement'=>'Feminist Literature'])}}" class="btn mb-2 btn-light genre-button w-100">Feminist Literature</a>
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
                <h5 class="card-title">Authors</h5>
                <p class="card-text">List of authors based on selected Literary Movement.</p>
                <a type="button" class="btn mb-1 btn-outline-primary" href="{{route('authors.create')}}">Create new author</a>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Books</th>
                        <th>Literary Movements</th>
                        <th>Gender</th>
                    </tr>
                    </thead>
                    @if(!count($authors))
                        <tdbody>
                            <tr>
                                <td>
                                    <h2>{{"No authors found!"}}</h2>
                                </td>
                            </tr>
                        </tdbody>


                    @elseif(count($authors))
                        <tbody>
                        @foreach($authors as $author)
                            <tr onclick="window.location='{{ route('authors.show', ['author' => $author->id]) }}'" style="cursor: pointer;">
                                <td>{{$author->id}}</td>
                                <td>{{$author->name}}</td>
                                <td>
                                    <ul style="padding: 0">
                                        @foreach($author->books as $book)
                                            <li style="padding: 0">{{$book->title}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{$author->literary_moviments->name}}</td>
                                <td>
                                    @if($author->gender == 'M' || $author->gender  == 'm')
                                        Male
                                    @elseif($author->gender  == 'F' || $author->gender  == 'f')
                                        Female
                                    @endif
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
