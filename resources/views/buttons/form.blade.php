<!-- FORM -->
<form action="/buttons" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="buttonTag">Tag</label>
        <input id="buttonTag" type="text" class="form-control" name="buttonTag"
               value="{{ old('buttonTag', $button->buttonTag) }}">
        <div>{{ $errors->first('buttonTag') }}</div>
    </div>

    <div class="form-group">
        <label for="buttonText">Text</label>
        <input id="buttonText" type="text" class="form-control" name="buttonText"
               value="{{ old('buttonText', $button->buttonText) }}">
        <div>{{ $errors->first('buttonText') }}</div>
    </div>

    <div class="form-group">
        <label for="buttonLink">Link</label>
        <input id="buttonLink" type="text" class="form-control" name="buttonLink"
               value="{{ old('buttonLink', $button->buttonLink) }}">
        <div>{{ $errors->first('buttonLink') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
