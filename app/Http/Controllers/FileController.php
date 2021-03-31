<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /** @noinspection PhpUndefinedFieldInspection */
    public function show_file($uniq_id)
    {
        $file = File::query()->where('uniq_id',$uniq_id)->with('user')->firstOrFail();

        $file->view_count = $file->view_count + 1;

        $file->save();

        return view('pages.file_viewer',[
            'file' => $file
        ]);
    }

    public function my_files(){
        $files = File::query()->get();

        return view('pages.my_files',[
            'files' => $files
        ]);
    }

    public function destroy(File $file){
        $file->delete();
        return redirect()->action('\App\Http\Controllers\FileController@my_files')->with("successful", "The file was successfully deleted");
    }
}
