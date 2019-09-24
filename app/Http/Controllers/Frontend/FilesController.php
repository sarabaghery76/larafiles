<?php

namespace App\Http\Controllers\Frontend;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function details(Request $request,int $file_id)
    {
        $file_item =File::find($file_id);
        $current_user=5;
        return view('frontend.files.single',compact('file_item','current_user'));
    }

    public function download(Request $request,int $file_id)
    {

    }
}
