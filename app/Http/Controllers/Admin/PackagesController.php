<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.list', compact('packages'))->with('panel_title', 'لیست پکیج ها');
    }

    public function create()
    {
        return view('admin.package.create')->with('panel_title', 'ایجاد پکیج جدید');
    }

    public function store(Request $request)
    {
        $new_package = Package::create([
            'package_title' => $request->input('package_title'),
            'package_price' => $request->input('package_price')
        ]);
        if ($new_package) {
            return redirect()->route('admin.packages.list')->with('success', 'پکیج جدید با موفقیت ساخته شد.');
        }
    }

    public function edit(Request $request, $package_id)
    {
        // $packageItem = Package::find($package_id);
        //  if ($packageItem) {
        //     return redirect()->route('admin.packages.list')->with('success', 'پکیج مورد نظر با موفقیت ویرایش شد.');
        //}
    }

    public function update()
    {

    }

    public function remove()
    {

    }

    public function syncFiles(Request $request, $package_id)
    {
        $files = File::all();
        $package_item = Package::find($package_id);
        $package_files = $package_item->files()->get()->pluck('file_id')->toArray();

        return view('admin.package.files', compact('files', 'package_files'))->with('panel_title', 'انتخاب فایل های پکیج');
    }

    public function updateSyncFiles(Request $request, $package_id)
    {
        $packageItem = Package::find($package_id);
        $files = $request->input('files');
        //if ($packageItem && is_array($files)) {
            //$packageItem->files()->attach($files);
            $packageItem->files()->sync($files);
            return redirect()->route('admin.packages.list')->with('success','اطلاعات با موفقیت ذخیره شد.');
       // }
    }

}
