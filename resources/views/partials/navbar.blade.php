<nav class="navbar navbar-lg navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{ action('\App\Http\Controllers\HomeController@index') }}">Share it !</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                @if(auth()->check())
                    <li class="nav-item">
                        <a class="btn btn-outline-white" href="{{route('show_upload_form')}}">Upload file</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my_files')}}">MyFiles</a>
                    </li>
                @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about_us')}}">About us</a>
                    </li>
                @if(!auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Log in</a>
                    </li>
                @endif
            </ul>
            @if(auth()->check())
                <div class="dropdown">
                    <button class="btn btn-outline-white dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        {{auth()->user()->name}}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('show_upload_form')}}">Upload file</a>
                        <a class="dropdown-item" href="{{route('my_files')}}">MyFiles</a>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endif
            @if(!auth()->check())
                <a class="btn btn-outline-white" href="{{route('register')}}" target="_blank">Register</a>
            @endif
        </div>
    </div>
</nav>
