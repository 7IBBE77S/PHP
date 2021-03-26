
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>BidPro - Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/global.css" />
      
     
     
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-bidpro fixed-top">
                <a class="navbar-brand" href="{{ route('home') }}">
              <img src="/images/BidProLogo.gif" alt="BidPro Logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#bidProMenu"
              aria-controls="bidProMenu"
              aria-expanded="false"
              aria-label="Toggle Navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div
              class="collapse navbar-collapse justify-content-end"
              id="bidProMenu"
            >
              <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item active dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="/american-airlines"
                    id="AADropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    American Airlines
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="AADropdown"
                  >
                  <a class="dropdown-item" href="{{ route('aa.bidtypes') }}">Bidtypes</a>
                  <a class="dropdown-item" href="{{ route('aa.pilots') }}">Pilots</a>
                 
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="/alaska-airlines"
                    id="ASDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Alaska Airlines
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="ASDropdown"
                  >
                  <a class="dropdown-item" href="{{ route('ak.bidtypes') }}">Bidtypes</a>
                  <a class="dropdown-item" href="{{ route('ak.pilots') }}">Pilots</a>
                
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="/jetsuite"
                    id="JSDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Jetsuite
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="JSDropdown"
                  >
                  <a class="dropdown-item" href="{{ route('js.bidtypes') }}">Bidtypes</a>
                  <a class="dropdown-item" href="{{ route('js.pilots') }}">Pilots</a>
                  
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="/ups"
                    id="UPSDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    UPS
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="UPSDropdown"
                  >
                  <a class="dropdown-item" href="{{ route('u.bidtypes') }}">Bidtypes</a>
                  <a class="dropdown-item" href="{{ route('u.pilots') }}">Pilots</a>
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
              </ul>
            </div>
          </nav>
        </header>
    <h1></h1>
        <main class="container navbar-padding">
            @yield('content')
        </main>
      
        <footer id="footer" class="container-fluid position-sticky fixed-bottom text-center">
          <hr>
          <small>Copyright 1993-2018 Exceptional Design Enterprises</small>
          </footer>
      <script
      src="https://kit.fontawesome.com/ea41737762.js"
      crossorigin="anonymous"
    ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
    </html>