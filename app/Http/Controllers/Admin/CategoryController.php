<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WebHelper;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withCount('posts')->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'pict' => 'required'
        ]);

        $image = WebHelper::saveImageToPublic($request->file('pict'), '/img/category');

        Category::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'pict' => $image
        ]);

        flash()->overlay('Category created successfully');

        return redirect('/admin/categories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required'
            'pict' => 'required'
        ]);

        if ($request->has('pict')) {
            $image = WebHelper::saveImageToPublic($request->file('pict'), '/img/category');
            $category->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'pict' => $image
            ]);
        } else {
            $category->update([
                'name' => $request->name,
                'desc' => $request->desc
            ]);
        }
        flash()->overlay('Category updated successfully');

        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        flash()->overlay('Category deleted successfully');

        return redirect('/admin/categories');
    }
}
