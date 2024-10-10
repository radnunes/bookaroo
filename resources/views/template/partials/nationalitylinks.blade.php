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
                                    <a href="{{route('books.decades',['decades'=>2020])}}" class="btn mb-2 btn-light genre-button w-100">Portugal</a>
                                    <a href="{{route('books.decades',['decades'=>2010])}}" class="btn mb-2 btn-light genre-button w-100">Spain</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">England</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">Ireland</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">Ireland</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">Germany</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">Switzerland</a>
                                    <a href="{{route('books.decades',['decades'=>2000])}}" class="btn mb-2 btn-light genre-button w-100">Turkey</a>
                                </div>
                                <!--1900's-->
                                <div class="tab-pane fade" id="v-pills-Namerica" role="tabpanel" aria-labelledby="v-pills-Namerica-tab">
                                    <a href="{{route('books.decades',['decades'=>1990])}}" class="btn mb-2 btn-light genre-button w-100">USA</a>
                                    <a href="{{route('books.decades',['decades'=>1980])}}" class="btn mb-2 btn-light genre-button w-100">Canada</a>
                                    <a href="{{route('books.decades',['decades'=>1970])}}" class="btn mb-2 btn-light genre-button w-100">Mexico</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-Samerica" role="tabpanel" aria-labelledby="v-pills-Samerica-tab">
                                    <a href="{{route('books.decades',['decades'=>1890])}}" class="btn mb-2 btn-light genre-button w-100">Brazil</a>
                                    <a href="{{route('books.decades',['decades'=>1880])}}" class="btn mb-2 btn-light genre-button w-100">Argentina</a>
                                    <a href="{{route('books.decades',['decades'=>1870])}}" class="btn mb-2 btn-light genre-button w-100">Paraguay</a>
                                    <a href="{{route('books.decades',['decades'=>1860])}}" class="btn mb-2 btn-light genre-button w-100">Uruguay</a>
                                    <a href="{{route('books.decades',['decades'=>1850])}}" class="btn mb-2 btn-light genre-button w-100">Peru</a>
                                    <a href="{{route('books.decades',['decades'=>1840])}}" class="btn mb-2 btn-light genre-button w-100">Bolivia</a>
                                    <a href="{{route('books.decades',['decades'=>1830])}}" class="btn mb-2 btn-light genre-button w-100">Chile</a>
                                    <a href="{{route('books.decades',['decades'=>1820])}}" class="btn mb-2 btn-light genre-button w-100">Colombia</a>
                                    <a href="{{route('books.decades',['decades'=>1810])}}" class="btn mb-2 btn-light genre-button w-100">Venezuela</a>
                                    <a href="{{route('books.decades',['decades'=>1800])}}" class="btn mb-2 btn-light genre-button w-100">Ecuador</a>
                                </div>
                                <!--1800's-->
                                <div class="tab-pane fade" id="v-pills-Camerica" role="tabpanel" aria-labelledby="v-pills-Samerica-tab">
                                    <a href="{{route('books.decades',['decades'=>1890])}}" class="btn mb-2 btn-light genre-button w-100">Guatemala</a>
                                    <a href="{{route('books.decades',['decades'=>1880])}}" class="btn mb-2 btn-light genre-button w-100">El Salvador</a>
                                    <a href="{{route('books.decades',['decades'=>1870])}}" class="btn mb-2 btn-light genre-button w-100">Costa Rica</a>
                                    <a href="{{route('books.decades',['decades'=>1860])}}" class="btn mb-2 btn-light genre-button w-100">Panama</a>
                                    <a href="{{route('books.decades',['decades'=>1850])}}" class="btn mb-2 btn-light genre-button w-100">Honduras</a>
                                    <a href="{{route('books.decades',['decades'=>1840])}}" class="btn mb-2 btn-light genre-button w-100">Nicaragua</a>
                                    <a href="{{route('books.decades',['decades'=>1830])}}" class="btn mb-2 btn-light genre-button w-100">Belize</a>
                                    <a href="{{route('books.decades',['decades'=>1820])}}" class="btn mb-2 btn-light genre-button w-100">Cuba</a>
                                    <a href="{{route('books.decades',['decades'=>1810])}}" class="btn mb-2 btn-light genre-button w-100">Jamaica</a>
                                    <a href="{{route('books.decades',['decades'=>1800])}}" class="btn mb-2 btn-light genre-button w-100">Bahamas</a>
                                </div>
                                <!--1700's-->
                                <div class="tab-pane fade" id="v-pills-asia" role="tabpanel" aria-labelledby="v-pills-asia-tab">
                                    <a href="{{route('books.decades',['decades'=>1790])}}" class="btn mb-2 btn-light genre-button w-100">India</a>
                                    <a href="{{route('books.decades',['decades'=>1780])}}" class="btn mb-2 btn-light genre-button w-100">Japan</a>
                                    <a href="{{route('books.decades',['decades'=>1770])}}" class="btn mb-2 btn-light genre-button w-100">China</a>
                                    <a href="{{route('books.decades',['decades'=>1760])}}" class="btn mb-2 btn-light genre-button w-100">Thailand</a>
                                    <a href="{{route('books.decades',['decades'=>1750])}}" class="btn mb-2 btn-light genre-button w-100">Indonesia</a>
                                    <a href="{{route('books.decades',['decades'=>1740])}}" class="btn mb-2 btn-light genre-button w-100">Korea</a>
                                    <a href="{{route('books.decades',['decades'=>1730])}}" class="btn mb-2 btn-light genre-button w-100">UAE</a>
                                    <a href="{{route('books.decades',['decades'=>1720])}}" class="btn mb-2 btn-light genre-button w-100">Russia</a>
                                    <a href="{{route('books.decades',['decades'=>1710])}}" class="btn mb-2 btn-light genre-button w-100">Israel</a>
                                    <a href="{{route('books.decades',['decades'=>1700])}}" class="btn mb-2 btn-light genre-button w-100">Bangladesh</a>
                                </div>
                                <!--1600's-->
                                <div class="tab-pane fade" id="v-pills-africa" role="tabpanel" aria-labelledby="v-pills-africa-tab">
                                    <a href="{{route('books.decades',['decades'=>1690])}}" class="btn mb-2 btn-light genre-button w-100">South Africa</a>
                                    <a href="{{route('books.decades',['decades'=>1680])}}" class="btn mb-2 btn-light genre-button w-100">Angola</a>
                                    <a href="{{route('books.decades',['decades'=>1670])}}" class="btn mb-2 btn-light genre-button w-100">Cameroon</a>
                                    <a href="{{route('books.decades',['decades'=>1660])}}" class="btn mb-2 btn-light genre-button w-100">Cape Green</a>
                                    <a href="{{route('books.decades',['decades'=>1650])}}" class="btn mb-2 btn-light genre-button w-100">Mozambique</a>
                                    <a href="{{route('books.decades',['decades'=>1640])}}" class="btn mb-2 btn-light genre-button w-100">Nigeria</a>
                                    <a href="{{route('books.decades',['decades'=>1630])}}" class="btn mb-2 btn-light genre-button w-100">Ethiopia</a>
                                    <a href="{{route('books.decades',['decades'=>1620])}}" class="btn mb-2 btn-light genre-button w-100">Egypt</a>
                                    <a href="{{route('books.decades',['decades'=>1610])}}" class="btn mb-2 btn-light genre-button w-100">Morocco</a>
                                    <a href="{{route('books.decades',['decades'=>1600])}}" class="btn mb-2 btn-light genre-button w-100">Guinea</a>
                                </div>
                                <!--Older-->
                                <div class="tab-pane fade" id="v-pills-oceania" role="tabpanel" aria-labelledby="v-pills-oceania-tab">
                                    <a href="{{route('books.decades',['decades'=>1500])}}" class="btn mb-2 btn-light genre-button w-100">Australia</a>
                                    <a href="{{route('books.decades',['decades'=>1400])}}" class="btn mb-2 btn-light genre-button w-100">Papua New Guinea</a>
                                    <a href="{{route('books.decades',['decades'=>1300])}}" class="btn mb-2 btn-light genre-button w-100">New Zealand</a>
                                    <a href="{{route('books.decades',['decades'=>1200])}}" class="btn mb-2 btn-light genre-button w-100">Fiji</a>
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
                        <th>Publication Date</th>
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
                                <!--<td>
                                    <ul style="padding: 0">

                                    </ul>
                                </td>
                                <td>pages</td>
                                <td>date</td>-->
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
