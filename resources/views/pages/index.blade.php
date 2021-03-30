@extends('layout.app')
@include('partials.navbar')
@section('content')
    <main class="main" role="main">
        <div class="py-6 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h1 class="h2 text-center">We have a plan for everyone</h1>
                        <p class="lead text-center mb-4">Whether you're a business or an individual, 14-day trial no credit card required.</p>

                        <div class="row justify-content-center mt-5 mb-4">
                            <div class="col-auto">
                                <nav class="nav btn-group">
                                    <a href="#monthly" class="btn btn-outline-primary active" data-toggle="tab">Monthly billing</a>
                                    <a href="#annual" class="btn btn-outline-primary" data-toggle="tab">Annual billing</a>
                                </nav>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="monthly">
                                <div class="row py-4 equal-height-cards">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Free</h5>
                                                    <span class="display-3">$0</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        1 users
                                                    </li>
                                                    <li class="mb-2">
                                                        5 projects
                                                    </li>
                                                    <li class="mb-2">
                                                        5 GB storage
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-outline-primary">Register</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Standard</h5>
                                                    <span class="display-3">$19</span>
                                                    <span>/mo</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        5 users
                                                    </li>
                                                    <li class="mb-2">
                                                        50 projects
                                                    </li>
                                                    <li class="mb-2">
                                                        50 GB storage
                                                    </li>
                                                    <li class="mb-2">
                                                        Security policy
                                                    </li>
                                                    <li class="mb-2">
                                                        Weekly backups
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-primary">Coming soon</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Plus</h5>
                                                    <span class="display-3">$39</span>
                                                    <span>/mo</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        Unlimited users
                                                    </li>
                                                    <li class="mb-2">
                                                        Unlimited projects
                                                    </li>
                                                    <li class="mb-2">
                                                        250 GB storage
                                                    </li>
                                                    <li class="mb-2">
                                                        Priority support
                                                    </li>
                                                    <li class="mb-2">
                                                        Security policy
                                                    </li>
                                                    <li class="mb-2">
                                                        Daily backups
                                                    </li>
                                                    <li class="mb-2">
                                                        Custom CSS
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-outline-primary">Coming soon ..</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane fade" id="annual">
                                <div class="row py-4 equal-height-cards">
                                    <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Free</h5>
                                                    <span class="display-3">$0</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        1 users
                                                    </li>
                                                    <li class="mb-2">
                                                        5 projects
                                                    </li>
                                                    <li class="mb-2">
                                                        5 GB storage
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-outline-primary">Register</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Standard</h5>
                                                    <span class="display-3">$199</span>
                                                    <span class="text-small4">/mo</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        5 users
                                                    </li>
                                                    <li class="mb-2">
                                                        50 projects
                                                    </li>
                                                    <li class="mb-2">
                                                        50 GB storage
                                                    </li>
                                                    <li class="mb-2">
                                                        Security policy
                                                    </li>
                                                    <li class="mb-2">
                                                        Weekly backups
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-primary">Coming soon</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h5>Plus</h5>
                                                    <span class="display-3">$399</span>
                                                    <span>/mo</span>
                                                </div>
                                                <h6>Includes:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        Unlimited users
                                                    </li>
                                                    <li class="mb-2">
                                                        Unlimited projects
                                                    </li>
                                                    <li class="mb-2">
                                                        250 GB storage
                                                    </li>
                                                    <li class="mb-2">
                                                        Priority support
                                                    </li>
                                                    <li class="mb-2">
                                                        Security policy
                                                    </li>
                                                    <li class="mb-2">
                                                        Daily backups
                                                    </li>
                                                    <li class="mb-2">
                                                        Custom CSS
                                                    </li>
                                                </ul>
                                                <div class="mt-auto">
                                                    <a href="#" class="btn btn-lg btn-outline-primary">Coming Soon</a>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.tab-pane -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
        <div class="py-6 bg-light ">
            <div class="container">

                <div class="row mb-6">
                    <div class="col-md-3 ml-auto">
                        <h2>Features included in every plan</h2>
                    </div>
                    <div class="col-md-5 mr-auto">
                        <p class="lead text-dark">
                            Robust is a theme built with Bootstrap 4, the popular UI framework. The theme is responsive and can be used for any type of web app.
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3">
                                <i class="far fa-id-badge"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Responsive</h3>
                                <p class="text-dark text-left">
                                    With mobile, tablet &amp; desktop support it doesn't matter what device you're using. Robust is responsive in all browsers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3 bg-warning">
                                <i class="far fa-hand-scissors"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Customizable</h3>
                                <p class="text-dark text-left">
                                    You don't need to be an expert to customize Robust. Our code is very readable and well documented.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3 bg-danger">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Quick support</h3>
                                <p class="text-dark text-left">
                                    Robust is supported by specialists who provide quick and effective support. Usually an email reply takes &lt;24h.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3 bg-success">
                                <i class="far fa-clone"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Cross browser</h3>
                                <p class="text-dark text-left">
                                    Robust works perfectly with: Chrome, Firefox, Safari, Opera and IE 10+. We're working hard to support them.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3 bg-purple">
                                <i class="far fa-gem"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Clean code</h3>
                                <p class="text-dark text-left">
                                    We strictly followed Bootstrap's guidelines to make your integration as easy as possible. All code is handwritten.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="icon mr-3">
                                <i class="far fa-arrow-alt-circle-down"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="h4">Free updates</h3>
                                <p class="text-dark text-left">
                                    From time to time you'll receive an update containing new components, improvements and bugfixes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </main>
@endsection
