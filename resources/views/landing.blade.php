<!DOCTYPE html>
<html lang="en">
<head>
  @include('head')
  <link rel="stylesheet" href="{{asset('css/landing.css')}}">

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
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            About
          </button>

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">About Page</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>This web just for people who want release the pressure on himself/herself. Yep, just for a loner.  </p>
            <p>The Team Who Created It:</p>
            <ul class="list-group">
              <li class="list-group-item list-group-item-dark">Zhafran Bahij as Project Manager</li>
              <li class="list-group-item list-group-item-dark">Rainfog Muzaba as Laravel Developer</li>
              <li class="list-group-item list-group-item-dark">Amekiri as Front End Developer</li>
            </ul>
            <p>Well, it's sad truth but some of the name is my name in game :"</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
  {{-- Bootstrap script --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>