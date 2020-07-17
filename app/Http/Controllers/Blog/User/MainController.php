<?php

namespace App\Http\Controllers\Blog\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends UserBaseController
{
    public function index() {
    	return view('blog.user.index');
    }
}
