<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
            <div class="card shadow">
                <div class="card-body py-4 mb-1">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-europe" role="tab" aria-controls="v-pills-europe" aria-selected="true">Europe</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-Namerica" role="tab" aria-controls="v-pills-Namerica" aria-selected="false">North America</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-Samerica" role="tab" aria-controls="v-pills-Camerica" aria-selected="false">Central America</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-Samerica" role="tab" aria-controls="v-pills-Samerica" aria-selected="false">South America</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-asia" role="tab" aria-controls="v-pills-asia" aria-selected="false">Asia</a>
                                <a class="nav-link" id="v-pills-1600-tab" data-toggle="pill" href="#v-pills-africa" role="tab" aria-controls="v-pills-africa" aria-selected="false">Africa</a>
                                <a class="nav-link" id="v-pills-older-tab" data-toggle="pill" href="#v-pills-oceania" role="tab" aria-controls="v-pills-oceania" aria-selected="false">Oceania</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="tab-content mb-4" id="v-pills-tabContent">
                                <!--2000's-->
                                <div class="tab-pane fade active show" id="v-pills-europe" role="tabpanel" aria-labelledby="v-pills-europe-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'Portuguese'])}}" class="btn mb-2 btn-light genre-button w-100">Portuguese</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Spanish'])}}" class="btn mb-2 btn-light genre-button w-100">Spanish</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'French'])}}" class="btn mb-2 btn-light genre-button w-100">French</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'English'])}}" class="btn mb-2 btn-light genre-button w-100">English</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Irish'])}}" class="btn mb-2 btn-light genre-button w-100">Irish</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Italian'])}}" class="btn mb-2 btn-light genre-button w-100">Italian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'German'])}}" class="btn mb-2 btn-light genre-button w-100">German</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Dutch'])}}" class="btn mb-2 btn-light genre-button w-100">Dutch</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Swiss'])}}" class="btn mb-2 btn-light genre-button w-100">Swiss</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Turkish'])}}" class="btn mb-2 btn-light genre-button w-100">Turkish</a>
                                </div>
                                <!--1900's-->
                                <div class="tab-pane fade" id="v-pills-Namerica" role="tabpanel" aria-labelledby="v-pills-Namerica-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'American'])}}" class="btn mb-2 btn-light genre-button w-100">American</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Canadian'])}}" class="btn mb-2 btn-light genre-button w-100">Canadian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Mexican'])}}" class="btn mb-2 btn-light genre-button w-100">Mexican</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-Samerica" role="tabpanel" aria-labelledby="v-pills-Samerica-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'Brazilian'])}}" class="btn mb-2 btn-light genre-button w-100">Brazilian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Argentinian'])}}" class="btn mb-2 btn-light genre-button w-100">Argentinian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Paraguayan'])}}" class="btn mb-2 btn-light genre-button w-100">Paraguayan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Uruguayan'])}}" class="btn mb-2 btn-light genre-button w-100">Uruguayan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Peruvian'])}}" class="btn mb-2 btn-light genre-button w-100">Peruvian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Bolivian'])}}" class="btn mb-2 btn-light genre-button w-100">Bolivian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Chilean'])}}" class="btn mb-2 btn-light genre-button w-100">Chilean</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Colombian'])}}" class="btn mb-2 btn-light genre-button w-100">Colombian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Venezuelan'])}}" class="btn mb-2 btn-light genre-button w-100">Venezuelan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Ecuadorian'])}}" class="btn mb-2 btn-light genre-button w-100">Ecuadorian</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-Camerica" role="tabpanel" aria-labelledby="v-pills-Samerica-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'Guatemalan'])}}" class="btn mb-2 btn-light genre-button w-100">Guatemalan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Salvadorean'])}}" class="btn mb-2 btn-light genre-button w-100">Salvadorean</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Costa Rican'])}}" class="btn mb-2 btn-light genre-button w-100">Costa Rican</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Panamanian'])}}" class="btn mb-2 btn-light genre-button w-100">Panamanian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Honduran'])}}" class="btn mb-2 btn-light genre-button w-100">Honduran</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Nicaraguan'])}}" class="btn mb-2 btn-light genre-button w-100">Nicaraguan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Belizean'])}}" class="btn mb-2 btn-light genre-button w-100">Belizean</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Cuban'])}}" class="btn mb-2 btn-light genre-button w-100">Cuban</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Jamaican'])}}" class="btn mb-2 btn-light genre-button w-100">Jamaican</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Bahamian'])}}" class="btn mb-2 btn-light genre-button w-100">Bahamian</a>
                                </div>
                                <!--1700's-->
                                <div class="tab-pane fade" id="v-pills-asia" role="tabpanel" aria-labelledby="v-pills-asia-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'Indian'])}}" class="btn mb-2 btn-light genre-button w-100">Indian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Japanese'])}}" class="btn mb-2 btn-light genre-button w-100">Japanese</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Chinese'])}}" class="btn mb-2 btn-light genre-button w-100">Chinese</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Thai'])}}" class="btn mb-2 btn-light genre-button w-100">Thai</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Indonesian'])}}" class="btn mb-2 btn-light genre-button w-100">Indonesian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Korean'])}}" class="btn mb-2 btn-light genre-button w-100">Korean</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Emirati'])}}" class="btn mb-2 btn-light genre-button w-100">Emirati</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Russian'])}}" class="btn mb-2 btn-light genre-button w-100">Russian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Israeli'])}}" class="btn mb-2 btn-light genre-button w-100">Israeli</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Bangladeshi'])}}" class="btn mb-2 btn-light genre-button w-100">Bangladeshi</a>
                                </div>
                                <!--1600's-->
                                <div class="tab-pane fade" id="v-pills-africa" role="tabpanel" aria-labelledby="v-pills-africa-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'South African'])}}" class="btn mb-2 btn-light genre-button w-100">South African</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Angolan'])}}" class="btn mb-2 btn-light genre-button w-100">Angolan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Cameroonian'])}}" class="btn mb-2 btn-light genre-button w-100">Cameroonian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Cape Verdean'])}}" class="btn mb-2 btn-light genre-button w-100">Cape Verdean</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Mozambican'])}}" class="btn mb-2 btn-light genre-button w-100">Mozambican</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Nigerian'])}}" class="btn mb-2 btn-light genre-button w-100">Nigerian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Ethiopian'])}}" class="btn mb-2 btn-light genre-button w-100">Ethiopian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Egyptian'])}}" class="btn mb-2 btn-light genre-button w-100">Egyptian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Moroccan'])}}" class="btn mb-2 btn-light genre-button w-100">Moroccan</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'Guinean'])}}" class="btn mb-2 btn-light genre-button w-100">Guinean</a>
                                </div>
                                <!--Older-->
                                <div class="tab-pane fade" id="v-pills-oceania" role="tabpanel" aria-labelledby="v-pills-oceania-tab">
                                    <a href="{{route('authors.nationality',['nationality'=>'Australian'])}}" class="btn mb-2 btn-light genre-button w-100">Australian</a>
                                    <a href="{{route('authors.nationality',['nationality'=>'New Zealander'])}}" class="btn mb-2 btn-light genre-button w-100">New Zealander</a>
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
                <p class="card-text">List of books based on selected decade.</p>
                <button type="button" class="btn mb-1 btn-outline-primary">Create new book</button>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Books</th>
                        <th>Nationality</th>
                        <th>Gender</th>
                        <th>Action</th>
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
                            <tr>
                                <td>{{$author->id}}</td>
                                <td>{{$author->name}}</td>
                                <td>
                                    <ul style="padding: 0">
                                        @foreach($author->books as $book)
                                            <li style="padding: 0">{{$book->title}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{$author->nationality}}</td>
                                <td>
                                    @if($author->gender == 'M' || $author->gender  == 'm')
                                        Male
                                    @elseif($author->gender  == 'F' || $author->gender  == 'f')
                                        Female
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1" style="">
                                            <a class="dropdown-item" href="{{route('authors.edit',['author'=>$author])}}">Edit</a>
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
