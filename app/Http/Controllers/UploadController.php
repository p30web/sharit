<?php

namespace App\Http\Controllers;


use App\Models\File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function show_upload_form()
    {
        return view('pages.upload_form');
    }

    /** @noinspection PhpUndefinedFieldInspection */
    public function process_upload_file(Request $request){

        $rejectMimTypes = [
            'application/x-ms-dos-executable',
            'text/x-python'
        ];

        $this->validate($request,[
            'file' => [
                'required','file','max:10240',
                function ($attribute, $value, $fail) use($request,$rejectMimTypes) {
                    if(in_array($value->getMimeType(),$rejectMimTypes)){
                        $fail('The '.$attribute.' is invalid : file format is incorrect');
                    }
                },
            ]
        ]);

        $fileType = $request->file('file')->getMimeType();

        $fileName = time().'.'.$request->file('file')->extension();

        $url = $request->file('file')->storeAs(Carbon::now()->year . '/' . Carbon::now()->month, $fileName, 'public');

        $file = File::query()->create([
            'name' => $request->file('file')->getClientOriginalName(),
            'url' => $url,
            'size' => $request->file('file')->getSize(),
            'uniq_id' => Str::random(7),
            'file_type' => $fileType,
            'uploaded_by' => Auth::id(),
            'ip' => $request->ip()
        ]);

        return redirect()->action('\App\Http\Controllers\FileController@show_file',$file->uniq_id)
            ->with('successful','You have successfully upload file.')
            ->with('file',$fileName);

        return redirect()->back()->withInput();
    }
}
