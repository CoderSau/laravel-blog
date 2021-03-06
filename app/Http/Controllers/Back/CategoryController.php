<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('back.categories.index', compact('categories'));
    }
    public function switch(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status= $request->statu =="true"?1 :0;
        $category->save();
    }

    public function getData(Request $request)
    {
        $category = Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function create(Request $request)
    {
        $isExist=Category::whereSlug(Str::slug($request->category))->first();
        if ($isExist) {
            toastr()->error($request->category.'adında bir kategori bulunmaktadır');
            return redirect()->back();
        }

        $category = new Category;
        $category->name=$request->category;
        $category->slug=Str::slug($request->category);
        if ($request->hasFile('image')) {
            $imageName=Str::slug($request->category).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $category->image='uploads/'.$imageName;
        }
        $category->save();
        toastr()->success('Kategori başarıyla oluşturuldu');
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $isSlug=Category::whereSlug(Str::slug($request->slug))->whereNotIn('id', [$request->id])->first();
        $isName=Category::whereName($request->category)->whereNotIn('id', [$request->id])->first();
        if ($isSlug or $isName) {
            toastr()->error($request->category.'adında bir kategori bulunmaktadır'.$request->id);
            return redirect()->back();
        }

        $category = Category::findOrFail($request->id);
        $category->name=$request->category;
        if ($category->slug == $request->slug) {
            $category->slug=Str::slug($request->category);
        } else {
            $category->slug=Str::slug($request->slug);
        }
        if ($request->hasFile('image')) {
            $imageName=Str::slug($request->category).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $category->image='uploads/'.$imageName;
        }
        $category->save();
        toastr()->success('Kategori başarıyla oluşturuldu');
        return redirect()->back();
    }

    public function remove(Request $request)
    {
        $category=Category::findOrFail($request->id);
        if ($category->id ==1) {
            toastr()->error($category->name.' adlı kategori silinemez');
            return redirect()->back();
        }
        $count = $category->articleCount();
        if ($count>0) {
            Article::where('category_id', $category->id)->update(['category_id'=>1]);
            $defaultCategory=Category::findOrFail(1);
            toastr()->success('bu kategoriye ait '.$count.' makale '.$defaultCategory->name.' kategorisine aktarıldı');
        }
        $category->delete();
        toastr()->success('Kategori başarıyla silindi');
        return redirect()->back();
    }
}
