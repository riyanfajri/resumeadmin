<?php namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateAbout extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.about.edit', $this->about);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'keterangan' => ['sometimes', 'string'],
            'created_by' => ['nullable', 'integer'],
            'updated_by' => ['nullable', 'integer'],
            'count' => ['nullable', 'integer'],
            'name' => ['sometimes', 'string'],
            'birthday' => ['sometimes', 'date'],
            'phone' => ['sometimes', 'string'],
            'email' => ['sometimes', 'email', 'string'],
            'website' => ['sometimes', 'string'],
            'address' => ['sometimes', 'string'],
            
        ];
    }
}
