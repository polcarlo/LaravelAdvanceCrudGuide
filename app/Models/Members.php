<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Methods\MembersMethods;
use App\Models\Traits\Relationship\MembersRelationship;

class Members extends Model
{
    //
    use MembersMethods,
    	MembersRelationship;

    protected $table = 'members';

    protected $fillable = [ 'membership_number','name','contact','id_number','created_at','update_at'];


}
