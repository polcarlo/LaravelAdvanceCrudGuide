<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Members\IndexController;
use App\Models\Members;

class IndexController extends Controller
{
    //
	public function __construct(Members $members)
	{
		$this->members = $members;
		$this->data = config('members.members');
	}

    public function index()
    {
    	return view($this->data['view'],$this->data);
    }
}
