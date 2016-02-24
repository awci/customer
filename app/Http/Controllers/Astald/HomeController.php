<?php

/**
 * 
 * AstaldController
 * 
 * For Special Script
 * Created Page 28.11.2015
 * 
 * Osman YILMAZ - www.astald.com
 */

namespace Astald\Http\Controllers\Astald;

use Astald\Http\Controllers\AstaldController;
use Illuminate\Http\Request;

use Astald\Http\Requests;
use Astald\Http\Controllers\Controller;

use Astald\Models\User; 

//use Hash;

class HomeController extends AstaldController
{
    public function index()
    {
    	return view(vw('theme.home'));
    }
 
}