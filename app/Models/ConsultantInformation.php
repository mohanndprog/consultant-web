<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultant_id',
        'phone',
        'country',
        'gender',
        'image',
        'bio',
        'institution',
        'start_year',
        'end_year',
        'degree',
        'average_rating'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }
}