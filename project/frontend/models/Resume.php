<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class Resume extends ActiveRecord{
	public $now_salarys;
	public function rules(){
		return [
			['expect_joblocation','required','message'=>'不能为空'],
            ['expect_salary', 'required','message'=>'不能为空'],
            ['arrival_time', 'required', 'message'=>'不能为空'],
		];
	}
}