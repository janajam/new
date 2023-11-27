<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Medicine;

class Category_item extends Model
{
    public function catrgory(){
        return $this->belongsTO(Category::class);
    }

    public function medicines(){
        return $this->belongsTO(Medicine::class);
    }
}
