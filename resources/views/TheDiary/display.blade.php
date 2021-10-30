<!DOCTYPE html>
<html lang="en">
<head>
  @include('head')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/landing.css')}}">
</head>
<body>
  
  <div class="landing">
    <div class="landingx">  
      @include('navbar')
      <div class="container">
      <div class="row justify-content-center">  
        @foreach ($data as $item)
        <div class="card col-md-6 col-lg-4 col-12 mr-5" style="width: 18rem; margin: 2rem 0 0 2rem;">
          <img src="/storage/{{$item->image}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{$item->diary}}</p>
            <small>{{$item->author}}</small>
            @if (auth()->user()->name == $item->author)
              <a href="/TheDiary/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <form method="POST" action="/TheDiary/{{$item->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div></div>
  </div>


  {{-- Bootstrap script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>