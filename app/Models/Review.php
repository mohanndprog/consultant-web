<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'consultant_id',
        'order_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function orderPrice()
    {
        return $this->belongsTo(OrderPrice::class, 'order_id');
    }

    public function studentOrder(){
        return $this->belongsTo(StudentOrder::class);
    }

}