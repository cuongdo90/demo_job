<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('crud')){
            abort(403);
        };
        $categories=Category::all();
        return view('backends.admin.job.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.admin.job.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Category $category)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $category->image = $path;
        }

        $category->name = $request->name;
        $category->quantity = $request->quantity;
        $category->save();

        session('success', 'create success');
        return redirect()->action([CategoryController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backends.admin.job.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if ($request->hasFile('image')) {

            $currentImg = $category->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $category->image = $path;
        }

        $category->name = $request->name;
        $category->quantity = $request->quantity;
        $category->save();
        session('success', 'update success');
        return redirect()->action([CategoryController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return  response()->json(['message'=>'delete successfully!']);

       /* return redirect()->action([CategoryController::class, 'index'])
            ->with('success', 'delete success');*/
    }

    public function search(Request $request)
    {
            $categorySearch = $request->search;
            $categories = Category::where('name','LIKE',"%$categorySearch%")->get();
            return view('backends.admin.job.categories.index',compact('categories'));
    }
}
