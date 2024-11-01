<div class="row mb-2 items-align-center">
    <div class="col-md-auto ml-auto text-right">
        <!-- search filter tag -->
        @if(request()->has('search') && request('search') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">Search: "{{ request('search') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'search')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        <!-- Filter tags -->
        @if(request()->has('ISBN') && request('ISBN') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">ISBN: "{{ request('ISBN') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'ISBN')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('pages_min') && request('pages_min') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">Pages Min: "{{ request('pages_min') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'pages_min')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('pages_max') && request('pages_max') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">Pages Max: "{{ request('pages_max') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'pages_max')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('single_date') && request('single_date') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">Single Date: "{{ request('single_date') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'single_date')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('start_date') && request('start_date') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">Start Date: "{{ request('start_date') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'start_date')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('ending_date') && request('ending_date') != '')
            <span class="small bg-white border py-1 pl-1 rounded mr-0">
                <span class="text-muted">End Date: "{{ request('ending_date') }}"</span>
                <a href="{{ route('books.index', Arr::except(request()->all(), 'ending_date')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            </span>
        @endif

        @if(request()->has('genres') && request('genres') != '')
            @foreach(request('genres') as $genreId)
                @php
                    $genre = $genres->firstWhere('id', $genreId);
                @endphp
                @if($genre)
                    <span class="small bg-white border py-1 pl-1 rounded mr-0">
                        <span class="text-muted">Genre: "{{ $genre->name }}"</span>
                        <a href="{{ route('books.index', Arr::except(request()->all(), 'genres')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    </span>
                @endif
            @endforeach
        @endif

        @if(request()->has('publisher') && request('publisher') != '')
            @php
                $publisher = $publishers->firstWhere('id', request('publisher'));
            @endphp
            @if($publisher)
                <span class="small bg-white border py-1 pl-1 rounded mr-0">
                    <span class="text-muted">Publisher: "{{ $publisher->name }}"</span>
                    <a href="{{ route('books.index', Arr::except(request()->all(), 'publisher')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                </span>
            @endif
        @endif

        @if(request()->has('language') && request('language') != '')
            @php
                $language = $languages->firstWhere('id', request('language'));
            @endphp
            @if($language)
                <span class="small bg-white border py-1 pl-1 rounded mr-0">
                    <span class="text-muted">Language: "{{ $language->name }}"</span>
                    <a href="{{ route('books.index', Arr::except(request()->all(), 'language')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                </span>
            @endif
        @endif

        @if(request()->has('authors') && request('authors') != '')
            @foreach(request('authors') as $authorId)
                @php
                    $author = $authors->firstWhere('id', $authorId);
                @endphp
                @if($author)
                    <span class="small bg-white border py-1 pl-1 rounded mr-0">
                        <span class="text-muted">Author: "{{ $author->name }}"</span>
                        <a href="{{ route('books.index', Arr::except(request()->all(), 'authors')) }}" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    </span>
                @endif
            @endforeach
        @endif

        <!-- Filter Button -->
        <button type="button" class="btn" data-toggle="modal" data-target=".modal-slide">
            <span class="fe fe-filter fe-16 text-muted"></span>
        </button>
        <button type="button" class="btn">
            <span class="fe fe-refresh-ccw fe-16 text-muted"></span>
        </button>
    </div>
</div>
