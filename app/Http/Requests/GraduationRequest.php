<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'name' => ['required'],
          'batch' => ['required', 'integer'],
          'session' => ['required', 'integer'],
          'schedule' => ['required', 'date'],
          'type' => ['required'],
          'quota' => ['required', 'integer'],
          'start_date' => ['required', 'date'],
          'end_date' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
