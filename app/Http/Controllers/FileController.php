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
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
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


    public function manage_file()
    {
        $pdffiles = File::where('extension', '=', 'pdf') ->orderBy('grade', 'asc')->get();
        $wordfiles = File::where('extension', '=', 'doc')->orwhere('extension', '=', 'docx') ->orderBy('grade', 'asc')->get();
        return view('manage_file',['pdffiles' => $pdffiles,'wordfiles' => $wordfiles]);
    }

    public function manage_file_student_pdf()
    {
        $pdffiles = File::where([['extension', '=', 'pdf'],['grade', '=', Auth::user()->grade]])->orwhere([['extension', '=', 'pdf'],['grade', '=', '0']])->orderBy('grade', 'asc')->get();
       
        return view('manage_file_student_pdf',['pdffiles' => $pdffiles]);
    }

    public function manage_file_student_word()
    {
       
        $wordfiles = File::where([['extension', '=', 'doc'],['grade', '=', Auth::user()->grade]])->orwhere([['extension', '=', 'doc'],['grade', '=', '0']])->orwhere([['extension', '=', 'docx'],['grade', '=', Auth::user()->grade]])->orwhere([['extension', '=', 'docx'],['grade', '=', '0']])->orderBy('grade', 'asc')->get();
        return view('manage_file_student_word',['wordfiles' => $wordfiles]);
    }

    public function file_delete($id)
    {
        DB::table('files')->where('id', $id)->delete();
        // return redirect()->back()->with('project_diactivate_status', 'Project Delete Sucessfully');
    }

}
