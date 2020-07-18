<?php

namespace App\Http\Controllers\Blog\Worker;

use App\Http\Controllers\Blog\BaseController as MainBaseController;
use Illuminate\Http\Request;

abstract class WorkerBaseController extends MainBaseController
{
    public function __construct() {
    	$this->middleware('auth');
    	$this->middleware('statusWorker');
    }
}

