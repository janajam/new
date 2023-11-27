<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category_item;
use App\Models\Order_item;
use App\Models\Medicine_wherehouse;
class Medicine extends Model
{
    protected $fillable = [
        'scientific_name',
        'trade_name',
        'price',
        'company',
        'quantity_available',
        'expiration_date'
    ];
    public function categoryITem(){
        return $this->hanOne(Category_item::class);
    }

    public function orderItem(){
        return $this->hanOne(Order_item::class);
    }

    public function Medicine_wherehouse(){
        return $this->belongsTo(Medicine_wherehouse::class);
    }
    

}
