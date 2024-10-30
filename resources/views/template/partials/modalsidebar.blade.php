<div class="modal fade modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="GET"   action="{{ route('books.index') }}">
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
                        <label for="example-select">Genres</label>
                        <select class="form-control select2-multi" id="genres" name="genres[]" multiple="multiple">
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="custom-select">Publisher - Falta implementar modelo/tabela</label>
                        <select class="custom-select" id="custom-select">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="custom-select">Language - Falta implementar modelo/tabela</label>
                        <select class="custom-select" id="custom-select">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn mb-2 btn-primary btn-block">Apply</button>
                    <button type="reset" class="btn mb-2 btn-secondary btn-block">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
