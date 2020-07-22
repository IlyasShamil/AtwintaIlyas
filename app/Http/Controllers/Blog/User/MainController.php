<?php

namespace App\Http\Controllers\Blog\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;

class MainController extends UserBaseController
{
    public function index() {
    	
    	$groups = Group::all();

    	return view('blog.user.index', ['groups' => $groups]);
    }
}
