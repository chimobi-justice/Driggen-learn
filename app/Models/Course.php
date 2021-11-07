<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * for generating uuid.
 */
use App\Models\Traits\HasUuid;

use App\Models\User;
use App\Models\Course;
use App\Models\EnrollCourse;

class Course extends Model
{
    use HasFactory, HasUuid;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'videoUrl',
        'title',
        'category',
        'description',
        'coverImage',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function enrollCourse() 
    {
        return $this->hasMany(EnrollCourse::class);
    }

    public function enrollBy(User $user)
    {
        return $this->enrollCourse->contains('user_id', $user->id);
    }
}
