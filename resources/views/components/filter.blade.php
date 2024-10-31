<div class="row mb-4 items-align-center">
    <div class="col-md">
        <ul class="nav nav-pills justify-content-start">
            @if (Route::is('books.index'))
            <li class="nav-item mr-1">
                <a class="nav-link bg-transparent pr-2 pl-0 text-warning" href="#">Books <span class="badge badge-pill bg-light-dark text-white">{{$resourceCount}}</span></a>
            </li>
            @elseif (Route::is('authors.index'))
            <li class="nav-item mr-1">
                <a class="nav-link bg-transparent pr-2 pl-0 text-warning" href="#">Authors <span class="badge badge-pill bg-dark-light text-white">{{$resourceCount}}</span></a>
            </li>
            @else

            @endif
            <li class="nav-item">
                <a class="nav-link text-muted px-2" href="#">Completed <span class="badge badge-pill bg-white border text-muted ml-2">52</span></a>
            </li>
        </ul>
    </div>
    <div class="col-md-auto ml-auto text-right">
        <button type="button" class="btn" data-toggle="modal" data-target=".modal-slide"><span class="fe fe-filter fe-16 text-muted"></span></button>
        <button type="button" class="btn">
            <span class="fe fe-refresh-ccw fe-16 text-muted"></span>
        </button>
    </div>
</div>
