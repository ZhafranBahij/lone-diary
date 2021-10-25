<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lone Diary</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  @include('navbar')
  <form method="POST" action="/TheDiary">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="name" class="form-control" id="title" name="title" required value="Weather">
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="name" class="form-control" id="author" name="author" required value="Aoi Riki">
    </div>
    <div class="mb-3">
      <label for="diary" class="form-label">Diary</label>
      <textarea class="form-control" id="diary" name="diary" rows="6" required>The Weather is Nice</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- Bootstrap script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>