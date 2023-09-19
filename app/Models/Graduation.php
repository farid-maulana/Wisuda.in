<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Graduation extends Model
{
    protected $fillable = [
      'name',
      'batch',
      'session',
      'schedule',
      'type',
      'quota',
      'graduation_registration_schedule_id',
    ];

    protected $casts = [
      'date' => 'datetime',
    ];

    public function graduation_registration_schedule(): BelongsTo
    {
        return $this->belongsTo(GraduationRegistrationSchedule::class);
    }
}
