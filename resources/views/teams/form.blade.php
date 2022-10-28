<!-- FORM -->
<form action="/teams" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="teamTag">Tag</label>
        <input id="teamTag" type="text" class="form-control" name="teamTag"
               value="{{ old('teamTag', $text->teamTag) }}">
        <div>{{ $errors->first('teamTag') }}</div>
    </div>
    <div class="form-group">
        <label for="teamImage">Image</label>
        <input type="file" class="form-control-file" name="teamImage">
        <div>{{ $errors->first('teamImage') }}</div>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name"
               value="{{ old('name', $text->name) }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" name="title"
               value="{{ old('title', $text->title) }}">
        <div>{{ $errors->first('title') }}</div>
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" cols="30" rows="10" class="form-control"
                  id="text-textarea">{{ old('bio', $text->bio) }}</textarea>
        <div>{{ $errors->first('bio') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
