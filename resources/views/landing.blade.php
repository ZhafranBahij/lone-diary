<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lone Diary</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/landing.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

</head>
<body>
  

  <div class="landing">
    <div class="landingx">
      @include('navbar')
      <div class="container mt-5">
        <div class="row">
        <div class="col-12 col-sm-6 glass">
          <p id="subtitle">The Diary for a loner</p>
          <h1>Lone Diary</h1>
          <p class="mt-3 mb-5 text-primary">World is cruel but if you see to another thing, it can be beautiful. Release the untold story in your mind. Then, relax yourself. The world isn't your world but your existence is meaningful for other people.</p>
          @auth
          <a href="/TheDiary/create" type="button" class="btn btn-primary">Create a Untold Story</a>
          @else
          <a href="/login" type="button" class="btn btn-primary">Create a Untold Story</a>
          @endauth
          
        </div>
      </div>
      </div>
    </div>
  </div>

  {{-- Bootstrap script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>