<?php namespace App\Http\Requests\Admin\Pendidikan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePendidikan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.pendidikan.edit', $this->pendidikan);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => ['sometimes', 'string'],
            'level' => ['sometimes', 'string'],
            'alamat' => ['sometimes', 'string'],
            'date' => ['sometimes', 'string'],
            
        ];
    }
}
