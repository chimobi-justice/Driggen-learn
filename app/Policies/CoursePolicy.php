<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function create(User $user) {
        return $user->accountType === true;
    }

    public function delete(User $user, Course $course)
    {
        return $user->id === $course->user_id;
    }
}
