<?php

namespace App\Models;

// ... other imports

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // ... existing code

    /**
     * Get the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get the categories for the user.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get pending tasks count.
     */
    public function getPendingTasksCountAttribute()
    {
        return $this->tasks()->where('status', 'pending')->count();
    }

    /**
     * Get completed tasks count.
     */
    public function getCompletedTasksCountAttribute()
    {
        return $this->tasks()->where('status', 'completed')->count();
    }
}
