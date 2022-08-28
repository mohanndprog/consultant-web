<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultant_id',
        'title',
        'description',
        'subject',
        'total_seats',
        'booked_seats',
        'price',
        'start_date',
        'end_date',
        'status',
    ];

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }
}
