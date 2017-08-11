<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class User_info extends ActiveRecord{

	public function rules(){
		return [
			['birth','required','message'=>'生日不能为空'],
			['email', 'trim'],
            ['email', 'required','message'=>'邮箱不能为空'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '此邮箱已经注册过'],
            ['tel','match','pattern' => '/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|189[0-9]{8}$/','message' => '请输入正确的手机号码.'],
  			['user_name','required'],
		];
	}
}