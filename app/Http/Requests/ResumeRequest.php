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
            'user_head' => 'image|required',
            'birthday' => 'required|date',
//          'city' => 'required',
//          'expect_location' => 'required',
//          'introduction' => 'required',
		];
	}
	public function messages()
    {
        return [
            'sex.required' => '性别必须填写',
            'name.required' => '名字必须填写',
            'user_head.required' => '请上传你的头像',
            'user_head.image' => '头像必须是图片',
            'title.required' => '标题必须填写',
            'birthday.required' => '请填写你的生日',
//          'city.required' => '请填写你的籍贯',
//          'expect_location.required' => '请填写你期望的工作地区',
        ];
    }

}
