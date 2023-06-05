<form method="POST" action="{{ route('movies.update', $movies->id) }}" enctype="multipart/form-data">
  @csrf 
    <div class="mb-3">
      <label for="Judul" class="form-label">Judul</label>
      <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="sinopsis" class="form-label">Sinopsis</label>
      <input type="text" name="sinopsis" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="durasi" class="form-label">Durasi</label>
        <input type="number" name="durasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>