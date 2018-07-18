<?php

namespace App\Models\Traits\Methods;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Members;


trait MembersMethods
{
        public function saveData($request, $id=false)
    {
        $data = new Members;
        
        //if ($id) $data = $this->find($id);
        
        //if (is_array($request)) $request = (object) $request;
        
        $data = prepareData($data, $this->fillable, $request, $this->nullable);
        if ($data->save()) {
            
            return $data;
        }

        return false; 
    }
}
