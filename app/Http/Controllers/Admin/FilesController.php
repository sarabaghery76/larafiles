<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.file.list', compact('files'))->with('panel_title', 'لیست فایل ها');
    }

    public function create()
    {
        return view('admin.file.create')->with('panel_title', 'ایجاد فایل جدید');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file_title' => 'required',
            'file_description' => 'required',
            'fileItem' => 'required'
        ], [
            'file_title.required' => 'وارد کردن نام فایل الزامی است.',
            'file_description.required' => 'وارد کردن توضیحات فایل الزامی است.',
            'fileItem.required' => 'انتخاب فایل الزامی است.'
        ]);
        $new_file_data = [
            'file_title' => $request->input('file_title'),
            'file_description' => $request->input('file_description'),
            'file_type' => $request->file('fileItem')->getMimeType(),
            'file_size' => $request->file('fileItem')->getClientSize()
        ];
        $new_file_name = str_random(20) . '.' . $request->file('fileItem')->getClientOriginalExtension();
        $result = $request->file('fileItem')->Move(public_path('images'), $new_file_name);
        //$result = $request->file('fileItem')->storeAs('images', $new_file_name);

        if ($result instanceof \Symfony\Component\HttpFoundation\File\File) {
            $new_file_data['file_name'] = $new_file_name;
            File::create($new_file_data);
            return redirect()->route('admin.files.list')->with('success', 'فایل مورد نظر با موفقیت ثبت گردید.');
        }
    }

    public function edit()
    {
        
    }
}
