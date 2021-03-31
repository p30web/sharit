<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function show_upload_form()
    {
        return view('pages.upload_form');
    }

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

        $fileName = time().'.'.$request->file('file')->extension();

        $request->file('file')->move(public_path('uploads'), $fileName);

        return back()
            ->with('successful','You have successfully upload file.')
            ->with('file',$fileName);

        return redirect()->back()->withInput();
    }
}
