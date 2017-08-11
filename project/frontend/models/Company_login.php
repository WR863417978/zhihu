<?php 
	namespace frontend\models;
	use yii\db\ActiveRecord;
	class Company_login extends ActiveRecord{
		 public $qr;
		 public function rules(){
		 	return [
		 			 [['company_name','touch_name','user_tel','user_name','user_email','user_pwd'],'required'],
		 			  ['qr','compare','compareAttribute'=>'user_pwd'],

				  ];
		 }
	}

 ?>
