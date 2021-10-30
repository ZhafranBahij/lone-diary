<!DOCTYPE html>
<html lang="en">
<head>
  @include('head')
</head>
<body>
  @include('navbar')
  <form method="POST" action="/TheDiary" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="name" class="form-control" id="title" name="title" required value="Weather">
    </div>
    <div class="mb-3">
      <label for="diary" class="form-label">Diary</label>
      <textarea class="form-control" id="diary" name="diary" rows="6" required>The Weather is Nice</textarea>
    </div>
    <div class="mb-3">
      <label for="diary_image" class="form-label">Image</label>
      <input type="file" class="form-control" id="diary_image" name="diary_image" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- Bootstrap script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>