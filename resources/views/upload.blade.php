<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" />
    <button type="submit">Upload</button>
</form>


@if(isset($path))
<p>Resize:</p>
<img src="/storage/images/thumbnails/{{ $path }}">

<br>

<p>Original:</p>
<img src="/storage/images/{{ $path }}">
@endif

