<?php


namespace App\Http;


use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules() {
        return[
            'title' => 'required|min:2|max:30',
            'author' => 'required|min:3|max:30',
            'year' => 'required|min:2|max:4',
        ];
    }

    public function messages() {
        return [
            'title.required' => "title is required",
            'title.min' => "Minimum 2 symbols in title!",
            'title.max' => "Maximum 30 symbols in title!",

            'author.required' => "author name is required",
            'author.min' => "Minimum 2 symbols in author!",
            'author.max' => "Maximum 30 symbols in author!",

            'year.required' => "year is required",
            'year.min' => "Minimum 2 symbols in year!",
            'year.max' => "Maximum 4 symbols in year!",
        ];
    }
}
