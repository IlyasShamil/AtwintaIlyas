<?php

namespace App\Http\Controllers\Blog\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Group;
use App\Models\Role;

class MainController extends WorkerBaseController
{
     public function index() {
     	$name_user = User::all();
     	$group = Group::all();
     	$name_role = Role::all();
    	return view('blog.worker.index' , compact('name_user', 'name_role','group'));
    }
}
