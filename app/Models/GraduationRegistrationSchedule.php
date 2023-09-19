<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GraduationRegistrationSchedule extends Model
{
    protected $fillable = [
      'start_date',
      'end_date',
    ];

    protected $casts = [
      'start_date' => 'datetime',
      'end_date' => 'datetime',
    ];
}
