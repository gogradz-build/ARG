<?php

namespace Modules\Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=> ['nullable','integer'],
            'shop_name'=> ['required','string','max:255'],
            'shop_address'=> ['required','string','max:255'],
            'shop_owner_name'=> ['required','string','max:255'],
            'shop_contact_number'=> ['required','string','max:255'],
            'shop_email' => ['nullable','email'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
          return [
            'shop_name.required'=> 'Shop name is required.',
            'shop_address.required'=> 'Shop Address is required.',
            'shop_owner_name.required'=> 'Shop Owner is required.',
            'shop_contact_number.required'=> 'Shop Contact number is required.',
        ];
    }
}
