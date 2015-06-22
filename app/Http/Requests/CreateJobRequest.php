<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateJobRequest extends Request
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
        return [
            'title' => 'required|max:255',
            'desc' => 'required',
            'location' => 'required|max:255',
            'salary_min' => 'required|numeric|min:0',
            'salary_max' => 'required|numeric',
            'salary_max'  => 'required|numeric',
        ];
    }
}
