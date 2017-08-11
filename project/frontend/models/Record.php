<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class Record extends ActiveRecord{
	public function rules(){
		return [
			['work_name','required','message'=>'不能为空'],
            ['start_time', 'required','message'=>'不能为空'],
            ['end_time', 'required', 'message'=>'不能为空'],
            ['work_content', 'required', 'message'=>'不能为空'],
		];
	}
}