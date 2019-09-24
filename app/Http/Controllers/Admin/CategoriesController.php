<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.list',compact('categories'))->with('panel_title','لیست دسته بندی ها');
    }

    public function create()
    {
        return view('admin.category.create',compact('categories'))->with('panel_title','ایجاد دسته بندی جدید');
    }

    public function edit(Request $request,$category_id)
    {
        $catItem =Category::find($category_id);
        return view('admin.category.edit',compact('catItem'))->with('panel_title','ویرایش دسته بندی');
    }

    public function store(Request $request)
    {
        $new_category =Category::create([
            'category_name' => $request->input('category_name')
        ]);
        if($new_category)
        {
            return redirect()->route('admin.categories.list')->with('success','دسته بندی جدید با موفقیت ایجاد شد.');
        }

    }

    public function remove(Request $request,$category_id)
    {
        Category::destroy([$category_id]);
        return redirect()->route('admin.categories.list')->with('success','دسته بندی مورد نظر با موفقیت حذف گردید.');
    }

    public function update(Request $request,$category_id)
    {
        $catItem=Category::find($category_id);
        $updateResult=$catItem->update([
            'category_name' => $request->input('category_name')
        ]);
        if($updateResult)
        {
            return redirect()->route('admin.categories.list')->with('success','اطلاعات با موفقیت به روز رسانی شد.');
        }
        
    }
}
