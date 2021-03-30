<nav class="navbar navbar-lg navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{ action('\App\Http\Controllers\HomeController@index') }}">Share it !</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://robust.bootlab.io/index.html">Overview</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="https://robust.bootlab.io/demo-social.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://robust.bootlab.io/pages-landing.html">Landing</a>
                        <a class="dropdown-item" href="https://robust.bootlab.io/pages-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="https://robust.bootlab.io/pages-general.html">General</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://robust.bootlab.io/demo-social.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Components
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://robust.bootlab.io/components-bootstrap.html">Bootstrap</a>
                        <a class="dropdown-item" href="https://robust.bootlab.io/components-robust.html">Robust</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://robust.bootlab.io/index.html">Log in</a>
                </li>
            </ul>
            <a class="btn btn-outline-white" href="https://themes.getbootstrap.com/product/robust-ui-kit-dashboard-landing/" target="_blank">Register</a>
        </div>
    </div>
</nav>
