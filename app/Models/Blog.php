<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='Blogs'; //blogs is our tablename , due to this the find is working at ApiController

}
