<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;

    public function getNextId() 
    {
        $statement = DB::select("show table status like 'menus'");
        return $statement[0]->Auto_increment;
    }
}
