<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskManagement extends Model
{
    protected $fillable = [
      'title',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
    ];
}
