<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function addUserPage(){
        $user_roles = Role::get();
        return view('sectionAdmin.adminUsers.addUsers',compact('user_roles'));
    }

    public function removeUserPage(){
        $user_roles = User::get();
        return view('sectionAdmin.adminUsers.removeUsers',compact('user_roles'));
    }

    public function addUserDetails(Request $request){
        
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'roles' => 'required',
        ]);

        $user_create = User::create(request(['name','email','password']));
        $role_name = request(['roles']);

        //Role Query
        $role_id_query = Role::select('id')->where('name',$role_name)->first();
           
        //Attach Roles per user_id
        $user_create->roles()->attach($role_id_query);
        Alert::toast('Updated Successfully','success');

        return redirect()->back();
    }

    public function removeUserDetails(User $user){
        $user->roles()->detach();
        $user->delete();
        Alert::toast('Deleted Successfully','success');

        return redirect()->back();
    }
}
