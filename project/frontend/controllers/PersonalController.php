<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

class PersonalController extends Controller{
	public $layout = "jobheader1";
	public function actionIndex(){
		return $this->render("member_apply");
	}
	public function actionMember_resume(){
		$sql='select * from user_info as ui left join resume as r on ui.user_id=r.user_id where ui.user_id =1';
		$data = Yii::$app->db->createCommand($sql)->queryOne();
		$sql1="select * from record where user_id=1";
		$data1 = Yii::$app->db->createCommand($sql1)->queryAll();
		return $this->render("member_resume",array("data"=>$data,"data1"=>$data1));
	}
}