<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ResumeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		    'sex'=>'required|boolean',
            'name' => 'required',
//            /[\x{4e00}-\x{9fa5}]+|[a-zA-Z]+|[0-9]0+/u
//			'name' => 'required|[\u4E00-\u9FA5]+(?:·[\u4E00-\u9FA5]+)*',
            'title' => 'required',
            'photo' => 'required',
            'birthday' => 'required|date',
            'city' => 'required',
            'expect_location' => 'required',
            'introduction' => 'required',
		];
	}

}
