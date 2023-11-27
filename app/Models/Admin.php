<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine_wherehouse;

class Admin extends Model
{
    public function Medicine_wherehouses(){
        return $this->belongsTo(Medicine_wherehouse::class);
    }
}
