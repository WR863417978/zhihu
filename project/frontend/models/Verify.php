<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class Verify extends ActiveRecord{
	public $verifyCode;
	public $user;
	public $qr;
	public $pwd;
	public function rules(){
		return[['verifyCode', 'required','message'=>'验证码不能为空'],
			  ['verifyCode', 'captcha','message'=>'验证码错误', 'captchaAction'=>'login/captcha'],];
	}
}