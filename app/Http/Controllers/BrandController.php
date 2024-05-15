<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
public function index()
{
    $brands = Brand::all();
    return view('brand.index', compact('brands'));
}
}