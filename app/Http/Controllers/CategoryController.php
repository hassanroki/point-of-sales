<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Category Page
    function CategoryPage()
    {
        return view('pages.dashboard.category-page');
    }

    // Category List
    function CategoryList(Request $request)
    {
        $user_id    = $request->header('id');
        return Category::where('user_id', $user_id)->get();
    }

    // Category Create
    function CategoryCreate(Request $request)
    {
        $user_id    = $request->header('id');
        return Category::create([
            'name'      => $request->input('name'),
            'user_id'   => $user_id
        ]);
    }

    // Category Delete
    function CategoryDelete(Request $request)
    {
        $category_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->delete();
    }

    // Category By Id
    function CategoryByID(Request $request)
    {
        $category_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->first();
    }

    // Category Update
    function CategoryUpdate(Request $request)
    {
        $category_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->update([
            'name' => $request->input('name'),
        ]);
    }

}
