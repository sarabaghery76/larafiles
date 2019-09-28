<?php

namespace App\Http\Controllers\Frontend;

use App\Models\File;
use App\Utility\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function details(Request $request, int $file_id)
    {
        $file_item = File::find($file_id);
        $current_user = 5;
        return view('frontend.files.single', compact('file_item', 'current_user'));
    }

    public function download(Request $request, int $file_id)
    {
        $user = 5;
        if (!\App\Utility\File::user_can_download_file($user))
        {
            return redirect()->route('frontend.files.access');
        }
        $fileItem = File::find($file_id);
        if (!$fileItem) {
            return redirect()->back()->with('fileError', 'فایل درخواستی معتبر نمی باشد.');
        }
        $basePath = public_path('images\\');
        $filePath =$basePath . $fileItem->file_name;
        return response()->download($filePath);
    }

    public function access()
    {
        return view('frontend.files.access');
    }
}
