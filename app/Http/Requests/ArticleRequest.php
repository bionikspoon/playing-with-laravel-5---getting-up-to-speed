<?php namespace App\Http\Requests;

/**
 * Class ArticleRequest
 *
 * @package App\Http\Requests
 */
class ArticleRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'required|min:3',
            'body'         => 'required',
            'published_at' => 'required|date',
        ];
    }

}
