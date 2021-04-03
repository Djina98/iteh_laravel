<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:white">
    <div class="container-fluid">
        <strong>
            <a class="navbar-brand" style="color:rgb(16, 128, 202)" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </strong>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <strong>
                    <a class="nav-link" aria-current="page" href="/" style="color:rgb(16, 128, 202)">Home</a>
                </strong>
              </li>
              <li class="nav-item">
                <strong>
                    <a class="nav-link" href="/about" style="color:rgb(16, 128, 202)">About</a>
                </strong>
              </li>
              <li class="nav-item">
                <strong>
                    <a class="nav-link" href="/services" style="color:rgb(16, 128, 202)">Services</a>
                </strong>
              </li>
              <li class="nav-item">
                <strong>
                    <a class="nav-link" href="/posts" style="color:rgb(16, 128, 202)">Blog</a>
                </strong>
              </li>
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <ul class="nav navbar-nav">
                <li><strong><a class="nav-link" href="/posts/create" style="color:rgb(202, 16, 202)">Create Post</a></strong></li>
              </ul>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <strong>
                                <a class="nav-link" style="color:rgb(202, 16, 202)" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </strong>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <strong>
                                <a class="nav-link" style="color:rgb(202, 16, 202)" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </strong>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:rgb(202, 16, 202)" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <strong>
                                <a class="dropdown-item" style="color:rgb(202, 16, 202)" href="/dashboard">Dashboard</a>
                            </strong>
                            <a class="dropdown-item" style="color:rgb(202, 16, 202)" href="{{ route('logout') }}"
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
  