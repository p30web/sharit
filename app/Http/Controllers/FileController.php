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
}
