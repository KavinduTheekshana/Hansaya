<?php

namespace App\Http\Controllers;

use App\Models\File;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function upload_file()
    {
        return view('file_upload');
    }

    public function fileUpload(Request $request)
    {
        $extension = $request->file('file')->extension();
        $size= $request->file('file')->getSize();
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        for ($i = 0; $size > 1024; $i++) {
            $size /= 1024;
        }
        $file_size= round($size, 2) . ' ' . $units[$i];

        $request->validate([
            'file' => 'required|mimes:pdf,doc|max:2048',
            'grade' => 'required'
        ]);


        $files = new File();
        $files->grade = $request->input('grade');
        $files->file_size = $file_size;
        $files->extension = $extension;
        $files->author = Auth::user()->name;
        $files->name = $request->file->getClientOriginalName();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'upload/files/'; // upload path
            $file_parth = 'upload/files/' . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $file_parth);
            $files->file_path = "$file_parth";
        }



        $files->save();
        return redirect()->back()->with('status', 'File Upload Sucessfully');
    }
}
