@extends('layout.app')
@section('title') register @endsection
@include('partials.navbar')
@section('content')
    <div class="intro py-4 bg-info text-white">
        <div class="intro-content">
            <div class="container">
                <h1>Upload File</h1>
                <p class="lead mb-4">Upload &amp; files Free ...</p>
            </div>
        </div>
    </div>
    <main class="main" role="main">
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Upload File</h5>

                                <form action="{{route('process_upload_file')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-2">
                                        @include('partials.errors')
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="file">Select file</label>
                                        <input type="file" id="file" name="file" class="form-control-file">
                                    </div>
                                    <button type="submit" class="btn btn-info"><i class="fas fa-upload"></i> Upload file</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rules upload files : </h5>
                                <ul>
                                    <li>
                                        <small>File should not be larger than 10 MB</small>
                                    </li>
                                    <li>
                                        <small>Unauthorized formats: <span style="color:red">exe, .bmp , .php</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('footer_scripts')
    <script>
        $('input[type="file"]').change(function () {
            let ext = $('#file').val().split('.').pop().toLowerCase();
            let rejectFormat = ['exe','php','bmp'];
            if($.inArray(ext,rejectFormat) !== -1){
                alert('File extension is not allowed.');
                $('#file').val('');
                return false;
            }
        });
    </script>
@endpush
