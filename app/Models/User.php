<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function consultant()
    {
        return $this->hasOne(ConsultantInformation::class, 'consultant_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    function orderPrice()
    {
        return $this->hasMany(OrderPrice::class, 'consultant_id');
    }

    function studentOrder()
    {
        return $this->hasMany(StudentOrder::class);
    }

    function consultantOrdersWithStudents()
    {
        return $this->hasManyThrough(
            StudentOrder::class,
            OrderPrice::class,
            'consultant_id', // Foreign key on the OrderPrice table...
            'order_id' // Foreign key on the StudentOrder table...
        );
    }

    public function review(){
        return $this->hasMany(Review::class, 'student_id');
    }

    public function groupClasses()
    {
        return $this->hasMany(GroupClass::class, 'consultant_id');
    }
}
