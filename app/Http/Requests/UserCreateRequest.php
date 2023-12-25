<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */


    public function rules()
    {
        return [
            'username' => 'unique:users|required',
            'email' => 'unique:users|required',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function validatedWithHashedPassword()
    {
        $validated = $this->validated();

        // Replace the 'password' field with the hashed password
        $validated['password'] = Hash::make($this->input('password'));

        return $validated;
    }

    // public function attributes()
    // {
    //     // return [
    //     //     'class_id'=>'class',
    //     // ];
    //     //INI UNTUK MENGUBAH NAMA ATRIBUT YANG DITAMPILKAN DIPESAN CONTOHNYA KELAS_ID JADI KELAS AJA
    // }

    // public function message()
    // {
    //     return [
    //         //UNTUK MENGUBAH PESAN BAWAANNYA CONTOHNYA SEPERTI DIBAWAH
    //         // 'username.required' =>'username wajib diisi';
    // 'password.max' => 'Password maksimal : max karakter'
    //     ];
    // }
}
