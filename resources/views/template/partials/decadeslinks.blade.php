<div class="row">
    <div class="col-md-3">
        <div class="col-md-12 mb-3 mt-4">
            <div class="card shadow">
                <div class="card-body py-4 mb-1">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">2000</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">1900</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">1800</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">1700</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">1600</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Older</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="tab-content mb-4" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <a href="{{route('books.decades',['decades'=>90])}}" class="btn mb-2 btn-light genre-button w-100">90's</a>
                                    <a href="{{route('books.decades',['decades'=>80])}}" class="btn mb-2 btn-light genre-button w-100">80's</a>
                                    <a href="{{route('books.decades',['decades'=>70])}}" class="btn mb-2 btn-light genre-button w-100">70's</a>
                                    <a href="{{route('books.decades',['decades'=>60])}}" class="btn mb-2 btn-light genre-button w-100">60's</a>
                                    <a href="{{route('books.decades',['decades'=>50])}}" class="btn mb-2 btn-light genre-button w-100">50's</a>
                                    <a href="{{route('books.decades',['decades'=>40])}}" class="btn mb-2 btn-light genre-button w-100">40's</a>
                                    <a href="{{route('books.decades',['decades'=>30])}}" class="btn mb-2 btn-light genre-button w-100">30's</a>
                                    <a href="{{route('books.decades',['decades'=>20])}}" class="btn mb-2 btn-light genre-button w-100">20's</a>
                                    <a href="{{route('books.decades',['decades'=>10])}}" class="btn mb-2 btn-light genre-button w-100">10's</a>
                                    <a href="{{route('books.decades',['decades'=>00])}}" class="btn mb-2 btn-light genre-button w-100">00's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROWS -->
    @if(count($books))
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
                        <th>Nº of Pages</th>
                        <th>Publication Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
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

