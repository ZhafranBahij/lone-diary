<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-opacity-10">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="font-family: 'Italianno', cursive; font-size: 2rem">Lone Diary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (isset($title))
        <li class="nav-item">
          <a class="nav-link {{$title == "home"? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$title == "diary"? 'active' : '' }}" href="/TheDiary">Diary</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link {{$title == "create"? 'active' : '' }}" href="/TheDiary/create">Let's Play</a>
        </li>
        @endauth
        {{-- @endif --}}
        @else
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/TheDiary">Diary</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="/TheDiary/create">Let's Play</a>
        </li>
        @endauth
        @endif


        
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            {{-- @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif --}}
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>
  </div>
</nav>


