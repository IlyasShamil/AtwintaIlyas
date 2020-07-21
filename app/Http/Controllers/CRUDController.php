<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\createGroupRequest;


class CRUDController extends Controller
{
	use ValidatesRequests;

    public function __construct() {
    	$this->middleware('auth');
    	$this->middleware('status');


    	
    }

    public function index() {

    	return view('group.list');
    }

    public function create() {

    	return view('group.create');
    }

    public function store ( createGroupRequest $request) {
    	
    	

    	// $this->validate($request, [
    	// 	'name' => 'required'
    	// ]);

    	$group = new Group;
    	$group->fill($request->all());
    	$group->save();

    	return redirect()->route('groups.index');


    	// Group::create($request->all());
    	// return redirect()->route('groups.index');

    	// $group = new Group;
    	// $group->name = $request->get('name');
    	// $group->save();
    	// return redirect()->route('groups.index');
    }
}
