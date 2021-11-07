<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * for generating uuid.
 */
use App\Models\Traits\HasUuid;

use App\Models\Course;

class Comment extends Model
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
        'comment',
        'course_id',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
}
