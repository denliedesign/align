<div class="modal fade" data-bs-backdrop="static" id="textModal" tabindex="-1" aria-labelledby="textModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/texts" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="textTag">Tag</label>
                    <input id="textTag" type="text" class="form-control" name="textTag"
                           value="">
                    <div>{{ $errors->first('textTag') }}</div>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" cols="30" rows="10" class="form-control"
                              id="text-textarea"></textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Text</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->

        </div>
    </div>
</div>
