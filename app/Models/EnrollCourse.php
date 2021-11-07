<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * for generating uuid.
 */
use App\Models\Traits\HasUuid;

use App\Models\User;

class EnrollCourse extends Model
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
        'course_id',
        'user_id',
    ];
}
