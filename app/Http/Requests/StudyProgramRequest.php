<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyProgramRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'department_id' => ['required'],
          'grade' => ['required'],
          'name' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
