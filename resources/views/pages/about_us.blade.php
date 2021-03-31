@extends('layout.app')
@section('title') About Us @endsection
@include('partials.navbar')
@section('content')
    <main class="main" role="main">
        <div class="py-5 bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 mx-auto">
                        <article class="mb-4">
                            <h1 class="h2 text-center">About us</h1>
                            <p class="lead text-center mb-4">We believe in simple and efficient ways to grow a business by being smart, relevant and most importantly straightforward.</p>

                            <img src="img/7.jpg" alt="About us" class="img-fluid mb-4 shadow-md">

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque <a href="#">penatibus</a> et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, <strong>pretium quis, sem.</strong></p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            <p><strong>Aliquam lorem ante</strong>, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. <strong>Etiam rhoncus</strong>. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante <a href="#">tincidunt tempus</a>.</p>

                            <hr class="my-5">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <div class="display-4 mb-1 font-weight-normal">
                                            2021
                                        </div>
                                        Founded in
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <div class="display-4 mb-1 font-weight-normal">
                                            25+
                                        </div>
                                        Employees
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <div class="display-4 mb-1 font-weight-normal">
                                            1000+
                                        </div>
                                        Customers
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
