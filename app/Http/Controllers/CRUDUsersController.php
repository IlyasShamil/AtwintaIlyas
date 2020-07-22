<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Group;
use App\User_role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CRUDUsersController extends Controller
{
    use ValidatesRequests;

    public function __construct() {
    	$this->middleware('auth');
    	$this->middleware('status');


    	
    }

     public function index() {

    	$user = User::all();


    	return view('user.list', ['users' => $user]);
    }

    public function create() {
        $roles = Role::all();
        $groups = Group::all();
    	return view('user.create' , ['roles' => $roles, 'groups' => $groups]);
    }

    public function store ( Request $request) {
    	
    	

    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
    		'password' => 'required'
    	]);

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->id_group = $request->get('group');
        $user->save();
        $user = User::all()->where('email', $request->get('email'))->first();
        $user_role = new User_role;
        $user_role->user_id = $user->id;
        $user_role->role_id = $request->get('role');
        $user_role->save();


        return redirect()->route('users.index');


        // return redirect()->route('groups.index');
    	// $user = new User;
    	// $user->fill($request->all());
    	// $user->save();
    }

    public function edit($id) {
    	$user = User::find($id);

    	return view('user.edit' , ['user' => $user]);

    }

    public function update(Request $request, $id) {
    	$this->validate($request, [
    		'name' => 'required'
    	]);

    	$user = user::find($id);

    	$user->fill($request->all());
    	$user->save();

    	return redirect()->route('users.index');
    }

    public function show($id) {

    	$user = User::find($id);

    	return view('user.show' , ['users' => $user]);
    }

    public function destroy($id) {
    	User::find($id)->delete();
    	return redirect()->route('users.index');
    }
}
