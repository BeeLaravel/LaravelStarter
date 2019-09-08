<?php
namespace App\Http\Requests;

class FormRequest extends \Illuminate\Foundation\Http\FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [];
    }
}
