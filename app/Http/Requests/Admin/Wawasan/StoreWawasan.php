<?php namespace App\Http\Requests\Admin\Wawasan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreWawasan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.wawasan.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'pengalaman' => ['required', 'string'],
            'date' => ['required', 'string'],
            'perusahaan' => ['required', 'string'],
            
        ];
    }
}
