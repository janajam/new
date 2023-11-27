<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category_item;
use App\Models\Medicine_wherehouse;

class Category extends Model
{

    protected $fillable = [
        'name',
    ];

    public function categoryItem(){
        return $this->hanMany(Category_item::class);
    }

    public function medicine_wherehouses(){
        return $this->belongsTo(Medicine_wherehouse::class);
    }
    
    
}
