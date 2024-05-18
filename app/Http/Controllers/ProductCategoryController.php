<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::where('deleted', 'false')->get();
        return view('product-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('product-categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_category_name' => 'required',
            'status' => 'required',
        ]);

        ProductCategory::create($validatedData);
        return redirect()->route('product-categories.index');
    }

    public function edit($id)
    {
        $category = ProductCategory::find($id);
        if ($category && $category->deleted === 'false') {
            return view('product-categories.edit', compact('category'));
        }
        return redirect()->route('product-categories.index')->with('error', 'Category not found');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_category_name' => 'string',
            'status' => 'string',
        ]);

        $category = ProductCategory::find($id);
        if ($category && $category->deleted === 'false') {
            $category->update($request->all());
            return redirect()->route('product-categories.index');
        }
        return redirect()->route('product-categories.index')->with('error', 'Category not found');
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id);
        if ($category && $category->deleted === 'false') {
            $category->update(['deleted' => 'true']);
            return redirect()->route('product-categories.index')->with('success', 'Category soft deleted');
        }
        return redirect()->route('product-categories.index')->with('error', 'Category not found');
    }
}
