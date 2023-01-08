<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

    public function index()
    {
        // return Category::with('finances')->get();
        return Category::all();
    }

    public function store(Request $request)
    {
        $category = Category::create(
            $request->only('name', 'color', 'is_income')
        );
        // return response(
        //     $category->load('finance'),
        //     Response::HTTP_CREATED
        // );
        return response(
            $category,
            Response::HTTP_CREATED
        );
    }


    public function show($id)
    {
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->only('name', 'color', 'is_income'));
        return response(
            $category,
            Response::HTTP_ACCEPTED
        );
    }


    public function destroy($id)
    {
        Category::destroy($id);
        return response($id);
    }
}
