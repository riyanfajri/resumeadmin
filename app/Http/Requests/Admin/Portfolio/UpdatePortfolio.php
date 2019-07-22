<?php namespace App\Http\Requests\Admin\Portfolio;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePortfolio extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.portfolio.edit', $this->portfolio);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'image' => ['sometimes', 'string'],
            'judul' => ['sometimes', 'string'],
            'keterangan' => ['sometimes', 'string'],
            
        ];
    }
}
