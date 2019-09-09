<?php
namespace App\Http\Requests\Tacit;

class TestRequest extends FormRequest {
    public function rules() {
        return [
            'openid' => 'required|string',
            'qlist' => 'required|string',
        ];
    }
}
