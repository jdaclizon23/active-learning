<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use RealRashid\SweetAlert\Facades\Alert;

class IndexController extends Controller
{
    public function index(Request  $request)
    {
    	if($request->reset){
    		Session::forget('visited');
    		return redirect()->back();
	    }

    	if(Session::has('visited')){
    		$counter = Session::get('visited');
		    $counter += 1;

    		Session::put('visited',$counter);

	    }else {
    		Session::put('visited',1);
	    }

	    return view('welcome')->with('success','demo');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }
}
