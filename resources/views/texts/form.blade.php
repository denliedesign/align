 <!-- FORM -->
            <form action="/texts" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="textTag">Tag</label>
                    <input id="textTag" type="text" class="form-control" name="textTag"
                           value="{{ old('textTag', $text->textTag) }}">
                    <div>{{ $errors->first('textTag') }}</div>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" cols="30" rows="10" class="form-control"
                              id="text-textarea">{{ old('content', $text->content) }}</textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
 <!-- END FORM -->
