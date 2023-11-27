<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order_item;
use App\Models\Medicine_wherehouse;
class Order extends Model
{
    protected $fillable = [
        'order_date',
        'total_amount',
        'status',
        'payment_status'
    ];

    public function user(){
        return $this->belongsTO(User::class);
    }

    public function orderItem(){
        return $this->hanMany(Order_item::class);
    }

    public function medicine_wherehouse(){
        return $this->belongsTo(Medicine_wherehouse::class);
    }
}
