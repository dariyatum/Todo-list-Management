<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'priority', 'status', 'due_date', 'user_id'
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormattedDueDateTimeAttribute()
    {
        if ($this->due_date) {
            return $this->due_date->format('M d, Y');
        }
        return 'No due date';
    }
}
