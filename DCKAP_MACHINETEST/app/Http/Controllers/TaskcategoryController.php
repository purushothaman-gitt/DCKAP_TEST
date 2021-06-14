<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taskcategory;

class TaskcategoryController extends Controller
{
    	public function view(Request $request)
	{
		if($request->ajax())
		{
			$id= $request->id;
			$data=Taskcategory::where("taskcat_id","=","$id")->get();
			echo json_encode($data);
		}
	}

	public function delete(Request $request)
	{
		if($request->ajax())
		{
			$id= $request->id;
			$testcase=Taskcategory::findorfail($id);
			$testcase->delete();
			echo "<script>alert('Subcategory Testcase deleted successfully');</script>";
		}
	}

	public 	function savetestcases(Request $request) {
		$name=$request->file('photo')->getClientOriginalName();
		$request->file('photo')->storeAs('public/images',$name);
		$taskcategory=new Taskcategory;
		$taskcategory->categoryname=request('categoryname');
		$taskcategory->testcasesum=request('testcasesum');
		$taskcategory->description=request('description');
		$taskcategory->taskcat_id=request('taskcat_id');
		$taskcategory->filename=$name;
		$taskcategory->save();
		return redirect('/');
	}


}
