<?php

namespace Laracoin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function strtotime;

class UserProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $date = strtotime('-18 year', time());
        $date = date('Y-m-d', $date);

        return [
            'firstname' => 'required|min:4|max:15',
            'lastname' => 'required|min:4|max:15',
            'images' => 'image',
            'birth' => 'required|before:'. $date,
            'gender' => 'required',
            'address' => 'required|min:5|max:40',
            'phone' => 'numeric|min:6'
        ];
    }
}
