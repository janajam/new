<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine;
use App\Models\Admin;
class Medicine_wherehouse extends Model
{
    protected $fillable = [
        'name',
    ];


    public function admin(){
        return $this->hasMany(Admin::class);
    }
}
