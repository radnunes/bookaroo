<div class="modal fade modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="filterForm" method="GET"   action="{{ route('books.index') }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Filters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x fe-12"></i>
                    </button>
                </div>
                <div class="modal-body" data-select2-id="5">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" id="filterText" placeholder="Title/Subtitle/Description" value="{{ request('search') }}">
                    </div>
                    <div class="form-group">
                        <label for="ISBN">ISBN</label>
                        <input type="text" id="filterISBN" name="ISBN" class="form-control" maxlength="17" placeholder="___-_-__-______-_" value="{{ request('ISBN') }}">
                    </div>
                    <div class="form-group">
                        <label for="example-helping">Pages</label>
                        <div class="row col-10">
                            <input type="text" id="filterMin" name="pages_min" class="form-control col-3 mr-2" placeholder="Min">
                            <input type="text" id="filterMax" name="pages_max" class="form-control col-3" placeholder="Max">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group d-flex align-items-center mb-0">
                            <label for="date-input1" class="mr-2 mt-3 h6">Publishing Date</label>
                            <div class="custom-control custom-switch mt-1">
                                <input type="checkbox" class="custom-control-input" id="toggleSingleDate">
                                <label class="custom-control-label" for="toggleSingleDate"></label>
                            </div>
                        </div>
                        <p class="text-white-50 unselectable">Alter between single date and range date</p>
                        <div class="form-row">
                            <!-- Single Date Picker (Hidden by Default) -->
                            <div class="form-group col-md-6 date-picker" id="singleDatePicker" style="display: none;">
                                <label for="singleDate" class="text-white-50 unselectable">Single Date</label>
                                <div class="input-group">
                                    <input type="date" id="singleDate" name="single_date" class="form-control" placeholder="Date" value="{{ request('single_date') }}">
                                </div>
                            </div>

                            <!-- Start Date Picker -->
                            <div class="form-group col-md-6 date-picker" id="startDatePicker">
                                <label for="startingDate" class="text-white-50">Starting Date</label>
                                <div class="input-group">
                                    <input type="date" id="startingDate" name="start_date" class="form-control" placeholder="Starting Date" value="{{ request('start_date') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6 date-picker" id="endDatePicker">
                                <label for="endingDate" class="text-white-50">Ending Date</label>
                                <div class="input-group">
                                    <input type="date" id="endingDate" name="ending_date" class="form-control" placeholder="Ending Date" value="{{ request('ending_date') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="genres">Genres</label>
                        <select class="form-control select2-multi" id="genres" name="genres[]" multiple="multiple">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}"
                                        @if(in_array($genre->id, request('genres', []))) selected @endif>
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="publisher">Publisher</label>
                        <select class="form-control select2" id="publisher" name="publisher">
                            <option value="" selected disabled>Select a Publisher</option>
                            @foreach($publishers as $publisher)
                                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="language">Language</label>
                        <select class="form-control select2" id="language" name="language"> <!-- Changed id and name to language -->
                            <option value="" selected disabled>Select a Language</option>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="language">Authors</label>
                        <select class="form-control select2" id="authors" name="authors[]" multiple="multiple"> <!-- Changed id and name to language -->
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn mb-2 btn-primary btn-block">Apply</button>
                    <button type="reset" id="resetButton" class="btn mb-2 btn-secondary btn-block">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
