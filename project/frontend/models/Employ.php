<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class Employ extends ActiveRecord{
	public function rules(){
		return[
			['work_name', 'required','message'=>'不能为空'],
			['money', 'required','message'=>'不能为空'],
			['work_years', 'required','message'=>'不能为空'],
			['hownum', 'required','message'=>'不能为空'],
			['work_area', 'required','message'=>'不能为空'],
			['work_nature', 'required','message'=>'不能为空'],
			['education', 'required','message'=>'不能为空'],
		];
	}
}