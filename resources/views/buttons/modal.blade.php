<div class="modal fade" data-bs-backdrop="static" id="buttonModal" tabindex="-1" aria-labelledby="buttonModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/buttons" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="buttonTag">Tag</label>
                    <input id="buttonTag" type="text" class="form-control" name="buttonTag"
                           value="">
                    <div>{{ $errors->first('buttonTag') }}</div>
                </div>

                <div class="form-group">
                    <label for="buttonText">Text</label>
                    <input id="buttonText" type="text" class="form-control" name="buttonText"
                           value="">
                    <div>{{ $errors->first('buttonText') }}</div>
                </div>

                <div class="form-group">
                    <label for="buttonLink">Link</label>
                    <input id="buttonLink" type="text" class="form-control" name="buttonLink"
                           value="">
                    <div>{{ $errors->first('buttonLink') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Button</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->

        </div>
    </div>
</div>
