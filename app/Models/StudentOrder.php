<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'order_id',
        'meeting_id',
        'order_date',
        'order_status',
        'payment_method',
        'payment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function orderPrice()
    {
        return $this->belongsTo(OrderPrice::class, 'order_id');
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
