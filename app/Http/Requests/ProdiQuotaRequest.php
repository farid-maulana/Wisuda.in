<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdiQuotaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'study_program_id' => ['required'],
          'graduation_id' => ['required'],
          'quota' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
