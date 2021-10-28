<!DOCTYPE html>
<html lang="en">
<head>
  @include('head')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
</head>
<body>
  @include('navbar')

  <h1>Ini Display Page</h1>
  @foreach ($data as $item)
  <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/diaryImage.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text">{{$item->diary}}</p>
      <small>{{$item->author}}</small>
      <a href="/TheDiary/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
      <form method="POST" action="/TheDiary/{{$item->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
  @endforeach
  {{-- Bootstrap script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>