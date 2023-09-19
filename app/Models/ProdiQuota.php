<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdiQuota extends Model
{
    protected $fillable = [
      'graduation_id',
      'study_program_id',
      'quota',
    ];

    public function graduation(): BelongsTo
    {
        return $this->belongsTo(Graduation::class);
    }

    public function studyProgram(): BelongsTo
    {
        return $this->belongsTo(StudyProgram::class);
    }
}
