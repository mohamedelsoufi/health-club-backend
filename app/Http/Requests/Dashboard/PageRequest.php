<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'nullable|max:900|image',
            'identifier' => 'required_without:id',
            'link' => 'nullable|url',
            'video' => 'nullable|max:10000|mime:.flv,.mp4,.m3u8,.ts,.3gp,.mov,.avi,.wmv',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required_without:id', 'string','max:255', Rule::unique('page_translations', 'title')->ignore($this->id, 'page_id')]];
            $rules += [$locale . '.sub_title' => ['nullable', 'string', 'max:200']];
            $rules += [$locale . '.description' => ['nullable', 'string']];
        }

        return $rules;
    }
}
