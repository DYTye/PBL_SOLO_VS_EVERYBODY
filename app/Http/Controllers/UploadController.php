<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
        public function upload(Request $request)
        {
            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/ckeditor'), $filename);
    
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('uploads/ckeditor/' . $filename);
                $msg = 'Upload berhasil';
    
                return response()->json([
                    'uploaded' => 1,
                    'fileName' => $filename,
                    'url' => $url
                ]);
            }
    
            return response()->json(['uploaded' => 0, 'error' => ['message' => 'Upload gagal']]);
        }
    
    
    
    

}
