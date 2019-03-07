<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|max:50',
            'mail' => 'required|max:50',
            'phone' => 'required|max:15',
            'company_name'=> 'max:255',
            'business' => 'max:255',
            'design'=> 'max:255',
            'type'=> 'max:255',
            'functions'=> 'max:255',
            'side_services'=> 'max:255',
            'lang'=> 'max:255',
            'other'=> 'max:255',
            'sections'=> 'max:255',
            'navigation'=> 'max:255',
            'information_blocks'=> 'max:255',
            'desires'=> 'max:255',
            'content'=> 'max:255',
            'additional_services'=> 'max:255',


        ];
    }
    public function messages()
    {
        return [
            'phone.max' => 'Հեռախոսահամարը Չգերազանցել 15 Նիշը',
            'name.max' => 'Չգերազանցել 50 Նիշը',
            'mail.max' => 'Չգերազանցել 50 Նիշը',
            'max' => 'Չգերազանցել 255 Նիշը',
            'required'=>'Անուն, Էլ․Հացեն և Հեռախոսահամր Դաշտերը Չպետք է Դատարկ Լինեն'

        ];
    }
}
