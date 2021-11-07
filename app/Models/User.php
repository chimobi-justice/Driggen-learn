<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * for generating uuid.
 */
use App\Models\Traits\HasUuid;

use App\Models\Course;
use App\Models\EnrollCourse;
use App\Models\Comment;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuid;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'avatar',
        'provider_id',
        'accountType',
        'slug'
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

    public function course() 
    {
        return $this->hasMany(Course::class);
    }

    public function enrollCourse() 
    {
        return $this->hasMany(EnrollCourse::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    } 
}
