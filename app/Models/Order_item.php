<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Medicine;

class Order_item extends Model
{
    protected $fillable = [
        'quantity',
        'price'
    ];

    public function Order(){
        return $this->belongsTO(Order::class);
    }


    public function medicine(){
        return $this->belongsTO(Medicine::class);
    }
}
