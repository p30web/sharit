@extends('layout.app')
@section('title') MyFiles @endsection
@include('partials.navbar')
<div class="intro py-4 bg-info text-white">
    <div class="intro-content">
        <div class="container">
            <h1>My files</h1>
            <p class="lead mb-4">Manage your files.</p>
        </div>
    </div>
</div>
@section('content')
    <main class="main" role="main">
        <div class="py-5 bg-light">
            <div class="container">

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Visit</th>
                        <th>Size</th>
                        <th class="text-right"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)
                        <tr class="bg-white">
                            <td>
                                <div class="media align-items-center">
                                    <i class="mx-2 far fa-2x fa-folder-open"></i>
                                    <div class="media-body ml-2">
                                        <a href="{{ action('\App\Http\Controllers\FileController@show_file',$file->uniq_id) }}">
                                            <span class="h6 mb-0">{{$file->name}}</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <time class="timeago" datetime="{{$file->created_at}}" data-tid="79">{{$file->created_at->diffForHumans()}}</time>
                            </td>
                            <td class="align-middle">
                                <span class="badge badge-success">{{$file->visit_count}}</span>
                            </td>
                            <td class="align-middle">
                                {{$file->size}} Kb
                            </td>
                            <td class="text-right">
                                <form action="{{ action('\App\Http\Controllers\FileController@destroy',$file->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete the file?');" class="btn btn-outline-danger">Delete File</button>
                                </form>
                            </td>
                        </tr>
                        <tr class="bg-light">
                            <td colspan="5">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </main>
@endsection
