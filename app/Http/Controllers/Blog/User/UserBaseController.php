<?php

namespace App\Http\Controllers\Blog\User;

use App\Http\Controllers\Blog\BaseController as MainBaseController;
use Illuminate\Http\Request;

abstract class UserBaseController extends MainBaseController
{
    public function __construct() {
    	$this->middleware('auth');
    	$this->middleware('statusUser');


    	
    }
}
