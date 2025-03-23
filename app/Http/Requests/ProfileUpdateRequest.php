<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:20', 'regex:/^\d+$/'],
            'number_phone' => ['required', 'string', 'max:20', 'regex:/^\d+$/'],
            'tanggal_lahir' => ['required', 'date'], 
            'gender' => ['required', 'string', 'in:a,b'], // Hanya opsi "a" dan "b"
            'disabilitas' => ['required', 'string', 'in:ya,tidak'], // Hanya opsi "ya" dan "tidak"
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
        ];
    }
}
