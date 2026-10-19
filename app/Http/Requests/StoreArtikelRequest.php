<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // izinkan semua pengguna yang lolos middleware menjalankan request ini
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|min:5|max:255',
            'slug' => 'required|unique:artikel,slug',
            'isi' => 'required|min:20',
            'status' => 'required|in:draft,terbit',
            'thumbnail' => 'nullable|image|max:2048',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
