<?php
/*
 * File name: CreateEProviderPayoutRequest.php
 * Last modified: 2021.01.30 at 12:37:41
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

namespace App\Http\Requests;

use App\Models\EProviderPayout;
use Illuminate\Foundation\Http\FormRequest;

class CreateEProviderPayoutRequest extends FormRequest
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
        return EProviderPayout::$rules;
    }
}
