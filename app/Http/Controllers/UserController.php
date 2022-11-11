<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index() {

        $users = User::all();
        $id = Auth::user()->id; 
        $adminData = User::find($id);
        return view('admin.profile',['users'=>$users]);
     }

     public function edit(Request $request) {  
        
        $users = DB::select('select * from users');
        return view('admin.edit-profile',['users'=>$users]);
     }

     public function update(Request $request)
{
        # Validation
        $request->validate([

            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
public function updateDetails(Request $request,$id) {

                    $user = User::find($id);
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');

                    if ($request->hasfile('image')) {
                        $file = $request->file('image');
                        $extension = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;
                        $file->move('backend/images',$filename);
                        $user->image=$filename;
                    }
                    $user->save();
    return redirect()->route('profile')
                    ->with('success',' updated successfully');
    }

}