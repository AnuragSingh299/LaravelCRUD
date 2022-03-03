<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
    //    if($this->getMethod() == 'post')//store
    //    {
        return [
            'name' => 'required',
             'phone_no' => 'required|max:20',
             'date_of_birth' => 'required',
             'email' => 'required|max:30',
             'gender' => 'required',
             'age' => 'required|numeric|max:150',
             'description' => 'required',
        ];
       //}

    //    else//update
    //    {
    //     return [
    //         'name' => 'required',
    //          'phone_no' => 'required|max:20|unique:persons,phone_no,'.$this->get('person_id'),
    //          'date_of_birth' => 'required',
    //          'email' => 'required|max:30|unique:persons,email,person_id'.$this->get('person_id'),
    //          'gender' => 'required',
    //          'age' => 'required|numeric|max:150',
    //          'description' => 'required',
    //     ];
    //    }
        
    }
}
