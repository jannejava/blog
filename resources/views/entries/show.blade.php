<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 py-4">
            <form action="{{ route('blog.update', ['id' => $entry->id]) }}" method="post">
                <div class="form-group">
                    <label for="headline">Headline</label>
                    <input type="text" value="{{ old('headline', $entry->headline) }}" name="headline" id="headline" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Text</label>
                    <textarea name="text" id="text" rows="10" class="form-control mb-4">{{ old('text', $entry->text) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Skicka</button>
            </form>
        </div>
    </div>
</div>

</body>


</html>
