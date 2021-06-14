<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	public 	function index() {
		$category=Category::where("parentcate_id","0")
		->get();
		return view('index',['category'=>$category]);
	}
	
	public 	function createcategory() {
		$category=new Category;
		$category->category_name=request('category_name');
		$category->parentcate_id=request('parentcate_id');
		$category->save();
		return redirect('/');
	}

}
