<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    { 
        return true;
    }
    
    public function index(User $user)
    {
       return $user->role == 2;
    }

    public function create(User $user)
    {
       return $user->role == 2;
    }

    public function edit(User $user, Course $course)
    {
       return $user->id = $course->user_id;
    }

    public function update(User $user, Course $course)
    {
       return $user->id = $course->user_id;
    }

    public function enroll(User $user)
    {
       return $user->role == 1; 
    }
}
