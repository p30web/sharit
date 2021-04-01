@extends('layout.app')
@section('title') {{$file->name}} @endsection
@include('partials.navbar')
@section('content')
    <div class="intro py-4 bg-info text-white">
        <div class="intro-content">
            <div class="container">
                <h1>Show File</h1>
                <p class="lead mb-4">Upload &amp; files Free ...</p>
            </div>
        </div>
    </div>
    <main class="main" role="main">
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-2">
                                    @include('partials.errors')
                                </div>
                                <h5 class="card-title">Show File :</h5>
                                <div class="card-body text-center">
                                    @if(in_array($file->file_type,['image/jpeg','image/png']))
                                        <img src="{{env('APP_URL')}}/uploads/{{$file->url}}" alt="{{$file->name}}" class="img-fluid mb-2" width="500" height="500" style="border: 3px solid #f0f2f4;">
                                    @endif


                                    <h4 class="card-title mb-0">{{$file->name}}</h4>
                                    <div class="text-muted mb-2">{{$file->file_type}}</div>

                                    <div>
                                        <a class="btn btn-success btn-sm" href="{{env('APP_URL')}}/uploads/{{$file->url}}">View file</a>
                                        <a class="btn btn-secondary btn-sm" href="{{route('download_file',$file->id)}}">
                                            <i class="far fa-save"></i> Download file</a>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <br>
                                <p>Visit : <span class="badge badge-primary">{{$file->visit_count}}</span></p>
                                <p>download_count : <span class="badge badge-primary">{{$file->download_count}}</span></p>
                                <p>File Name : {{$file->name}}</p>
                                <p>File size : {{$file->size}} Kb</p>
                                <p>File Format : {{$file->file_type}}</p>
                                <p>Uploaded by : {{$file->user->name}}</p>
                                <p>Uploaded At : {{$file->created_at}}</p>

                                <p>Short Link : <input type="text" readonly style="width: 50%;border: none;outline: none;" id="copyTarget" value="{{env('APP_URL')}}/{{$file->uniq_id}}">
                                </p>
                                <p> <button class="btn btn-success btn-sm" id="copyButton">Copy Short link</button></p>
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
        document.getElementById("copyButton").addEventListener("click", function() {
            copyToClipboard(document.getElementById("copyTarget"));
        });

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand("copy");
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }
    </script>
@endpush
