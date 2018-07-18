<?php

namespace App\Http\Controllers\Members;

use App\Http\Requests\MembersRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Members\IndexController;

class ActionController extends IndexController
{
    //
    public function doCreate(MembersRequest $request)
    {
    	$this->members->saveData($request);
 
    }
}
