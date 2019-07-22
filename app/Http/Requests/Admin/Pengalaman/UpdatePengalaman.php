<?php namespace App\Http\Requests\Admin\Pengalaman;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePengalaman extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.pengalaman.edit', $this->pengalaman);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'pengalaman' => ['sometimes', 'string'],
            'date' => ['sometimes', 'string'],
            'perusahaan' => ['sometimes', 'string'],
            
        ];
    }
}
