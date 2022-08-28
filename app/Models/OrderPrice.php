<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultant_id',
        'order_title',
        'order_time',
        'order_charges',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function setOrderTimeAttribute($order_time)
    {
        return $order_time . 'Mins';
    }

    public function getOrderTimeAttribute($order_time)
    {
        return $order_time . ' Mins';
    }

    // public function getOrderChargesAttribute($value)
    // {
    //     return "$" . number_format($value, 0, '.', ',');

    // }

    function studentOrder()
    {
        return $this->hasMany(StudentOrder::class, 'order_id');
    }

    function consultantOrdersWithStudents()
    {
        return $this->hasManyThrough(
            User::class,
            StudentOrder::class,
            'student_id', // Foreign key on the StudentOrder table...
            'order_id' // Foreign key on the User table...
        );
    }

    public function review(){
        return $this->hasMany(Review::class, 'order_id');
    }
}
