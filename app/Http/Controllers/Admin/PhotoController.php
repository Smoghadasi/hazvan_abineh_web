<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->upload;
        $fileName = $file->getClientOriginalName();
        $new_name = time() . $fileName;
        $dir = 'files/';
        $file->move($dir, $new_name);
        $url = asset('files/' . $new_name);
        $CkeditorFuncNum = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum', '$url', 'File Uploaded Success')</script>";
        echo $status;
    }
}
