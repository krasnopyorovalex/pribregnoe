<?php

namespace Domain\Page\Requests;

use App\Http\Requests\Request;

/**
 * Class CreatePageRequest
 * @package Domain\Page\Requests
 */
class CreatePageRequest extends Request
{
    public function rules(): array
    {
        return [
            'alias' => 'bail|required|unique:pages|max:64',
            'name' => 'required|max:512',
            'template' => 'required|string|max:24',
            'title' => 'required|string|max:512',
            'description' => 'string|max:512',
            'text' => 'string|nullable',
            'is_published' => 'digits_between:0,1',
            'slider_id' => 'integer|exists:sliders,id|nullable',
            'gallery_id' => 'integer|exists:galleries,id|nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,svg'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Название» обязательно для заполнения',
            'title.required' => 'Поле «Title» обязательно для заполнения',
            'alias.required' => 'Поле «Alias» обязательно для заполнения',
            'alias.unique' => 'Значение поля «Alias» уже присутствует в базе данных',
        ];
    }
}
