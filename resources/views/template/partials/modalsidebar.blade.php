<div class="modal fade modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Filters</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x fe-12"></i>
                </button>
            </div>
            <div class="modal-body" data-select2-id="5">
                <div class="form-group">
                    <input type="text" class="form-control" id="filterText" placeholder="Title/Subtitle/Description">
                </div>
                <div class="form-group">
                    <label for="ISBN">ISBN</label>
                    <input type="text" id="filterISBN" name="ISBN" class="form-control" maxlength="17" placeholder="___-_-__-______-_" value="">
                </div>
                <div class="form-group">
                    <label for="example-helping">Pages</label>
                    <div class="row col-10">
                        <input type="text" id="filterMin" class="form-control col-3 mr-2" placeholder="Min">
                        <input type="text" id="filterMax" class="form-control col-3" placeholder="Max">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="date-input1">Publishing Date</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="date-input1" class="text-white-50">Start Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="filterPublishingStartingDate"><span class="fe fe-calendar fe-16"></span></div>
                                    </div>
                                    <input type="text" class="form-control drgpicker" id="filterPublishingStartingDate" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date-input1" class="text-white-50">Ending Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="filterPublishingEndingDate"><span class="fe fe-calendar fe-16"></span></div>
                                    </div>
                                    <input type="text" class="form-control drgpicker" id="filterPublishingEndingDate" value="">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-primary btn-block">Apply</button>
                <button type="button" class="btn mb-2 btn-secondary btn-block">Reset</button>
            </div>
        </div>
    </div>
</div>
