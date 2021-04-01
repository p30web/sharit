<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /** @noinspection PhpUndefinedFieldInspection */
    public function show_file($uniq_id)
    {
        $file = File::query()->where('uniq_id',$uniq_id)->with('user')->firstOrFail();

        $file->visit_count = $file->visit_count + 1;

        $file->save();

        return view('pages.file_viewer',[
            'file' => $file
        ]);
    }

    public function my_files(){

        $files = Auth::user()->files;

        return view('pages.my_files',[
            'files' => $files
        ]);
    }

    public function destroy(File $file): \Illuminate\Http\RedirectResponse
    {
        try {
            $this->authorize('delete', $file);
            $file->delete();
            return redirect()
                ->action('\App\Http\Controllers\FileController@my_files')
                ->with("successful", "The file was successfully deleted");
        }  catch (\Exception $e) {
            report($e);
        }
    }

    public function download_file(File $file): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $file->download_count = $file->download_count +1;
        $file->save();
        $fileUrl = Storage::disk('public')->getAdapter()->getPathPrefix() . $file->url;
        return response()->download($fileUrl, $file->name);
    }
}
