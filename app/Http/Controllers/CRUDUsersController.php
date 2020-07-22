<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

    	return view('user.create');
    }

    public function store ( Request $request) {
    	
    	

    	$this->validate($request, [
    		'name' => 'required'
    	]);

    	$user = new User;
    	$user->fill($request->all());
    	$user->save();

    	return redirect()->route('users.index');


    	// $group = new Group;
    	// $group->name = $request->get('name');
    	// $group->save();
    	// return redirect()->route('groups.index');
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
