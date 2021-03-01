<div class="container">
    <form action="/files" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" name="src" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>