<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class StoreController extends Controller
{
    function show()
    {
        $data = Test::all();

        return view('admin.dashboard',['tests'=>$data]);

    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $test= new test();
        $test->title= $request->input('title');
        $test->save();


        return redirect('admin/dashboard');
    }

    function edit(Request $request,$id)
    {
        $data = Test::all();
        return view('admin.edit')->with('tests',Test::find($id));
    }

    function update(Request $request,$id)
    {
        $test = Test::find($id);
        $test -> title = $request->input('title');
        $test->save();

        $request = session()->flash('msg','Updated');
        return redirect('admin/dashboard');
    }

    function archive()
    {

        $tests = Test::onlyTrashed()
        ->orderBy('id')->get();
        return view ('admin.archive',compact('tests'));
    }

    function restore(test $test, $id)
    {

        $test = Test::withTrashed()->find($id)->restore();
        return redirect('admin/dashboard');
        // return 'done';

    }

    public function forceDelete($id) 
{
    Test::where('id', $id)->withTrashed()->forceDelete();

    return redirect('admin/dashboard');
}


    function destroy(Test $test, $id)
    {
        if($test->trashed())
        {
            Test::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->to('admin/dashboard');
        }
        Test::destroy(array('id',$id));

        return redirect('admin/dashboard');
    }
}
