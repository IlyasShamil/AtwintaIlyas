<?php

namespace App\Http\Controllers\Blog\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends WorkerBaseController
{
     public function index() {
    	return view('blog.worker.index');
    }
}
