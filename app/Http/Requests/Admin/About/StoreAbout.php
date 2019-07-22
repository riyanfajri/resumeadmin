<?php namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreAbout extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.about.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'keterangan' => ['required', 'string'],
            'created_by' => ['nullable', 'integer'],
            'updated_by' => ['nullable', 'integer'],
            'count' => ['nullable', 'integer'],
            'name' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'website' => ['required', 'string'],
            'address' => ['required', 'string'],
            
        ];
    }
}
